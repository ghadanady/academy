<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use Hash;
use Mail;
use Auth;
use App\Member;
use Illuminate\Http\Request;
use App\Social;
use Socialite;


class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest.site', ['except' => ['logout' , 'getLogout']]);
    }

    public function getIndex(){


        return view('site.auth.index');
    }

    public function postLogin(Request $r){

        // dd($r->all());
       $v =  validator($r->all(), [
            'email' => 'required|email',
            'password' => 'required|min:2',
        ]);

         // setting custom attribute names
        $v->setAttributeNames([
            'email' => "البريد الالكتروني",
            'password' => "الرقم السري",
        ]);

        if ($v->fails()) {
            return msg('error.save',['msg' => implode('<br>', $v->errors()->all())]);
        }

        // grapping Member credentials
        $email = $r->input('email');
        $password = $r->input('password');

        // Searching for the Member matches the passed email
        $member= Member::where('email' ,$email)->first();
        
        if( $member && Hash::check($password, $member->password) ){
            // login the Member
            Auth::guard('members')->login($member ,$r->has('remember'));

             return msg('success.save',['msg' => "تم التسجيل بنجاح "]);
        }
        // failed
         return msg('error.save',['msg' => "من فضلك ادخل بيانات صحيحه"]);
          
          ;
    }

    public function getLogout(){
        auth()->guard('members')->logout();

       return redirect('/');
    }

    public function postRegister(Request $r){

        $v =  validator($r->all(), [
            'f_name' => 'required|min:2',
            'email' => 'required|email|unique:members',
            'password' => 'required|min:2',
            'cpassword' => 'required|min:2|same:password'

        ],[
            'agree.required' => ' يجب الموافقه علي الشروط والاحكام',
        ]);

         // setting custom attribute names
        $v->setAttributeNames([
            'f_name' => "الاسم الاول (الشخصي)",
            'l_name' => "الاسم الاخير(العائلي)",
            'email' => "البريد الالكتروني",
            'password' => "الرقم السري",
            'cpassword'=> "تاكيد الرقم السري",
        ]);

        if ($v->fails()) {
             return msg('error.save',['msg' => implode('<br>', $v->errors()->all())]);
        }

        $email = $r->input('email');

         // create a gravatar object for specified email
         $avatar = Avatarer::driver('Gravatar')->make( $email );

          // get gravatar url as a string
         $url = $avatar->url();
        // dd($url);
        $member = new Member();
        $member->f_name = $r->input('f_name');
        $member->l_name = $r->input('l_name');
        $member->email = $r->input('email');
         $member->img = $url;
        $member->password =  bcrypt($r->input('password'));
        $member->active =  1;


        if($member->save())
        {
           
           return msg('success.save',['msg' => "تم التسجيل بنجاح "]);
        }

    }

    public function getRecoverPassword(){
        return view('site.auth.recover-password');
    }

    public function getChangePassword($hash){

        $site= site::where('recover_hash' ,$hash)->first();

        if( $site ){
            return view('site.auth.new-password' , compact('hash'));
        }

        // failed
        return redirect('auth/login')->with('msg' , 'incorrect data');
    }


    public function postRecoverPassword(Request $r){


	  $v =  validator($r->all(), [
            
            
            'email' => 'required|email',

        ]);
        $v->setAttributeNames([
   
            'email' => "البريد الالكتروني",
            
        ]);
        
    
    
         if ($v->fails()) {
             return msg('error.save',['msg' => implode('<br>', $v->errors()->all())]);
        }

        // grapping site credentials
        $email = $r->input('email');

        $site= Member::where('email' ,$email)->first();

        if( $site ){
            $recover_hash = str_random(128);

            $site->update(compact('recover_hash'));

            Mail::send('site.mails.recover-password',
            compact('site','recover_hash'),
            function ($m) use ($site) {
                $m->to($site->email, $site->name)->subject('Your Reminder!');
            });

            //return redirect('auth/login');
            return msg('success.save',['msg' => " تم ارسال كلمة المرور الى الايميل   "]);
        }
        // failed
        return msg('error.save',['msg' => "حدث خطأ اثناء الارسال  "]);
        //return redirect()->back()->with('msg' , 'اincorrect data');
    }

    public function postChangePassword(Request $r){

        // Searching for the site matches the recover_hash
        $site= Member::where('recover_hash' ,$r->input('_hash'))->first();

        if( $site ){

            $this->validate($r,[
                'password' => 'required|password',
                'repassword' => 'required|same:password',
            ]);

            // grapping site credentials
            $password = bcrypt($r->input('password'));
            $recover_hash = null;

            $site->update(compact('password','recover_hash'));

            return redirect('auth/login')->with('msg' , 'incorrect data');

        }
        // failed
        return redirect()->back()->with('msg' , 'incorrect data');
    }

    /**
    * Redirect the user to the provider authentication page.
    *
    * @return Response
    */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    /**
    * Obtain the user information from the provider.
    *
    * @return Response
    */
    public function handleProviderCallback($provider)
    {
        try
        {
            $socialUser = Socialite::driver($provider)->user();
        }
        catch(\Exception $e)
        {
            return redirect('/');
        }

        //check if we have logged provider
        $socialProvider = Social::where('provider_id',$socialUser->getId())
        ->where('provider_type' , $provider)->first();

        if(!$socialProvider)
        {
            $name = explode(' ', $socialUser->getName());
            //create a new user and provider
            $user = Member::firstOrCreate([
                'email' => $socialUser->getEmail(),
                'f_name' => $name[0],
                'l_name' => end($name),
                'image' => $socialUser->getAvatar(),
                'password' => $provider
            ]);

            auth()->guard('members')->login($user);

            $user->social()->create(
                ['provider_id' => $socialUser->getId(), 'provider_type' => $provider]
            );

        }
        else{
            $user = $socialProvider->user;
        }

        auth()->login($user);

        return redirect('/');

    }

}

<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Instructor;
use App\User;
use Hash;
use Auth;
use App\Image;


class InstructorController extends Controller
{
     /**
     * render and paginate the users page.
     *
     * @return string
     */
    public function getIndex() {
        if(auth()->user()->isNormal()){
            return redirect('admin')->withWarning(trans('admin_global.denied_page'));
        }
        $users = Instructor::paginate(15);
        return view('admin.pages.instructor.all', compact('users'));
    }





    /**
     * validate and create new user.
     *
     * @param  Request $r
     * @return json
     */
    public function postAdd(Request $r) {
        

        $v = validator($r->all(), [
            "name" => 'required|min:2',
            "gender" => 'required',
            "job" => 'required|min:2',
            "phone" => 'required|min:10|numeric',
            "avatar" => 'image|mimes:png,gif,jpg,jpeg|max:20000',
            "email" => 'required|email|unique:instructors,email',
             "cat_id" => 'required',
            // "skills" => 'required|min:2'

        ],
        [
            "name.required" => "من فضلك اضف الاسم ",
            "email.required" => "من فضلط اضف الايميل ",
            "gender.required" => "من فضلك قم باختيار النوع ",
            "job.required" => "من فضلك اضف الوظيفه ",
            "phone.required" => "من فضلك اضف رقم الموبيل ",
            "cat_id.required" => "لابد من اختيار القسم",
            "skills.required" => "تم باخال مؤهلات المحاضر ",
            "avatar.required" =>"قم باضافه صوره للمحاضر "
        ]

        );
        // setting custom attribute names
        $v->setAttributeNames([
            "name" => "الاسم  ",
            "email" => "الايميل  ",
            "gender" => "النوع ",
            "phone" => "الموبيل",
            "about" => "نبذه  ",
            "skills" => "مؤهلات ",
            "avatar" =>"الصوره "

          
        ]);

        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return msg('error.save',['msg' => implode('<br>', $v->errors()->all())]);
        }

        $user = new Instructor($r->except(['_token']));
        $user->slug= $this->generateSlug($r->name);


        // save the new user data
        if ($user->save()) {

            // validate if there's an image to save it
            $destination = storage_path('uploads/images/instructor');
            if($r->avatar){

                $avatar = microtime(time()) . "_" . $r->avatar->getClientOriginalName();
                $image = $user->image()->create([
                    'name' => $avatar
                ]);

                $r->avatar->move($destination,$avatar);
            }

            return msg('success.save',['msg' => 'تم اضافه المحاضر بنجاح ']);
        }
        return msg('error.save',['msg' => 'حدث خطأ اثناء الاضافه ']);
    }



    protected function generateSlug($title)
    {
        $slug = $temp = slugify($title);
        while(Instructor::where('slug',$slug)->first()){
            $slug = $temp ."-". rand(1,1000);
        }
        return $slug;
    }
 

    /**
     * Validate and update user that has the passed id.
     *
     * @param  Request $r
     * @return json
     */
    public function postEdit(Request $r) {

        if(!$r->id){
            return msg('error.edit',['msg' => 'The user id is required.']);
        }

        $user = Instructor::find($r->id);

        if(!$user){
            return msg('error.edit',['msg' => 'There is no user with id #'.$r->id.'.']);
        }

        $v = validator($r->all(), [
            "name.required" => "من فضلك اضف الاسم ",
            "email.required" => "من فضلط اضف الايميل ",
            "gender.required" => "من فضلك قم باختيار النوع ",
            "job.required" => "من فضلك اضف الوظيفه ",
            "phone.required" => "من فضلك اضف رقم الموبيل ",
            "about.required" => "قم بادخال نبذه عن المحاضر ",
            "skills.required" => "تم باخال مؤهلات المحاضر ",
            "cat_id.required" => 'قم باختيار القسم ',
            "avatar.required" =>"قم باضافه صوره للمحاضر "


        ]);

        // setting custom attribute names
        $v->setAttributeNames([
           "name" => "الاسم  ",
            "email" => "الايميل  ",
            "gender" => "النوع ",
            "phone" => "الموبيل",
            "about" => "نبذه  ",
            "skills" => "مؤهلات ",
            "avatar" =>"الصوره "
        ]);




        // set the new values for update
        $user->name = $r->name;
        $user->email = $r->email;
        $user->job = $r->job;
        $user->gender = $r->gender;
        $user->age = $r->age;
        $user->phone = $r->phone;
        $user->about = $r->about;
        $user->skills = $r->skills;
        $user->facebook = $r->facebook;
        $user->google = $r->google;
        $user->twitter = $r->twitter;
        $user->instgram = $r->instgram;
        $user->cat_id = $r->cat_id;



        // validate if there's an image remove the old one and  save the new one.
        $destination = storage_path('uploads/images/instructor');
        if($r->avatar){

            $avatar = microtime(time()) . "_" . $r->avatar->getClientOriginalName();

            if($user->image){
                @unlink("{$destination}/{$user->image->name}");
            }

            $user->image()->updateOrCreate([],[
                'name' => $avatar
            ]);

            $r->avatar->move($destination,$avatar);
        }

        // update the user data in the database.
        if ($user->save()) {
            return msg('success.edit',['msg' => 'تم التحديث بنجاح']);
        }
        return msg('error.edit',['msg' => 'حدث خطأ اثناء التحديث ']);
    }

    public function postInfo($id)
    {
        $user = Instructor::find($id);

        if(!$user){
            return  ['status' => false, 'data' => 'There is no user with id #'.$id.'.'];
        }

        $user->gender_text = ($user->gender === 'male') ? 'ذكر' : 'انثي';
        $user->avatar = $user->image ? $user->image->name : 'default.jpg';
        $user->cat_name =  $user->Category->name ;
        $user->active_st = ($user->active === 1) ? 'فعال ' : 'غيرفعال';

        return  ['status' => true, 'data' => $user];
    }
    /**
     * delete a user account if its id is passed
     * if not it will delete the current user
     * @param  int $id
     * @return Redirect
     */
    public function getDelete($id = null) {

        if(!$id){
            $id = Auth::id();
            Auth::logout();
        }

        $user = Instructor::find($id);

        if(!$user){
            return redirect()->back()->with('m', 'User with id #'.$id.' not found');
        }

        if(!empty($user->image)){
            @unlink(storage_path('uploads/images/instructor' . $user->image->name));
        }

        $user->delete();
        return redirect()->back()->with('m', 'تم مسح المحاضر بنجاح ');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
//use App\New;

class NewsController extends Controller
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
        $news = News::paginate(15);
        return view('admin.pages.new.all', compact('news'));
    }



    /**
     * validate and create new user.
     *
     * @param  Request $r
     * @return json
     */
    public function postAdd(Request $r) {

        $v = validator($r->all(), [
            "name" => 'required',
            "avatar" => 'image|mimes:png,gif,jpg,jpeg|max:20000',
        ]);
        // setting custom attribute names
        $v->setAttributeNames([
            "name" => "قم بادخال عنوان المقال",

        ]);

        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return msg('error.save',['msg' => implode('<br>', $v->errors()->all())]);
        }

        $a = new News($r->except(['_token']));
         $a->slug= $this->generateSlug($r->name);

        // save the new Trademarkdata
        if ($a->save()) {

            // validate if there's an image to save it
            $destination = storage_path('uploads/images/new');
            if($r->avatar){

                $avatar = microtime(time()) . "_" . $r->avatar->getClientOriginalName();
                $image = $a->image()->create([
                    'name' => $avatar
                ]);

                $r->avatar->move($destination,$avatar);
            }

            return msg('success.save',['msg' => 'تمت الاضافة بنجاح ']);
        }
        return msg('error.save',['msg' => 'حدث خطأ اثناء الاضافة']);
    }

     public function postInfo($id)
    {
        $a= News::find($id);
        $a->cat = $a->Category->name;
        $a->ins = $a->instarctor->name;
        $a->img = $a->image ? $a->image->name : 'default.jpg';

        if(!$a){
            return  ['status' => false, 'data' => 'There is no user with id #'.$id.'.'];
        }
      $a->img = $a->image ? $a->image->name : 'default.jpg';

        return  ['status' => true, 'data' => $a];
    }

    

    protected function generateSlug($title)
    {
        $slug = $temp = slugify($title);
        while(News::where('slug',$slug)->first()){
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
            return msg('error.edit',['msg' => 'لا يوجد اعلان ']);
        }

        $a= News::find($r->id);

        if(!$a){
            return msg('error.edit',['msg' => 'لا يوجد اعلات '.$r->id.'.']);
        }

        $v = validator($r->all(), [
            "name" => 'required'
        ]);

        // setting custom attribute names
        $v->setAttributeNames([
            "name" => trans('admin_global.link') ]);

        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return msg('error.edit',['msg' => implode('<br>', $v->errors()->all())]);
        }


        // set the new values for update
        $a->name = $r->name;
        $a->body = $r->body;

        // validate if there's an image remove the old one and  save the new one.
        $destination = storage_path('uploads/images/new');
        if($r->avatar){

            $avatar = microtime(time()) . "_" . $r->avatar->getClientOriginalName();

            if($a->image){
                @unlink("{$destination}/{$a->image->name}");
            }

            $a->image()->updateOrCreate([],[
                'name' => $avatar
            ]);

            $r->avatar->move($destination,$avatar);
        }

        // update the Trademarkdata in the database.
        if ($a->save()) {
            return msg('success.edit',['msg' => 'تم التعديل بنجاح']);
        }
        return msg('error.edit',['msg' => 'حدث خطأ اثناء التعديل']);
    }

    /**
     * delete a Trademarkaccount if its id is passed
     * if not it will delete the current user
     * @param  int $id
     * @return Redirect
     */
    public function getDelete($id = null) {

        if(!$id){
            $id = Auth::id();
            Auth::logout();
        }

        $a= News::find($id);

        if(!$a){
            return redirect()->back()->with('m', 'لا يوجد اعلان ');
        }

        if(!empty($a->imageName)){
            @unlink(storage_path('uploads/images/new' . $ad->image->name));
        }

        $a->delete();
        return redirect()->back()->with('m', 'تم الحذف بنجاح ');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Auth;
use App\Image;
use App\Article;

class ArticleController extends Controller
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
        $articles = Article::paginate(15);
        return view('admin.pages.article.all', compact('articles'));
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
            "cat_id" => 'required',
            "ins_id" => 'required',
            "editor1" => 'required',
            "avatar" => 'image|mimes:png,gif,jpg,jpeg|max:20000',
        ]);
        // setting custom attribute names
        $v->setAttributeNames([
            "name" => "قم بادخال عنوان المقال",
            "cat_id" => " قم باختيار  القسم ",
            "ins_id" => "قم باختيار المحاضر ",
            "editor1" => "قم بادخال محتوى المقال",

        ]);

        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return msg('error.save',['msg' => implode('<br>', $v->errors()->all())]);
        }

        $a = new Article($r->except(['_token']));
        //dd($r->except(['_token']));
         $a->slug= $this->generateSlug($r->name);
         $a->body= $r->editor1;

        // save the new article
        if ($a->save()) {

            // validate if there's an image to save it
            $destination = storage_path('uploads/images/article');
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
        $a= Article::find($id);

        if(!$a){
            return  ['status' => false, 'data' => 'There is no user with id #'.$id.'.'];
        }
      $a->img = $a->image ? $a->image->name : 'default.jpg';
      $a->cat = $a->Category->name;
      $a->in = $a->instarctor->name;

        return  ['status' => true, 'data' => $a];
    }

    

    protected function generateSlug($title)
    {
        $slug = $temp = slugify($title);
        while(Article::where('slug',$slug)->first()){
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

        $a= Article::find($r->id);

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
        $a->url = $r->url;

        // validate if there's an image remove the old one and  save the new one.
        $destination = storage_path('uploads/images/article');
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

        // update the article in the database.
        if ($a->save()) {
            return msg('success.edit',['msg' => 'تم التعديل بنجاح']);
        }
        return msg('error.edit',['msg' => 'حدث خطأ اثناء التعديل']);
    }

    /**
     * delete a artice if its id is passed
     * if not it will delete the current user
     * @param  int $id
     * @return Redirect
     */
    public function getDelete($id = null) {

        if(!$id){
            $id = Auth::id();
            Auth::logout();
        }

        $a= Article::find($id);

        if(!$a){
            return redirect()->back()->with('m', 'لا يوجد اعلان ');
        }

        if(!empty($a->imageName)){
            @unlink(storage_path('uploads/images/article' . $ad->image->name));
        }

        $a->delete();
        return redirect()->back()->with('m', 'تم الحذف بنجاح ');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

use App\Image;

class PageController extends Controller
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
        $page = Page::paginate(5);
        return view('admin.pages.pages.all', compact('page'));
    }


   /**
     * @param  Request $r
     * @return json
     */
    public function postAdd(Request $r) {

        $v = validator($r->all(), [
            "title" => 'required',
        ]);
        // setting custom attribute names
        $v->setAttributeNames([
            "title" => 'لابد من اضافه عنوان للصوره',
        ]);

        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return msg('error.save',['msg' => implode('<br>', $v->errors()->all())]);
        }

        $page = new Page($r->except(['_token']));
        $page->slug= $this->generateSlug($r->title);
 

        // save the new Trademarkdata
        if ($page->save()) {


            return msg('success.save',['msg' => 'تمت الاضافة بنجاح ']);
        }
        return msg('error.save',['msg' => 'حدث خطأ اثناء الاضافة']);
    }


    protected function generateSlug($title)
    {
        $slug = $temp = slugify($title);
        while(Page::where('slug',$slug)->first()){
            $slug = $temp ."-". rand(1,1000);
        }
        return $slug;
    }


     public function postInfo($id)
    {
        $page = Page::find($id);

        if(!$page){
            return  ['status' => false, 'data' => 'لا يوجد اعلان '];
        }
      $page->status = $page->member ? "للاعضاء" : 'عامة ';

        return  ['status' => true, 'data' => $page];
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

        $page = Page::find($r->id);

        if(!$page){
            return msg('error.edit',['msg' => 'لا يوجد اعلات '.$r->id.'.']);
        }

        $v = validator($r->all(), [
            "title" => 'required'
        ]);

        // setting custom attribute names
        $v->setAttributeNames([
            "title" => 'لا بد من اضافع عنوان ' ]);

        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return msg('error.edit',['msg' => implode('<br>', $v->errors()->all())]);
        }


        // set the new values for update
        $page->title = $r->title;
        $page->body = $r->body;
        $page->link = $r->link;


        // update the ad data in the database.
        if ($page->save()) {
            return msg('success.edit',['msg' => 'تم التعديل بنجاح']);
        }
        return msg('error.edit',['msg' => 'حدث خطأ اثناء التعديل']);
    }

    /**
     * delete a ad account if its id is passed
     * if not it will delete the current user
     * @param  int $id
     * @return Redirect
     */
    public function getDelete($id = null) {

        if(!$id){
            $id = Auth::id();
            Auth::logout();
        }

        $slider = Page::find($id);

        if(!$slider){
            return redirect()->back()->with('m', 'لا يوجد  صورة');
        }

        if(!empty($slider->imageName)){
            @unlink(storage_path('uploads/images/slider' . $slider->image->name));
        }

        $slider->delete();
        return redirect()->back()->with('m', 'تم حذف الصورة بنجاح ');
    }
}

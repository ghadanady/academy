<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test;

class TestController extends Controller
{
    protected $uploadDestination = 'images/Tests';

    /**
    * Render the all articles pages.
    *
    * @return View
    */
    public function getIndex($id) {

        $tests = Test::where('course_id',$id)->paginate(15);
        if(request()->ajax()){
            return view('admin.pages.Test.templates.table',compact('Tests'))->render();
        }
        //dd($id);
        return view('admin.pages.test.index',compact('tests','id'));
    }

    /**
    * render the add article page.
    *
    * @return View
    */
    public function getAdd($course_id)
    {
      // dd("ddd");
        return view('admin.pages.test.add',compact('course_id'));
    }

    /**
    * Add new article into database
    * @param  Request $r
    * @return json
    */
    public function postAdd(Request $r)
    {
            // validate data and return errors
            $v = validator($r->all(),[

                'name' => 'required|min:2',
            ],
            [
                'name.required' => 'عنوان المقاله مطلويه.',
                'name.min' => 'عنوان المقالة لا يمكن ان تقل عن حرفين.',
            ]);

            // return error msgs if validation is failed
            if($v->fails()){
                return [
                    'status' => 'error',
                    'title' => 'فشل في الاضافة',
                    'msg' => implode('<br>', $v->errors()->all()),
                ];
            }





            // instanciate new article and save its data
            $test = new Test;
            $test->name = $r->name;
            $test->course_id = $r->course_id;
            $test->questions =json_encode($r->q) ;
            $test->course_id = $r->course_id;
            $test->testdate = $r->testdate;

            if($test->save())
            {
                return [
                    'status' => 'success',
                    'title' => 'نجاح في الاضافة',
                    'msg' => 'تمت عمليه الاضافه بنجاح',
                ];
            }

            return [
                'status' => 'error',
                'title' => 'نجاح في الاضافة',
                'msg' => 'تمت عمليه الاضافه بنجاح',
            ];






        
    }


    /**
     * Validate and update user that has the passed id.
     *
     * @param  Request $r
     * @return json
     */
    public function postEdit(Request $r) {

    

        $test = Test::find($r->id);

        if(!$test){
            return msg('error.edit',['msg' => 'لا يوجد ]دورة  '.$r->id.'.']);
        }



        // validate data and return errors
            $v = validator($r->all(),[

                'name' => 'required|min:2',
            ],
            [
                'name.required' => 'عنوان المقاله مطلويه.',
                'name.min' => 'عنوان المقالة لا يمكن ان تقل عن حرفين.',
            ]);

            // return error msgs if validation is failed
            if($v->fails()){
                return [
                    'status' => 'error',
                    'title' => 'فشل في الاضافة',
                    'msg' => implode('<br>', $v->errors()->all()),
                ];
            }



    
       $test->name = $r->name;
      $test->course_id = $r->course_id;
      $test->questions =json_encode($r->q) ;
     $test->course_id = $r->course_id;
     $test->testdate = $r->testdate;

            if($test->save())
            {
                return [
                    'status' => 'success',
                    'title' => 'نجاح في التعديل ',
                    'msg' => 'تمت عمليه التعديل  بنجاح',
                ];
            }

            return [
                'status' => 'error',
                'title' => 'نجاح في الاضافة',
                'msg' => 'تمت عمليه التعديل  بنجاح',
            ];
    }

    public function postInfo($id)
    {
        $test = Test::find($id);
        $test->questions=json_decode($test->questions,true);
        //dd($test->questions);
          //$countQues=count($test->questions['title']);
         return view('admin.pages.test.edit',compact('test','countQues'));
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

        $test = Test::find($id);

        if(!$test){
            return redirect()->back()->with('m', 'User with id #'.$id.' not found');
        }

      



        $test->delete();
        return redirect()->back()->with('m', 'تم الحذف بنجاح ');
    }

    
    
}

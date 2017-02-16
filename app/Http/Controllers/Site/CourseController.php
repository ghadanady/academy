<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\MemberCourse;
use App\Comment;

class CourseController extends Controller
{
     /**
    * Render The Main or Sub Categories Page
    * @return View
    */
    public function getIndex($slug , Request $request)
    {

        if(!$slug)   abort(404);
        $course = Course::where('slug', $slug)->first();
       if($course->lessons_learned) $course->lessons_learned=explode('-',$course->lessons_learned);
       if($course->aim) $course->aim=explode('-',$course->aim);
       
//dd($course->lessons);

        $relatedCources=Course::where('cat_id',$course->cat_id)->Active()->get(); 

        if(!$course){

            abort(404);
        }


        return view('site.pages.course' , compact('course','relatedCources'));
    }

    public function getJoin($id)
    {
      if(!auth()->guard('members')->check())
      {
         return msg('error.save',['msg' => "قم بتسجيل  الدخول اولا "]);
      } 
      $memberId = auth()->guard('members')->user()->id;
      $find=MemberCourse::where('member_id',$memberId)
                        ->where('course_id',$id)->first();
      if($find)
        return msg('error.save',['msg' => " تم ارسال طلب التحاق سابقا  "]);
      $join=new MemberCourse([
                              'member_id'=>$memberId,
                              'course_id'=>$id
                            ]);
     
    if($join->save())
       return msg('success.save',['msg' => "تم ارسال طلب التسجيل   للادارة "]);
     return msg('error.save',['msg' => "حدث خطأ اثناء التسجيل  "]);
      //if register user insert


    }

     public function postComment(Request $r)
     {
        if(!auth()->guard('members')->check())
        {
           return msg('error.save',['msg' => "قم بتسجيل  الدخول اولا "]);
        }
       $memberId = auth()->guard('members')->user()->id;
       
        //ckech  join course and agree case
        $find=MemberCourse::where('member_id',$memberId)
                          ->where('course_id',$r->course_id)
                          ->where('agree',1)
                          ->first();
        if($find)
          return msg('error.save',['msg' => " قم بالالتحاق بالكورس اولا وانتظر رد الادراة  "]);
      
        //insert comment

        $course=Course::find($r->course_id);
        $comment = $course->comments()->create([
                'member_id' => $memberId,
                'comment'   =>$r->comment,
                'rate'   =>$r->whatever,
            ]);
      if($comment->save())
        return msg('success.save',['msg' => "تم اضافه الكومنت بنجاح "]);

     }
}

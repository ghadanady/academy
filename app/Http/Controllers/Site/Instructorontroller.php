<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Instructor;
use App\Comment;

class Instructorontroller extends Controller
{
    /**
     * render and paginate the instractor page.
     *
     * @return string
     */
    public function index() {
    	

           $x = Instructor::where('active','1')->get();
           //dd($x);
           foreach ($x as $key => $value) {
            // dd($value['name']);
           }
           return view('site.pages.instructor.all',compact('x'));
        
    }

     /**
     * render and paginate the users page.
     *
     * @return string
     */
    public function show($slug=null) {
       
            if(!$slug)   abort(404);

            $in = Instructor::where('slug', $slug)->first();
            if($in->skills) $in->skills=explode('-',$in->skills);
           // dd(empty($in->comments));
            
            return view('site.pages.instructor.instructor', compact('in'));
    }


    public function postComment(Request $r)
    {
       if(!auth()->guard('members')->check())
       {
          return msg('error.save',['msg' => "قم بتسجيل  الدخول اولا "]);
       }
      $memberId = auth()->guard('members')->user()->id;
      
       //ckech  join course and agree case
       // $find=MemberCourse::where('member_id',$memberId)
       //                   ->where('course_id',$r->course_id)
       //                   ->where('agree',1)
       //                   ->first();
       // if($find)
       //   return msg('error.save',['msg' => " قم بالالتحاق بالكورس اولا وانتظر رد الادراة  "]);
     
       //insert comment

       $instructor=Instructor::find($r->course_id);
       $comment = $instructor->comments()->create([
               'member_id' => $memberId,
               'comment'   =>$r->comment,
               'rate'   =>$r->whatever,
           ]);
     if($comment->save())
       return msg('success.save',['msg' => "تم اضافه الكومنت بنجاح "]);

    }
}

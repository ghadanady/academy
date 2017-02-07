<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

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
       if($course->lessons) $course->lessons=json_decode($course->lessons,true);
       $lessons_count=count($course->lessons['qtitle']);




        $relatedCources=Course::where('cat_id',$course->cat_id)->Active()->get(); 

        if(!$course){

            abort(404);
        }


        return view('site.pages.course' , compact('course','relatedCources','lessons_count'));
    }
}

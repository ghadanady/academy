<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CourseCategory as Category ; 
use App\Course;
use DB;


class CourseCategoryController extends Controller
{
    
    /**
    * Render The Main or Sub Categories Page
    * @return View
    */
    public function getIndex($slug , Request $request)
    {

        $category = Category::where('slug', $slug)->first();

        if(!$category){

            abort(404);
        }

        if(!$category->isActive()){

            abort(404);

        }

        $courses = Course::where('cat_id',$category->id)->Active()->paginate(8); 

        if(empty($courses)){
            abort(404);
        }
       
        $courses = paginate($courses, 9);
        return view('site.pages.category' , compact('category','courses'));
    }

  

}

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

        $tests = Test::where('course_id',$id)->latest()->paginate(15);
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

    
    
}

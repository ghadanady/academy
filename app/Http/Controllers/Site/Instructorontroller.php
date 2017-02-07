<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Instructor;

class Instructorontroller extends Controller
{
    /**
     * render and paginate the instractor page.
     *
     * @return string
     */
    public function index($slug=null , Request $request=null) {
    	

            $instructors = Instructor::paginate(15);
           return view('site.pages.instructor.all', compact('instructors'));
        
    }

     /**
     * render and paginate the users page.
     *
     * @return string
     */
    public function show($slug=null) {
       
            if(!$slug)   abort(404);

            $in = Instructor::where('slug', $slug)->first();
            
            return view('site.pages.instructor.instructor', compact('in'));
    }
}

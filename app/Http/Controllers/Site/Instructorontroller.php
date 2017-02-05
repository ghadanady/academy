<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Instructor;

class Instructorontroller extends Controller
{
    /**
     * render and paginate the users page.
     *
     * @return string
     */
    public function getIndex($slug=null , Request $request=null) {
    	if(!$slug)
    	{
	    	$in = Instructor::where('slug', $slug)->first();

	    	if(!$in)   abort(404);
	    	
	        return view('site.pages.instructor.instructor', compact('in'));
        }
        else
        {
           $instructors = Instructor::paginate(15);
           return view('site.pages.instructor.all', compact('instructors'));

        }
    }
}

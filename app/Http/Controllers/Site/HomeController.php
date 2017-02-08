<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Article;
use App\Instructor;
use App\Slider;
use App\Member;
use App\News;
use App\Comment;



class HomeController extends Controller
{
     /**
     * Render the index page.
     *
     * @return View
     */
    public function getIndex()
    {
        $slider=Slider::get();

        //latest courses
        $latest_cources=Course::orderBy('created_at','desc')->Active()->get();

        //certificate
        //all instractor
        $all_instructor=Instructor::Active()->get();
        //all news
         $all_news=News::Active()->get();


        
        return view('site.pages.index',compact('latest_cources',
                                                'count_cources',
                                                'count_instructor',
                                                'count_member',
                                                'all_instructor',
                                                'all_news',
                                                'slider'
                                                ));
    }

    public function getAbout()
    {

         $comments=Comment::limit(10)->get();
        
        return view('site.pages.about',compact('comments'));

    }

    public function getContact()
    {
        
        return view('site.pages.contact');

    }
}

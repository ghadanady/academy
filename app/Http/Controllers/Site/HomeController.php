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
        //courses count
        $count_cources=count(Course::Active()->get());
        //instactor count
        $count_instructor=count(Instructor::Active()->get());
        //student count
        $count_member=count(Member::Active()->get());
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
}

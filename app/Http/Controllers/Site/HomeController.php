<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
     /**
     * Render the index page.
     *
     * @return View
     */
    public function getIndex()
    {
       // $slider=Slider::get();
        
        return view('site.pages.index');
    }
}

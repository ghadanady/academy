<?php

namespace App\Http\Controllers\Site;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;


class SearchController extends Controller
{
    public function postSearch(Request $r)
    {
       

        $courses ;

        if(!empty($r->all()))
        {
         $courses = Course::where('cat_id', $r->cat_id)
                           ->where('active',1)
                           ->orWhere('name', 'LIKE', "%$r->name%")
                           ->latest()
                           ->paginate(20);

            
         }else{
            $courses = Course::paginate(20);
        }

        return view('site.pages.results', compact('courses'));
    }

    public function getLatestOffers()
    {

        $products = paginate(Product::latest()->get()->filter(function($product){
            return $product->hasOffer() && $product->isActive();
        }),20);

        return view('site.pages.results', compact('products'));
    }
}

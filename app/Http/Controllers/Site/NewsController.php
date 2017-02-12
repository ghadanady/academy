<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    
    /**
     * render and paginate the instractor page.
     *
     * @return string
     */
    public function index($slug=null , Request $request=null) {
    	

            $articles = News::paginate(8);
           return view('site.pages.news.all', compact('articles'));
        
    }

     /**
     * render and paginate the users page.
     *
     * @return string
     */
    public function show($slug=null) {
       
            if(!$slug)   abort(404);

            $article = News::where('slug', $slug)->first();

            //increment view to det most read article
            $article->increment('view', 1);
            $related_article=News::where('cat_id',$article->cat_id)
                                    ->where('id','!=',$article->id)
                                    ->limit(4)
                                    ->get();
            //var_dump($related_article);die();
            $most_view=News::orderBy('view','desc')
                              ->where('id','!=',$article->id)
                              ->limit(4)
                              ->get();
            
            return view('site.pages.news.article', compact('article','related_article','most_view'));
    }
}

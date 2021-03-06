<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
	/**
     * render and paginate the instractor page.
     *
     * @return string
     */
    public function index($slug=null , Request $request=null) {
    	

            $articles = Article::paginate(8);
           return view('site.pages.article.all', compact('articles'));
        
    }

     /**
     * render and paginate the users page.
     *
     * @return string
     */
    public function show($slug=null) {
       
            if(!$slug)   abort(404);

            $article = Article::where('slug', $slug)->first();

            //increment view to det most read article
            $article->increment('view', 1);
            $related_article=Article::where('cat_id',$article->cat_id)
                                    ->where('id','!=',$article->id)
                                    ->limit(4)
                                    ->get();
            //var_dump($related_article);die();
            $most_view=Article::orderBy('view','desc')
                              ->where('id','!=',$article->id)
                              ->limit(4)
                              ->get();
            
            return view('site.pages.article.article', compact('article','related_article','most_view'));
    }


    public function postComment(Request $r)
    {
       if(!auth()->guard('members')->check())
       {
          return msg('error.save',['msg' => "قم بتسجيل  الدخول اولا "]);
       }
      $memberId = auth()->guard('members')->user()->id;
      
       //ckech  join course and agree case
       // $find=MemberCourse::where('member_id',$memberId)
       //                   ->where('course_id',$r->course_id)
       //                   ->where('agree',1)
       //                   ->first();
       // if($find)
       //   return msg('error.save',['msg' => " قم بالالتحاق بالكورس اولا وانتظر رد الادراة  "]);
     
       //insert comment

       $article=Article::find($r->article_id);
       $comment = $article->comments()->create([
               'member_id' => $memberId,
               'comment'   =>$r->comment,
               'rate'   =>$r->whatever,
           ]);
     if($comment->save())
       return msg('success.save',['msg' => "تم اضافه الكومنت بنجاح "]);

    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table="article_categories";


    public function isMain()

    {

        return $this->parent_id == 0;

    }



    public function getUrl()

    {

        return route('site.articelCategory.index',['slug'=> $this->slug]);

    }


    public function getArticles()
    {
        $articles = [];

        if($this->articles){
            $this->articles->map(function($article) use (&$articles){
                $articles[] = $article;
            });
        }

        if($this->subCategories){
            $this->subCategories->map(function($c) use (&$articles){
                if($c->articles){
                    foreach ($c->articles()->latest()->get() as $article) {
                        $articles[] = $article;
                    }
                }
            });
        }

        return $articles;
    }

    public function isActive()

    {

        return (bool) $this->active;

    }



    public function isSub()

    {

        return !$this->isMain();

    }



    public function articles() {

        return $this->hasMany('App\Article', 'category_id');

    }



    public function mainCategory()

    {

        return $this->belongsTo('App\ArticleCategory' ,'parent_id');

    }



    public function subCategories()

    {

        return $this->hasMany('App\ArticleCategory' ,'parent_id');

    }

}

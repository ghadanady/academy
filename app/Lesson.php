<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
   

    protected $imageDestination = "storage/uploads/images/articles";



    public function getTableColumns() {

        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());

    }



    public function tags() {

        return $this->belongsToMany('App\Tag');

    }






    public function isVideo()

    {

        return !empty($this->video->url);

    }



    public function image(){

        return $this->morphOne('App\Image', 'imageable');

    }



    public function getImage()

    {

        return url("{$this->imageDestination}/{$this->image->name}");

    }



    public function video(){

        return $this->hasOne('App\Video', 'article_id');

    }



    public function comments(){

        return $this->hasMany('App\Comment','article_id');

    }






    public function isMain()

    {

        return $this->type->name === 'main' && $this->active;

    }



    public function isUrgent()

    {

        return $this->type->name === 'urgent' && $this->active;

    }



    public function isBoth()

    {

        return $this->type->name === 'both' && $this->active;

    }



    public function isNone()

    {

        return $this->type->name === 'none' && $this->active;

    }



    public function getUrl()

    {

        return route('site.lesson.index',['slug' => $this->slug]);

    }



    public function getDesc($num = 150)

    {

        return str_limit(html_entity_decode(strip_tags($this->content)),$num);

    }


}

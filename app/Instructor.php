<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
     public function image(){
        return $this->morphOne('App\Image', 'imageable');
    }
    //id`, `name`, `job`, `email`, `about`, `skills`, `facebook`, `google`, `twitter`, `instgram`

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        "job",
        "about",
        "skills",
        "facebook",
        "google",
        "twitter",
        "instgram",
        "phone" ,
        "gender",
        "age",
        "cat_id",

    ];


    
    public function getUrl()
    {

        return route('site.category.index',['slug'=> $this->slug]);

    }

    public function Category()
    {
        return $this->belongsTo('App\Category' ,'cat_id');
    }
}

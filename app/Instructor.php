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
        "active"

    ];


    
    public function getUrl()
    {
          

        return route('site.instructor.index',['slug'=> $this->slug]);

    }

    public function Category()
    {
        return $this->belongsTo('App\Category' ,'cat_id');
    }

    
    /**
     * Scope a query to only include active course.
    */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

 
    

    public function isActive()
    {
        return (bool) $this->active;
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}

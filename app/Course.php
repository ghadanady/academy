<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Course extends Model
{


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'body',
        "cat_id",
        "instarctor_id",
        "lecture_number",
        "student_number",
        "time",
        "lessons",
        "period",
        "lessons_learned" ,
        "aim",
        "active"


    ];



    public function Category()
    {
        return $this->belongsTo('App\Category' ,'cat_id');
    }

    public function instarctor()
    {
        return $this->belongsTo('App\Instructor' ,'instarctor_id');
    }

      public function image(){
        return $this->morphOne('App\Image', 'imageable');
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

    public function getUrl()
    {

        return route('site.course.index',['slug'=> $this->slug]);

    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

}

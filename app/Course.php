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
        "period",
        "lessons_learned" ,
        "aim",
        "tasks",
        "active"


    ];



    public function Category()
    {
        return $this->belongsTo('App\CourseCategory' ,'cat_id');
    }

    public function instarctor()
    {
        return $this->belongsTo('App\Instructor' ,'instarctor_id');
    }

      public function image(){
        return $this->morphOne('App\Image', 'imageable');
    }

    public function lessons() {
        return $this->hasMany('App\Lesson', 'course_id');
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
    public function rate()
    {
        return  $this->comments()->limit(5);
       // return $this->morphMany('App\Comment', 'commentable');
    }


  

}

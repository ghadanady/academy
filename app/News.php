<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $table ='news';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'body',
        'slug',
        "cat_id",
        "ins_id",
        "lecture_number",
        "active",
        'view'


    ];



    public function Category()
    {
        return $this->belongsTo('App\Category' ,'cat_id');
    }

    public function instarctor()
    {
        return $this->belongsTo('App\Instructor' ,'ins_id');
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

      /**
         * Scope a query to only include active course.
        */
        public function scopeMonth($query)
        {
            return Carbon::$query->pluck('created_at')->month;
        }
      
    


    public function isActive()
    {
        return (bool) $this->active;
    }

    public function getUrl()
    {

        return route('site.news.index',['slug'=> $this->slug]);

    }
}

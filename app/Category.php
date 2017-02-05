<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {



  public function image(){
        return $this->morphOne('App\Image', 'imageable');
    }
    public function isMain()
    {
        return $this->parent_id == 0 && !$this->subCategories->isEmpty();

    }

    public function getUrl()
    {

        return route('site.category.index',['slug'=> $this->slug]);

    }

 

    public function isActive()
    {
        return (bool) $this->active;
    }

    public function isSub()
    {
        return !$this->isMain();
    }

    public function cources() {
        return $this->hasMany('App\Course', 'cat_id');
    }

    public function mainCategory()
    {
        return $this->belongsTo('App\Category' ,'parent_id');
    }

    public function subCategories()
    {
        return $this->hasMany('App\Category' ,'parent_id');
    }

}

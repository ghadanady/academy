<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
	protected $table ='slider';
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'sub_title',
        'link',
    ];

    public function image(){
        return $this->morphOne('App\Image', 'imageable');
    }
}

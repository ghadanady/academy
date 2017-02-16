<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $table ='pages';
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'link',
        'member'
    ];

   

}

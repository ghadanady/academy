<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'url',
        'article_id',
    ];

    public function article()
    {
        return $this->belongsTo('App\Article','article_id');
    }
}

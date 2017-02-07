<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
      protected $fillable = [
        'comment',
        'member_id',
        'rate'
    ];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function member()
    {
        return $this->belongsTo('App\Member' ,'member_id');
    }
}

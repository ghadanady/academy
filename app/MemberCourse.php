<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberCourse extends Model
{
	protected $table ='member_courses';
    protected $fillable = [
        'member_id',
        'course_id',
        'agree'

    ];

    public function course()
    {
        return $this->belongsTo('App\Course' ,'course_id');
    }

    public function member()
    {
        return $this->belongsTo('App\Member' ,'member_id');
    }
}

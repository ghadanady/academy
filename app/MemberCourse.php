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
}

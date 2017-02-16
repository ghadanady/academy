<?php

namespace App;
use Carbon\Carbon;


use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    
      protected $fillable = [
        'name',
        'questions',
        'course_id',
        'testdate'
    ];





// 	public function setTestdateAttribute($value)
// 	 {
// 	      $this->attributes['testdate'] = Carbon::createFromFormat('dd-mm-yyyy', $value);

// 	}




// function getTestdateAttribute()
// {
//     //return $this->attributes['testdate']->format('m/d/Y');
//     return Carbon::parse($this->attributes['testdate'])->format('dd-mm-yyyy');
// }

// }



public function getTestdateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function setTestdateAttribute($value)
    {
        $this->attributes['testdate'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
    }


    }

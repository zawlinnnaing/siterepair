<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['dep_id','title','course_number','course_type'];
    protected $table = 'courses';

    public function department(){
    	return $this->belongsTo('App\Department');
    }
}

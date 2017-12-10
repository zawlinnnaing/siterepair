<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'departments';
    public $timestamps = false;


    protected $fillable = ['name','history','mission','vision'];

    public function degrees(){
    	return $this->hasMany('App\Degree','dep_id');
    }

    public function research(){
        return $this->hasMany('App\Research','dep_id');
    }
}

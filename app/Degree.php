<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    //
    protected $table = 'degrees';

    protected $fillable = ['dep_id','deg_title','type'];

    public function department(){
    	return $this->belongsTo('App\Department');
    }
}


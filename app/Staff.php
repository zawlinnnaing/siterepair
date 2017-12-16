<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = 'staff';
    protected $fillable = ['dep_id','name','title','research_area','current_research','img_dir'];

    public function department(){
    	return $this->belongsTo('App\Department');
    }
}

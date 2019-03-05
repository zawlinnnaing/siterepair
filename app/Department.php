<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public $table = 'departments';
    public $timestamps = false;


    protected $fillable = ['name', 'history', 'mission', 'vision', 'img_dir', 'type'];

    public function degrees()
    {
        return $this->hasMany('App\Degree', 'dep_id');
    }

    public function research()
    {
        return $this->hasMany('App\Research', 'dep_id');
    }

    public function courses()
    {
        return $this->hasMany('App\Course', 'dep_id');
    }

    public function staff()
    {
        return $this->hasMany('App\Staff', 'dep_id');
    }
}

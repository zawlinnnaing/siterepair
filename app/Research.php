<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    //
    protected $table = 'research';

    protected $fillable = ['dep_id','title','year'];

    public function department(){
        return $this->belongsTo('App\Department');
    }
}

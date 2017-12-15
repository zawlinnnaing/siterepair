<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    //
    protected $table = 'research';
    public $timestamps = false;

    protected $fillable = ['dep_id','title','year','description','img_dir'];

    public function department(){
        return $this->belongsTo('App\Department');
    }
}

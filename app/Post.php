<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //fillable fields
    protected $fillable = ['title', 'content', 'publisher', 'category_id'];

    //custom timestamp names
    const CREATED = 'created';
    const UPDATED_AT = 'active';

    public function photos()
    {
        return $this->hasMany('App\Photos', 'post_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}

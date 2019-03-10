<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchPaper extends Model
{
    //
    protected $table = 'research_papers';

    protected $fillable = ['title', 'author', 'link', 'dep_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo('App\Department', 'dep_id');
    }

}

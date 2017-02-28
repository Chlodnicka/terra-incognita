<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    /**
     * Get news item for comment.
     */
    public function news()
    {
        return $this->belongsTo('App\News');
    }
}

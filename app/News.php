<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    /**
     * Get the comments for the news.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * Get gallery items for venture section.
     */
    public function gallery()
    {
        return $this->belongsToMany('App\Multimedia');
    }
}

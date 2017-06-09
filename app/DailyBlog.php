<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyBlog extends Model
{
    protected $table = 'daily_blog';
    protected $fillable = ['title', 'lead', 'ico', 'text', 'date', 'expedition_id'];


    public function expedition()
    {
        return $this->belongsTo('App\Expedition');
    }


    public function comments()
    {
        return $this->hasMany('App\CommentsDailyBlog');
    }
}

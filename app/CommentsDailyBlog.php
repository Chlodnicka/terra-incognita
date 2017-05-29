<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentsDailyBlog extends Model
{
    protected $table = 'comments_daily_blog';
    protected $fillable = ['nick', 'contents', 'date', 'daily_blog_id'];
}

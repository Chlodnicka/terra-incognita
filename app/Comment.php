<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['nick', 'contents', 'date', 'news_id', 'reply_to'];

    /**
     * Get news item for comment.
     */
    public function news()
    {
        return $this->belongsTo('App\News');
    }
}

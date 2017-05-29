<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyBlog extends Model
{
    protected $table = 'daily_blog';
    protected $fillable = ['title', 'lead', 'ico', 'text', 'date', 'expedition_id'];

    /**
     * Get sections for venture.
     */
    public function expedition()
    {
        return $this->belongsTo('App\Expedition');
    }
}

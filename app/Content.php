<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    protected $table = 'contents';

    /**
     * Get gallery items for content
     */
    public function gallery()
    {
        return $this->belongsToMany('App\Multimedia');
    }

    public static function getByType($type)
    {
        return Content::where('type', $type)->first();
    }

}

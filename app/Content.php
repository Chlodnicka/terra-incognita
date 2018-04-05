<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    protected $table = 'contents';

    protected $fillable = ['lead', 'string_1', 'text', 'string_2', 'string_3', 'string_4', 'long_string_1'];

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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected $table = 'multimedia';

    /**
     * Get venture sections.
     */
    public function venture_section()
    {
        return $this->belongsToMany('App\VentureSection');
    }

    /**
     * Get ventures.
     */
    public function ventures()
    {
        return $this->belongsToMany('App\Venture');
    }

    /**
     * Get news.
     */
    public function news()
    {
        return $this->belongsToMany('App\News');
    }

    /**
     * Get contents.
     */
    public function contents()
    {
        return $this->belongsToMany('App\Contents');
    }

}

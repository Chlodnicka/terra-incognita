<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedition extends Model
{

    // protected $table = 'contents';
    protected $fillable = ['title', 'ico', 'text', 'link_to_video', 'date', 'lead'];

    /**
     * Get gallery items for content
     */
    public function gallery()
    {
        return $this->belongsToMany('App\Multimedia');
    }

    public function sections()
    {
        return $this->hasMany('App\ExpeditionSection');
    }


}

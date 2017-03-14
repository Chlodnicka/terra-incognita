<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venture extends Model
{
    protected $table = 'ventures';

    /**
     * Get sections for venture.
     */
    public function sections()
    {
        return $this->hasMany('App\VentureSection');
    }

    /**
     * Get gallery items for venture section.
     */
    public function gallery()
    {
        return $this->belongsToMany('App\Multimedia');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentureSection extends Model
{
    protected $table = 'ventures';

    /**
     * Get sections for venture.
     */
    public function venture()
    {
        return $this->belongsTo('App\Venture');
    }

    /**
     * Get gallery items for venture section.
     */
    public function gallery()
    {
        return $this->belongsToMany('App\Multimedia');
    }
}

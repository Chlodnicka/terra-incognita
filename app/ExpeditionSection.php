<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpeditionSection extends Model
{
    protected $table = 'expedition_sections';
    protected $fillable = ['title', 'lead', 'ico', 'text', 'expedition_id'];

    /**
     * Get sections for venture.
     */
    public function expedition()
    {
        return $this->belongsTo('App\Expedition');
    }

    /**
     * Get gallery items for venture section.
     */
    public function gallery()
    {
        return $this->belongsToMany('App\Multimedia');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $fillable = ['type', 'ico'];

    protected $table = 'backgrounds';

}

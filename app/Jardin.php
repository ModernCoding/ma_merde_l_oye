<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jardin extends Model
{
    protected $table = 'jardins';

    public function jardinType()
    {
        return $this->belongsTo('App\JardinType');
    }
}

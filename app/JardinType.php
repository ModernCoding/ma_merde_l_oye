<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JardinType extends Model
{
    protected $table = 'jardin_types';

    public function jardins()
    {
        return $this->hasMany('App\Jardin');
    }
}

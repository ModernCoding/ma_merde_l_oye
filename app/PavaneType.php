<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PavaneType extends Model
{
  protected $table = 'pavane_types';

  public function pavanes()
  {
      return $this->hasMany('App\Pavane');
  }
}

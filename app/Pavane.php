<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pavane extends Model
{
  protected $table = 'pavanes';

  public function pavaneType()
  {
      return $this->belongsTo('App\PavaneType');
  }
}

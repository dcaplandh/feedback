<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
  public function stage()
  {
      return $this->belongsTo('App\Stage');
  }
}

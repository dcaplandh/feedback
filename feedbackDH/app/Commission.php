<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
  public function course()
  {
      return $this->belongsTo('App\Course');
  }
}

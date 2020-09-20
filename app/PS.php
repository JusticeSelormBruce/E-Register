<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PS extends Model
{
  protected $guarded=[];

  public function ea()
  {
    return $this->belongsTo(EA::class);
  }
}

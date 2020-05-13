<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  
  public function counties() 
  {
    return $this->hasOne('App\County');
  }

  public function meetings() 
  {
    return $this->hasMany('App\Meeting');
  }


}
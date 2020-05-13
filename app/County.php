<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountyResource extends Model
{
  
  //protected $fillable = ['county'];

  

  public function location() 
  {
    return $this->hasMany('App\Location');
  }


}
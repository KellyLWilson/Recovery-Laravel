<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
  
  //protected $fillable = ['county'];

  

  public function locations() 
  {
    return $this->belongsToMany('App\Location', 'locations_counties', 'location_id', 'county_id');
  }


}
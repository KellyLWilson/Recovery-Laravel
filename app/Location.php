<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  
  public function county() 
  {
    return $this->belongsToMany('App\County', 'locations_counties', 'location_id', 'county_id');
  }

  public function meeting() 
  {
    return $this->hasOne('App\Meeting');
  }


}
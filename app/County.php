<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
  
  //protected $fillable = ['county'];

  

  // public function locations() 
  // {
  //   return $this->belongsToMany('App\Location', 'county_id');
  // }

  // public function pivot()
  // {
  // $county = County ::find(1);
  // foreach ($county->location as $location)
  // {
  //   echo $location->pivot->created_at;
  //   return $this->belongsToMany('locations')->withPivot('county', 'location');
  // }
  //}

  public function meeting()
  {
    return $this->hasOne('App\Meeting');
  }
}
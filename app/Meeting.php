<?php

// app/Project.php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
  //protected $fillable = ['county','location', 'date', 'time', 'type'];

//   public function tasks()
//   {
//     return $this->hasMany(Task::class);
//   }
  //protected $defaultSort = ['county'];

  // public function location() 
  // {
  //   return $this->hasMany(Location::class, 'id', 'location_id');
  // }


  // public function county()
  // {
  //   return $this->hasOne('App\Location', 'id', 'location_id');
    
  // }

  public function county()
  {
    return $this->hasOne('App\County', 'id', 'county_id');
  }


}


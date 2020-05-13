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

  public function locations() 
  {
    return $this->hasMany('App\Location', 'counties')
    ->withPivot('county');
  }

  

  // public function user()
  // {
  //   return $this->belongsToMany('App\User_Meeting');
  // }

}


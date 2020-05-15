<?php

// app/Project.php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
  protected $fillable = ['county','name', 'contact', 'phone'];

//   public function tasks()
//   {
//     return $this->hasMany(Task::class);
//   }
}
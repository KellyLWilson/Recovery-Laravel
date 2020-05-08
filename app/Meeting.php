<?php

// app/Project.php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
  protected $fillable = ['county','location', 'date', 'time', 'type'];

//   public function tasks()
//   {
//     return $this->hasMany(Task::class);
//   }
  protected $defaultSort = ['county'];
}
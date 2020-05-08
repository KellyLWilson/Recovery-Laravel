<?php

// app/Project.php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
  protected $fillable = ['county','name', 'conact', 'phone'];

//   public function tasks()
//   {
//     return $this->hasMany(Task::class);
//   }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeeting extends Model
{
    
    public function meeting()
  {
    return $this->belongsToMany('App\Meeting');
  }

   public function user()
   {
       return $this->hasOne('App\User');
   }
}

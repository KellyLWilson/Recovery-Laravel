<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeeting extends Model
{
    
    // public function destroy($meet)
    // {

    //     if ($request->meet) {
    //         foreach ($request-> meet as $meet) {
    //             UserMeeting::destroy($meet);
    //         }
    //     }
    //     // $meet->user_id = $request->user_id;
    //     // $meet->meeting_id->meeting_id;
    //     // $meet->delete();
    //     // return response(200);
    //     UserMeeting::destroy($meet);
    // }

    // public function deleteMeeting(Request $request)
    // {

        
    //      $meet = UserMeeting::delete([
    //          'user_id' => $request['user_id'],
    //          'meeting_id' => $request['meeting_id'],
    //      ]);

    //      //$meet = UserMeeting::where('user_id', $request['user_id'])->first(); // File::find($id)

    //         //
    //     // $meet->user_id = $request->user_id;
    //     // $meet->meeting_id->meeting_id;
    //     //$meet->delete();
    //     return response(200);
    // }



//     public function meeting()
//   {
//     return $this->belongsToMany('App\Meeting');
//   }

//    public function user()
//    {
//        return $this->hasOne('App\User');
//    }
}

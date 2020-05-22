<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserMeeting as UserMeetingResource;
use App\Http\Resources\UserMeetingCollection;
use App\UserMeeting;

use Illuminate\Http\Request;

class UserMeetingController extends Controller
{
    public function index()
    {
        return new UserMeetingCollection(UserMeeting::all());
    }
    
    public function store(Request $request)
    
    {
        $meet = new UserMeeting();
        $meet->user_id = $request->user_id;
        $meet->meeting_id = $request->meeting_id;
        $meet->save();
        

        return response($meet, 200);
    }


    public function userIds ($user_id)
    {
        return UserMeeting::where('user_id', $user_id)->get();
    }
    
    }

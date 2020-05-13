<?php

namespace App\Http\Controllers;
use App\Http\Resources\Meeting as MeetingResource;
use App\Http\Resources\MeetingCollection;
use App\Meeting;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function index()
    {
        return new Meeting(Meeting::with(['locations', 'counties'])->get
        ());
    }

    // Route::get('/meetings', function () {
    //     return new MeetingCollection(Meeting::all());
    // });
    }


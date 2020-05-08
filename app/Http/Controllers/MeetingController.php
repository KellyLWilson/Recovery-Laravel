<?php

namespace App\Http\Controllers;
use App\Http\Resources\Meeting as MeetingResource;
use App\Meeting;

use Illuminate\Http\Request;



    Route::get('/meetings', function () {
        return new MeetingCollection(Meeting::all());
    });


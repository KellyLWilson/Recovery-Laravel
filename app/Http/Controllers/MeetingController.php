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
        return new MeetingCollection(Meeting::with(['location', 'location.county'])->get());
    }
    

    public function show()
    {
        
    }

    }


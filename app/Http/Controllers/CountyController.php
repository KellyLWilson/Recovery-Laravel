<?php

namespace App\Http\Controllers;
use App\Http\Resources\County as CountyResource;
use App\Http\Resources\CountyCollection;
use App\County;

use Illuminate\Http\Request;

class CountyController extends Controller
{
   
    public function index()
    {
        return new CountyCollection(County::all());
    }

// public function show()
// {
//     return new CountyCollection(County::with(['location', 'location.county'])->withPivot());
//     }

    

// public function meetingsByCounty(County $county)
//     {
//         $countyId = $county->id;
//         $meetings = new MeetingCollection(Meeting::all());
//         $meetings=$meetings->filter(function ($meeting, $index){
//             return $meeting['location']['county']['id'] == $countyId;
//         });
//         return $meetings;
//     }

}
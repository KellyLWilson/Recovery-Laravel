<?php

namespace App\Http\Controllers;
use App\Http\Resources\Location as LocationResource;
use App\Http\Resources\LocationCollection;
use App\Location;

use Illuminate\Http\Request;

class LocationController extends Controller
{
   
    public function index()
    {
        return new Location(Location::with(['meetings', 'location.counties', 'location','id'])->get());
    }
}
    


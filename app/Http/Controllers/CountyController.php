<?php

namespace App\Http\Controllers;
use App\Http\Resources\County as LocationResource;
use App\Http\Resources\CountyCollection;
use App\County;

use Illuminate\Http\Request;

class CountyController extends Controller
{
   
    public function index()
    {
        return new CountyCollection(County::all());
    }

}
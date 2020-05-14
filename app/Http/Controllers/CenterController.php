<?php

namespace App\Http\Controllers;
use App\Http\Resources\Center as CenterResource;
use App\Http\Resources\CenterCollection;
use App\Center;

use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function index()
    {
        return new CenterCollection(Center::all());
    }
    
    
    }

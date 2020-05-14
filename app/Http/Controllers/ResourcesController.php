<?php

namespace App\Http\Controllers;
use App\Http\Resources\Resource as ResourceResource;
use App\Http\Resources\ResourcesCollection;
use App\Resource;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index()
    {
        return new ResourcesCollection(Resource::all());
    }
    
    
    }
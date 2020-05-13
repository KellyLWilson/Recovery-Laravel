<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

//class County extends ResourceCollection
//{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    Route::get('/counties', function () {
        return CountyResource::collection(County::all());
    });
//}
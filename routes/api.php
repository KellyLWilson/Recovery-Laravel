<?php

use App\Http\Resources\MeetingCollection;
use App\Http\Resources\CenterCollection;
use App\Http\Resources\ResourcesCollection;
use App\Meeting;
use App\Center;
use App\Resource;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/meetings', function () {
//     return new MeetingCollection(Meeting::all()->sortBy->county);
// });

Route::get('/resource', function () {
    return new ResourcesCollection(Resource::all()->sortBy->name);
});

Route::get('/center', function () {
    return new CenterCollection(Center::all()->sortBy->county);
});

Route::get('/meetings', 'MeetingController@index');
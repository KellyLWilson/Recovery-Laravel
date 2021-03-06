<?php

use App\Http\Resources\MeetingCollection;
use App\Http\Resources\CenterCollection;
use App\Http\Resources\ResourcesCollection;
use App\Http\Resources\CountyCollection;
use App\Http\Resources\UserMeetingCollection;
use App\Meeting;
use App\Center;
use App\Resource;
use App\Location;
use App\County;
use App\UserMeeting;

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

Route::post('/register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');

Route::post('/user_meetings', 'UserMeetingController@store');
Route::post('/deleteMeeting', 'UserMeetingController@deleteMeeting');
//Route::delete('/UserMeetings/{id}', 'UserMeeting@destroy');
Route::get('/meetings','MeetingController@index');
Route::get('/user_meetings', 'UserMeetingController@index');
//Route::get('/user_meetings/{user_id}', 'UserMeetingController@userIds');
//Route::get('/user/{user_id}', 'UserController@saves');
//Route::get('/meetings/{user_id}', 'MeetingController@saves');
//  Route::get('/counties', 'CountyController@index');
//Route::get('/counties', 'CountyController@index');
//Route::get('/counties/{county}', 'CountyController@MeetingsByCounty');
//Route::get('/locations','LocationController@index');
Route::get('/centers','CenterController@index');
Route::get('/resources','ResourcesController@index');


// Route::get('/resource', function () {
//     return new ResourcesCollection(Resource::all()->sortBy->name);
// });

// Route::get('/center', function () {
//     return new CenterCollection(Center::all());
// });



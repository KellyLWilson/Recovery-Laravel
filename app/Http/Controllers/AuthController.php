<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            // 'name' => 'required|name|exists:users,name',
            'password' => 'required',
            'email' => 'required|email|exists:users,email'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken($user->email . '-' . now());
            // $token = $user->createToken($user->email . '-' . now());
            return response()->json([
                'token' => $token->accessToken,
                'user' => $user
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        $request->user()->token()->delete();
        $response = "You have been successfully logged out!";
        return response($response, 200);
    }
    public function register(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        
        $token = $user->createToken($user->email . '-' . now());
        return response()->json([
            'token' => $token->accessToken,
            'user' => $user
        ]);
        return response($response, 200);
    }

    // public function deleteMeeting(Request $request)
    // {

        
    //      $meet = UserMeeting::delete([
    //          'user_id' => $request['user_id'],
    //          'meeting_id' => $request['meeting_id'],
    //      ]);
    //     // $meet->user_id = $request->user_id;
    //     // $meet->meeting_id->meeting_id;
    //     //$meet->delete();
    //     return response(200);
    // }

    public function userIds ($user_id)
    {
        return UserMeeting::where('user_id', $user_id)->get();
    }


}
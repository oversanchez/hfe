<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiAuthController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }
    
    public function authenticate2(Request $request)
    {
        // grab credentials from the request

        // grab some user
        $email = $request->only('email');
        $password =  bcrypt($request->only('password'));
        $user = \App\User::where('email',$email)->where('password',$password);

        if($user->user_info->activo == true){
            try {
                $token = JWTAuth::fromUser($user);
            } catch (JWTException $e) {
                // something went wrong whilst attempting to encode the token
                return response()->json(['error' => 'could_not_create_token'], 500);
            }

            // all good so return the token
            return response()->json(compact($token));
        }else{
            return response()->json(['error' => 'invalid_credentials'], 401);
        }

    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $cred = $request->only('email', 'password');

        if(!$token = auth()->guard('api')->attempt($cred)){
            return response()->json([
                'success' => false,
                'message' => 'Wrong Email or Password'
            ], 401);
        }

        if(!auth()->guard('api')->user()->is_siswa){
            return response()->json([
                'success' => false,
                'message' => 'You did not have the right to access'
            ], 403);
        }

        return response()->json([
            'success' => true,
            'token'   => $token   
        ], 200);
    }
}

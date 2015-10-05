<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['postLogin']);
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return response()->json('', 200);
        } else {
            return response()->json('', 400);
        }
    }
}
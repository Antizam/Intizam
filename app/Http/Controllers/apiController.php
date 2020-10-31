<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class apiController extends Controller
{
    public function login(Request $request){
        $loginDetails = $request->only('email','password');
 
        if(Auth::attempt($loginDetails)){
            return response()->json(['message' => 'login successful', 'code' => 200]);
        }else{
            return response()->json(['message' => 'wrong login details', 'code' => 501]);
        }
    }
}

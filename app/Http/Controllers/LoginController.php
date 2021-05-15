<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showlogin()
    {
        return view('welcome');
    }

    public function makelogin(Request $request){

        if(Auth::guard('admin')->attempt($request->only(['userid','password'])))
        {
            return view('dashbord'); 
        }
        else{
            return redirect()->back()->with('msg');
        }

        
    }
}

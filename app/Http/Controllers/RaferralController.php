<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaferralController extends Controller
{
    public function register(Request $request){
        $request->session()->put('referral','true');
        return view('auth.register');

    }






}

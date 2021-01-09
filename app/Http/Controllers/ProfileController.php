<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profileform(){
       return view('profile.profile');
    }
    public function updateProfile(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:8'
        ]);

        //checking password

        if($request->password){
            $password = Hash::make($request->password);
        }else{
            $password = User::select('password')->where('id',Auth::user()->id)->first();
            $password =  $password->password;
        }

        //checking image


        if ($request->file('profile_image')) {

            $image = $request->file('profile_image');

            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'assets/frontend/profile_img';
            $image->move($destinationPath, $name);
            $profile_image =  $destinationPath.'/'.$name;


        }
        else{
            $profile_image =  User::select('profile_image')->where('id',Auth::user()->id)->first();
            $profile_image =  $profile_image ->profile_image;
        }

        $user = User::where('id',Auth::user()->id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'profile_image' => $profile_image

        ]);


        if($user){
            return redirect()->back()->with('message','Profile Update Successfully');
        }else{
            return redirect()->back()->with('error','Some thing Wrong');
        }

    }
}

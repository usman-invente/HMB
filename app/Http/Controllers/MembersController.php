<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;

class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::where('end_at', '>=', Carbon::now())->get();
        return view('members_directory', compact('users'));
    }
    public function profile($id){
        $member = User::select('bussiness_name','email','company_name','bussiness_description','website')->where('id',$id)->first();
        return view('members_profile', compact('member'));

    }
}

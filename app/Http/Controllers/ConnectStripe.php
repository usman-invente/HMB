<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Auth;
use App\User;

class ConnectStripe extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('connect_stripe');
    }

    public function connectStripe(Request $request)
    {
        \Stripe\Stripe::setApiKey('sk_test_WEv3IFSJSPnmR9CPABzQ0yJX00LTIipEQn');

        $account = \Stripe\Account::create([
            'country' => 'US',
            'type' => 'standard',
            'email'=> Auth::user()->email,
        ]);

        $connect_account = User::where('id',Auth::user()->id)
        ->update([
            'connect_account' => $account['id']
        ]);

        if ($connect_account) {
            return redirect()->route('profile')->with('connectaccount','You have connected with our plateform succesfully');
        }

    }
}

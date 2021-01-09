<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Price;

class PagesController extends Controller
{

    public function pricing(){
        $company_size = User::select('company_size')->where('id',Auth::user()->id)->first();
        $price = Price::select('price','annual_price')->where('company_size',$company_size->company_size)->first();
        $monthly = $price ->price;
        $yearly = $price ->	annual_price;
        return view('pricing',compact('monthly','yearly'));
    }
    public function about(){
        return view('about');
    }
}

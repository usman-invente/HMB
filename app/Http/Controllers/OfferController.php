<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use Auth;
use Str;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function offers(){
        $offers = Offer::paginate('9');
        return view('offers.offers',compact('offers'));
    }

    public function singleoffer(offer $offer){
        return view('offers.single',compact('offer'));
    }
    public function cretaeOfferForm(Request $request)
    {
        return view('offers.create_offer');
    }
    public function cretaeOffer(Request $request){
        $data = $request->validate([
            'title' => 'required|unique:offers',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg',
            'price' => 'required',
        ]);

        if ($request->file('thumbnail')) {

            $image = $request->file('thumbnail');

            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'assets/backend/offer/images';
            $image->move($destinationPath, $name);

        }
        $offer = new Offer();
        $offer->title = $request->title;
        $offer->discount = 0;
        $offer->user_id = Auth::user()->id;
        $offer->description = $request->description;
        $offer->thumbnail = $destinationPath . '/' . $name;
        $offer->start_date = $request->start_date;
        $offer->end_date = $request->end_date;
        $offer->price = $request->price;
        $offer->slug = Str::slug($request->title, '-');
        if ($offer->save()) {
            return redirect()->back()->with('message', 'Offer Added Successfully');
        }


    }

    public function manageOffers(){
        $offers = Offer::where('user_id',Auth::user()->id)->paginate('9');
        return view('offers.manage_offer',compact('offers'));
    }

    public function editOffer($id){
        $offer = Offer::find($id);
        return view('offers.edit_offer',compact('offer'));
    }

    public function updateOffer(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'price' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($request->file('thumbnail')) {

            $image = $request->file('thumbnail');

            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'assets/backend/offer/images';
            $image->move($destinationPath, $name);

           $offer =  Offer::where('id',$request->offer_id)
            ->where('user_id',Auth::user()->id)
            ->update([
                'title' => $request->title,
                'description'  => $request->description,
                'start_date'  => $request->start_date,
                'end_date'  => $request->end_date,
                'price'  => $request->price,
                'thumbnail'  => $destinationPath.'/'.$name
            ]);

        }else{
            $offer =  Offer::where('id',$request->offer_id)
            ->where('user_id',Auth::user()->id)
            ->update([
                'title' => $request->title,
                'description'  => $request->description,
                'start_date'  => $request->start_date,
                'end_date'  => $request->end_date,
                'price'  => $request->price,
            ]);
        }

        if($offer){
            return redirect()->back()->with('message', 'Offer Updates Successfully');
        }else{
            return redirect()->back();
        }
    }

    public function deleteOffer($id){
        if(Offer::find($id)->delete()){
            return redirect()->back()->with('message', 'Offer Deleted Successfully');
        }else{
            return redirect()->back();
        }

    }
}

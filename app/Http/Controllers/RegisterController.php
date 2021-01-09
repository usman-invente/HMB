<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Stripe;
use DB;
use Auth;
use Validator;
use Illuminate\Support\Str;
use App\Price;
use App\MicroPlan;
use App\MediumPlan;
use App\SmallPlan;
use App\LargePlan;
use App\Coupon;
use Carbon\Carbon;
class RegisterController extends Controller
{

    public function register(Request $request)
    {
        $request->session()->put('referral','false');

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        );

        $request->session()->put('firststep', $data);

        return redirect()->route('step2');

        // $plans = array("45" => "subscribe", "55" => "premium");
        // $price = array_search($request->input('plan'), $plans);
        // try {

        //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        //     $charge = Stripe\Charge::create([
        //         "amount" => $price * 100,
        //         "currency" => "usd",
        //         "source" => $request->stripeToken,
        //         "description" => "Test payment from itsolutionstuff.com.",
        //     ]);

        //     if ($charge['amount_refunded'] == 0 && empty($charge['failure_code']) && $charge['paid'] == 1
        //         && $charge['captured'] == 1) {

        //         $user = new User;
        //         $user->name = $request->name;
        //         $user->email = $request->email;
        //         $user->password = Hash::make($request->password);
        //         $user->user_type = $request->input('plan');
        //         $user->save();

        //         $subscription = new Subscription();
        //         $subscription->user_id = $user->id;
        //         $subscription->charge_id = $charge['id'];
        //         $subscription->plan_name = $request->input('plan');
        //         $subscription->price = $price;
        //         $subscription->start_at = date("Y-m-d");
        //         $subscription->end_at = date('Y-m-d', strtotime(date("Y-m-d") . ' + 1 month'));
        //         $subscription->payment_method = 'Stripe';
        //         $subscription->status = $charge['status'];
        //         $subscription->balance_transaction = $charge['balance_transaction'];
        //         $subscription->save();
        //         return redirect()->route('login');
        //     }

        // } catch (Stripe\Stripe\Exception\CardException $e) {
        //     echo 'Message is:' . $e->getError()->message . '\n';
        // } catch (\Stripe\Exception\RateLimitException $e) {
        //     echo 'Message is:' . $e->getError()->message . '\n';
        // } catch (\Stripe\Exception\InvalidRequestException $e) {
        //     echo 'Message is:' . $e->getError()->message . '\n';
        // } catch (\Stripe\Exception\AuthenticationException $e) {
        //     echo 'Message is:' . $e->getError()->message . '\n';
        // } catch (\Stripe\Exception\ApiConnectionException $e) {
        //     echo 'Message is:' . $e->getError()->message . '\n';
        // } catch (\Stripe\Exception\ApiErrorException $e) {
        //     echo 'Message is:' . $e->getError()->message . '\n';
        // } catch (Exception $e) {
        //     echo 'Message is:' . $e->getError()->message . '\n';
        // }

    }

    public function step2_register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'company_name' => ['required'],
            'website' => ['required'],
            'company_size' => ['required'],
            'bussiness_name' => ['required'],
            'business_description' => ['required'],
            'profile_image' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('/register/step2')
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->file('profile_image')) {

            $image = $request->file('profile_image');

            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'assets/frontend/profile_img';
            $image->move($destinationPath, $name);
            $profile_image =  $destinationPath.'/'.$name;

        }

        $data = array(
            'company_name' => $request->company_name,
            'website' => $request->website,
            'company_size' => $request->company_size,
            'bussiness_name' => $request->bussiness_name,
            'business_description' => $request->business_description,
            'profile_image' => $profile_image
        );

        $request->session()->put('secondstep', $data);
        //getting session
        $secondstep = $request->session()->get('secondstep');

        //search for monthly price base on company size
        $plans = Price::all();
        if(count($plans )){
            foreach( $plans as $plan){
                if($plan->company_size ==  $secondstep['company_size']){
                    if($request->session()->get('referral')=="true"){
                        $percentage = 25;
                        $totalPrice = $plan->annual_price;
                        $yearly = ($percentage / 100) * $totalPrice;

                        $monthly = $plan->price;
                    }else{
                        $monthly = $plan->price;
                        $yearly = $plan->annual_price;
                        $monthlyPlanId = $plan->monthly_plan_id;
                        $yearlyPlanId = $plan->yearly_plan_id;
                    }

                }
            }
        }
        // $request->session()->put('monthlyprice',  $monthly);

        // $request->session()->put('annualprice', $yearly);

        $request->session()->put('monthlyPlanId',  $monthlyPlanId);

        $request->session()->put('yearlyPlanId',  $yearlyPlanId);

        return view('pricing',compact('monthly','yearly'));


    }

    public function step2()
    {
        return view('auth.register_step2');
    }

    public function payment(Request $request)
    {
        if ($request->input('plan') == "monthly" || $request->input('plan') == "yearly") {
            $plan = $request->input('plan');
            $countusers = User::count();
            return view('plan_register', compact('plan','countusers'));
        } else {
            return redirect()->back();
        }

    }

    public function PayNow(Request $request)
    {
        if( Auth::check() && User::where('id',Auth::user()->id)->exists()){
            $company_size = User::select('company_size')->where('id',Auth::user()->id)->first();
            $price = Price::select('price','annual_price','monthly_plan_id','yearly_plan_id')->where('company_size',$company_size->company_size)->first();
            if ($request->plan == "monthly") {

                $plan_id =  $price->monthly_plan_id;
            }
            if ($request->plan == "yearly") {

                $plan_id = $price->yearly_plan_id;

            }
            try {
                if(!empty($request->coupon)){
                    //appluying copon from stripe
                    if(Coupon::where('coupon_id',$request->coupon)->exists()){
                        $price = Coupon::select('discount_price','coupon_id','to')->first();
                        if($price->to >= Carbon::now()){
                                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                            //create a customer
                            $customer = \Stripe\Customer::create(array(
                                'email' => Auth::user()->email,
                                'source'  => $request->stripeToken,
                            ));
                            $charge = Stripe\Subscription::create([
                                "customer" => $customer->id,
                                'coupon' =>  $price->coupon_id,
                                'items' => [['price' =>  $plan_id]],
                            ]);
                        }else{
                            return redirect()->back()->with('coupon','Coupon Code Has Been Expire');
                        }

                    }else{
                        return redirect()->back()->with('coupon','Invalid Coupon Code');
                    }

                }else{
                    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                    //create a customer
                    $customer = \Stripe\Customer::create(array(
                        'email' => Auth::user()->email,
                        'source'  => $request->stripeToken,
                    ));
                    $charge = Stripe\Subscription::create([
                        "customer" => $customer->id,
                        "items" => array(
                            array(
                                "plan" =>  $plan_id,
                            ),
                        ),
                    ]);

                }



                if ($charge['status'] == 'active') {
                    //company size 1-5
                    User::where('id',Auth::user()->id)
                    ->update([
                        'user_type' => 'paid',
                        'start_at' => date("Y-m-d H:i:s", $charge['current_period_start']),
                        'end_at' => date("Y-m-d H:i:s", $charge['current_period_end'])
                    ]);

                    if($company_size->company_size == '1-5'){

                            $microPlan = new MicroPlan;
                            $microPlan->user_id =  Auth::user()->id;
                            $microPlan->charge_id =  $charge['id'];
                            $microPlan->customer = $charge['customer'];
                            $microPlan->plan_id = $charge['plan']['id'];
                            $microPlan->amount = ($charge['plan']['amount']/100);
                            $microPlan->currency = $charge['plan']['currency'];
                            $microPlan->plan_interval = $charge['plan']['interval'];
                            $microPlan->plan_interval_count = $charge['plan']['interval_count'];
                            $microPlan->current_period_start =  date("Y-m-d H:i:s", $charge['current_period_start']);
                            $microPlan->current_period_end = date("Y-m-d H:i:s", $charge['current_period_end']);
                            $microPlan->status = $charge['status'];
                            $microPlan->save();




                    }

                    // company size 5-50

                    if($company_size->company_size =='5-50'){
                        $smallPlan = new SmallPlan;
                        $smallPlan->user_id =  $user->id;
                        $smallPlan->charge_id =  $charge['id'];
                        $smallPlan->customer = $charge['customer'];
                        $smallPlan->plan_id = $charge['plan']['id'];
                        $smallPlan->amount = ($charge['plan']['amount']/100);
                        $smallPlan->currency = $charge['plan']['currency'];
                        $smallPlan->plan_interval = $charge['plan']['interval'];
                        $smallPlan->plan_interval_count = $charge['plan']['interval_count'];
                        $smallPlan->current_period_start =  date("Y-m-d H:i:s", $charge['current_period_start']);
                        $smallPlan->current_period_end = date("Y-m-d H:i:s", $charge['current_period_end']);
                        $smallPlan->status = $charge['status'];
                        $smallPlan->save();

                    }

                    //company size 50-500

                    if($company_size->company_size=='50-500'){
                        $mediumPlan = new MediumPlan;
                        $mediumPlan->user_id =  $user->id;
                        $mediumPlan->charge_id =  $charge['id'];
                        $mediumPlan->customer = $charge['customer'];
                        $mediumPlan->plan_id = $charge['plan']['id'];
                        $mediumPlan->amount = ($charge['plan']['amount']/100);
                        $mediumPlan->currency = $charge['plan']['currency'];
                        $mediumPlan->plan_interval = $charge['plan']['interval'];
                        $mediumPlan->plan_interval_count = $charge['plan']['interval_count'];
                        $mediumPlan->current_period_start =  date("Y-m-d H:i:s", $charge['current_period_start']);
                        $mediumPlan->current_period_end = date("Y-m-d H:i:s", $charge['current_period_end']);
                        $mediumPlan->status = $charge['status'];
                        $mediumPlan->save();

                    }

                    //company size  500+

                    if($company_size->company_size=='500+'){
                        $largePlan = new LargePlan;
                        $largePlan->user_id =  $user->id;
                        $largePlan->charge_id =  $charge['id'];
                        $largePlan->customer = $charge['customer'];
                        $largePlan->plan_id = $charge['plan']['id'];
                        $largePlan->amount = ($charge['plan']['amount']/100);
                        $largePlan->currency = $charge['plan']['currency'];
                        $largePlan->plan_interval = $charge['plan']['interval'];
                        $largePlan->plan_interval_count = $charge['plan']['interval_count'];
                        $largePlan->current_period_start =  date("Y-m-d H:i:s", $charge['current_period_start']);
                        $largePlan->current_period_end = date("Y-m-d H:i:s", $charge['current_period_end']);
                        $largePlan->status = $charge['status'];
                        $largePlan->save();

                    }
                    if(Auth::check()){
                        return redirect()->route('createcourse');
                    }else{
                        return redirect()->route('login');
                    }

                }

            } catch (Stripe\Stripe\Exception\CardException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\RateLimitException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\InvalidRequestException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\AuthenticationException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\ApiConnectionException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\ApiErrorException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (Exception $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            }

        }else{
            $firststep = $request->session()->get('firststep');
            $secondstep = $request->session()->get('secondstep');

            if ($request->plan == "monthly") {

                $plan_id =  $request->session()->get('monthlyPlanId');
            }
            if ($request->plan == "yearly") {

                $plan_id = $request->session()->get('yearlyPlanId');

            }
            try {
                if(!empty($request->coupon)){
                    //appluying copon from stripe
                    if(Coupon::where('coupon_id',$request->coupon)->exists()){
                        $price = Coupon::select('discount_price','coupon_id','to')->first();
                        if($price->to >= Carbon::now()){
                                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                            //create a customer
                            $customer = \Stripe\Customer::create(array(
                                'email' => $firststep['email'],
                                'source'  => $request->stripeToken,
                            ));
                            $charge = Stripe\Subscription::create([
                                "customer" => $customer->id,
                                'coupon' =>  $price->coupon_id,
                                'items' => [['price' =>  $plan_id]],
                            ]);
                        }else{
                            return redirect()->back()->with('coupon','Coupon Code Has Been Expire');
                        }

                    }else{
                        return redirect()->back()->with('coupon','Invalid Coupon Code');
                    }

                }else{
                    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                    //create a customer
                    $customer = \Stripe\Customer::create(array(
                        'email' => $firststep['email'],
                        'name' => 'ewew',
                        'source'  => $request->stripeToken,
                    ));
                    $charge = Stripe\Subscription::create([
                        "customer" => $customer->id,
                        "items" => array(
                            array(
                                "plan" =>  $plan_id,
                            ),
                        ),
                    ]);

                }



                if ($charge['status'] == 'active') {
                    //company size 1-5

                    $user= new User;
                    $user->name = $firststep['name'];
                    $user->email = $firststep['email'];
                    $user->password = $firststep['password'];
                    $user->user_type = 'paid';
                    $user->company_name = $secondstep['company_name'];
                    $user->bussiness_name = $secondstep['bussiness_name'];
                    $user->bussiness_description = $secondstep['business_description'];
                    $user->profile_image = $secondstep['profile_image'];
                    $user->website = $secondstep['website'];
                    $user->company_size = $secondstep['company_size'];
                    $user->code =  env('APP_URL').'referral?code='.Str::random(9);
                    $user->start_at =  date("Y-m-d H:i:s", $charge['current_period_start']);
                    $user->end_at = date("Y-m-d H:i:s", $charge['current_period_end']);


                    $user->save();

                    if($secondstep['company_size']=='1-5'){
                        $microPlan = new MicroPlan;
                        $microPlan->user_id =  $user->id;
                        $microPlan->charge_id =  $charge['id'];
                        $microPlan->customer = $charge['customer'];
                        $microPlan->plan_id = $charge['plan']['id'];
                        $microPlan->amount = ($charge['plan']['amount']/100);
                        $microPlan->currency = $charge['plan']['currency'];
                        $microPlan->plan_interval = $charge['plan']['interval'];
                        $microPlan->plan_interval_count = $charge['plan']['interval_count'];
                        $microPlan->current_period_start =  date("Y-m-d H:i:s", $charge['current_period_start']);
                        $microPlan->current_period_end = date("Y-m-d H:i:s", $charge['current_period_end']);
                        $microPlan->status = $charge['status'];
                        $microPlan->save();

                    }

                    // company size 5-50

                    if($secondstep['company_size']=='5-50'){
                        $smallPlan = new SmallPlan;
                        $smallPlan->user_id =  $user->id;
                        $smallPlan->charge_id =  $charge['id'];
                        $smallPlan->customer = $charge['customer'];
                        $smallPlan->plan_id = $charge['plan']['id'];
                        $smallPlan->amount = ($charge['plan']['amount']/100);
                        $smallPlan->currency = $charge['plan']['currency'];
                        $smallPlan->plan_interval = $charge['plan']['interval'];
                        $smallPlan->plan_interval_count = $charge['plan']['interval_count'];
                        $smallPlan->current_period_start =  date("Y-m-d H:i:s", $charge['current_period_start']);
                        $smallPlan->current_period_end = date("Y-m-d H:i:s", $charge['current_period_end']);
                        $smallPlan->status = $charge['status'];
                        $smallPlan->save();

                    }

                    //company size 50-500

                    if($secondstep['company_size']=='50-500'){
                        $mediumPlan = new MediumPlan;
                        $mediumPlan->user_id =  $user->id;
                        $mediumPlan->charge_id =  $charge['id'];
                        $mediumPlan->customer = $charge['customer'];
                        $mediumPlan->plan_id = $charge['plan']['id'];
                        $mediumPlan->amount = ($charge['plan']['amount']/100);
                        $mediumPlan->currency = $charge['plan']['currency'];
                        $mediumPlan->plan_interval = $charge['plan']['interval'];
                        $mediumPlan->plan_interval_count = $charge['plan']['interval_count'];
                        $mediumPlan->current_period_start =  date("Y-m-d H:i:s", $charge['current_period_start']);
                        $mediumPlan->current_period_end = date("Y-m-d H:i:s", $charge['current_period_end']);
                        $mediumPlan->status = $charge['status'];
                        $mediumPlan->save();

                    }

                    //company size  500+

                    if($secondstep['company_size']=='500+'){
                        $largePlan = new LargePlan;
                        $largePlan->user_id =  $user->id;
                        $largePlan->charge_id =  $charge['id'];
                        $largePlan->customer = $charge['customer'];
                        $largePlan->plan_id = $charge['plan']['id'];
                        $largePlan->amount = ($charge['plan']['amount']/100);
                        $largePlan->currency = $charge['plan']['currency'];
                        $largePlan->plan_interval = $charge['plan']['interval'];
                        $largePlan->plan_interval_count = $charge['plan']['interval_count'];
                        $largePlan->current_period_start =  date("Y-m-d H:i:s", $charge['current_period_start']);
                        $largePlan->current_period_end = date("Y-m-d H:i:s", $charge['current_period_end']);
                        $largePlan->status = $charge['status'];
                        $largePlan->save();

                    }
                    return redirect()->route('login');
                }

            } catch (Stripe\Stripe\Exception\CardException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\RateLimitException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\InvalidRequestException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\AuthenticationException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\ApiConnectionException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\ApiErrorException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (Exception $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            }

        }


    }

    public function freeUser(Request $request)
    {

        $firststep = $request->session()->get('firststep');
        $secondstep = $request->session()->get('secondstep');
        $user = new User;
        $user->name = $firststep['name'];
        $user->email = $firststep['email'];
        $user->password = $firststep['password'];
        $user->user_type = $request->input('plan');
        $user->company_name = $secondstep['company_name'];
        $user->website = $secondstep['website'];
        $user->company_size = $secondstep['company_size'];
        $user->bussiness_name = $secondstep['bussiness_name'];
        $user->bussiness_description = $secondstep['business_description'];
        $user->profile_image = $secondstep['profile_image'];
        $user->code =  env('APP_URL').'referral?code='.Str::random(9);
        $user->start_at =  date("Y-m-d H:i:s");
        $user->end_at = '1994-01-01 00:00:00';
        if ($user->save()) {
            return redirect()->route('login');
        }

    }

    public function checkststus(Request $request ){
           $status = User::select('status')->where('id',$request->id)->first();
           if($status->status == 0 ){
               return response()->json([
                   'status' =>false,
                   'message' => 'You have no permission to post premium content',
               ]);
           }else{
            return response()->json([
                'status' =>true,

            ]);
           }

    }
}

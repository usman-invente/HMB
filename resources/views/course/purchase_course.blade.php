@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin:64px">

                    <div class="card-body">
                        <form role="form" method="POST" action="{{ route('payment',$course->slug) }}"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form"
                            class="require-validation" data-cc-on-file="false">
                            @csrf
                            <h3>Enter Your Card Details</h3>
                            <br>
                            <div class="form-group row">
                                <label for="card-name" class="col-md-4 col-form-label text-md-right">Card Name</label>

                                <div class="col-md-6">
                                    <input id="card-name" type="text" class="form-control" name="cardname" required
                                        value="{{ old('cardname') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="card-no" class="col-md-4 col-form-label text-md-right">Card Number</label>

                                <div class="col-md-6">
                                    <input id="card-no" type="text" class="form-control card-number" name="number" required
                                        value="{{ old('number') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exp-month" class="col-md-4 col-form-label text-md-right">Expiration
                                    Month<br><b>MM</b></label>

                                <div class="col-md-6">
                                    <input id="exp-month" type="text" class="form-control card-expiry-month" name="expdate"
                                        required value="{{ old('expdate') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exp-year" class="col-md-4 col-form-label text-md-right">Expiration
                                    Year<br><b>YYYY</b></label>

                                <div class="col-md-6">
                                    <input id="exp-year" type="text" class="form-control card-expiry-year" name="expyear"
                                        required value="{{ old('expyear') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cvc" class="col-md-4 col-form-label text-md-right">CVV</label>

                                <div class="col-md-6">
                                    <input id="cvc" type="text" class="form-control card-cvc" name="cvc" required
                                        value="{{ old('cvc') }}">
                                </div>
                            </div>

                            <input type="hidden" name="course_id" value="{{$course->id}}" >
                            <input type="hidden" name="course_slug" value="{{$course->slug}}" >


                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                      Pay
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


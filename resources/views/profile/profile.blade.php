@extends('layouts.app')
@section('content')
    <!-- connected account succesfully alert-->
    @if (session('connectaccount'))
        <div class="alert alert-success" role="alert">
            {{ session('connectaccount') }}
        </div>

    @endif

    <div class="container createcourse">

      <!-- connected account info alert-->
    @if (session('connectStripe'))
        <div class="alert alert-info" role="alert">
            {{ session('connectStripe') }}
           <b><a href="#connectstripe">Click here</b></a> to link your stripe with our plateform
        </div>

    @endif
        <h2>Profile</h2><br>
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>

        @endif



        <form method="post" action="{{ route('update.profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                        @error('name')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                        @error('email')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">

                    </div>
                    @error('password')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Profile Image</label>
                        <input class="form-control" type="file" name="profile_image">

                    </div>
                </div>


                <div class="col-md-12" style="margin-bottom:40px;">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
                @if(Auth::user()->status == 1)
                 <div class="col-md-12">

                    <h3  id="connectstripe">Connect Stripe Account</h3><br><br>
                    @if (Auth::user()->connect_account == '')
                        <a class="btn btn-primary"
                            href="https://connect.stripe.com/oauth/authorize?response_type=code&redirect_uri=http://127.0.0.1:8000/redirect&client_id={{ env('Stripe_ClientID') }}&scope=read_write">Connect
                            Stripe</a>
                    @else
                        <p><mark>Your Stripe Account is Connected with Plateform</mark></p>
                    @endif
                </div>
                @endif

            </div>
        </form>

    </div>



@endsection

@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="margin:64px">

                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('step2_register') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Company Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            name="company_name" value="{{ old('company_name') }}" required
                                            autocomplete="company_name" autofocus>

                                        @error('company_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Website</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text"
                                            class="form-control @error('website') is-invalid @enderror" name="website"
                                            value="{{ old('website') }}" required autocomplete="website">

                                        @error('website')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Company
                                        Size</label>

                                    <div class="col-md-6">
                                   @php
                                       $prices = DB::table('prices')->get();

                                   @endphp

                                        <select name="company_size" class="form-control">
                                                @foreach($prices as $price)
                                                 <option  value="{{$price->company_size}}">{{$price->company_size}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Business Name</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text"
                                            class="form-control @error('bussiness_name') is-invalid @enderror" name="bussiness_name"
                                            value="{{ old('bussiness_name') }}" required autocomplete="website">

                                        @error('bussiness_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Business Description</label>

                                    <div class="col-md-6">
                                        <textarea
                                            class="form-control @error('business_description') is-invalid @enderror" name="business_description"
                                             required autocomplete="website"></textarea>

                                        @error('business_description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Image</label>

                                    <div class="col-md-6">
                                         <input class="form-control" type="file" name="profile_image">

                                        @error('profile_image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Next') }}
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

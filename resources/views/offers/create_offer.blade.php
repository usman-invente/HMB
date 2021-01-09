@extends('layouts.app')
@section('content')
    <div class="container createcourse">
        <h3 style="font-weight: 700;">Create New Offer</h3><br>



        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>

        @endif
        <form method="post" action="{{ route('create-offer') }}"  name="demoform" id="demoform" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Offer Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label>Offer Description</label>
                        <textarea class="form-control" id="summernote"
                            name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>



                    <div class="col-md-6">
                         <div class="form-group">
                            <label for="exampleInputPassword1">Offer Start Date</label>
                            <input type="date" class="form-control" value="{{old('start_date')}}" name="start_date">
                            @error('start_date')
                                <div class="alert alert-danger validate-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Offer End Date</label>
                            <input type="date" class="form-control" value="{{old('end_date')}}" name="end_date">
                            @error('end_date')
                                <div class="alert alert-danger validate-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                     <div class="col-md-6">
                         <div class="form-group">
                            <label for="exampleInputPassword1">Offer Price </label>
                            <input type="text" class="form-control" name="price" value="{{old('price')}}">
                            @error('price')
                                <div class="alert alert-danger validate-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Offer Thumbnail</label>
                        <input type="file" class="form-control" name="thumbnail">
                        @error('thumbnail')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>





                <div class="col-md-12">
                    <button type="submit"  id="crearecourse" class="btn btn-primary">
                        Create
                    </button>
                </div>



            </div>
        </form>

    </div>


@endsection

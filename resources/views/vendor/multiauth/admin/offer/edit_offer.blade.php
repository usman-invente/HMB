@extends('multiauth::layouts.app')
@section('content')
 <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>

                        @endif

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Offer</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.edit.offer') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Offer Title</label>
                                        <input type="text" class="form-control" value="{{$offer->title }}"
                                            id="exampleInputEmail1" placeholder="Enter Couse Title" name="title">
                                        @error('title')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>




                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> Offer Description</label>
                                        <textarea id="summernote" name="description"
                                            class="form-control">{{$offer->description}}</textarea>
                                        @error('description')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Offer Image</label>
                                        <input type="file" class="form-control" name="thumbnail">
                                        @error('thumbnail')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Offer Start Date</label>
                                        <input type="date" class="form-control" value="{{$offer->start_date}}" name="start_date">
                                        @error('start_date')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Offer End Date</label>
                                        <input type="date" class="form-control" value="{{$offer->end_date}}" name="end_date">
                                        @error('end_date')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">offer Price </label>
                                        <input type="text" class="form-control" name="price" value="{{$offer->end_date}}">
                                        @error('price')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Discount  </label>
                                        <input type="text" class="form-control" name="discount" value="{{$offer->discount}}">
                                        @error('discount')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <input type="hidden" name="id" value="{{$offer->id}}">


                                     <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <!-- /.card-body -->
                            </form>
                        </div>
                        <!-- /.card -->
                        <!-- /.content -->
                    </div>
                    <!-- /.content-wrapper -->

                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                    </aside>
                    <!-- /.control-sidebar -->
@endsection

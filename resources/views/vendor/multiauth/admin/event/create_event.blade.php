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
                            <li class="breadcrumb-item active">Edit Event</li>
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
                            <form action="{{ route('admin.create.event') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Event Title</label>
                                        <input type="text" class="form-control" value="{{ old('title') }}"
                                            id="exampleInputEmail1" placeholder="Enter Couse Title" name="title">
                                        @error('title')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>




                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> Event Description</label>
                                        <textarea id="summernote" name="description"
                                            class="form-control">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Event Image</label>
                                        <input type="file" class="form-control" name="thumbnail">
                                        @error('thumbnail')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Event Start Date</label>
                                        <input type="date" class="form-control" value="{{old('start_date')}}" name="start_date">
                                        @error('start_date')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Event End Date</label>
                                        <input type="date" class="form-control" value="{{old('end_date')}}" name="end_date">
                                        @error('end_date')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Event Location</label>
                                        <input type="text" class="form-control" name="location" value={{old('location')}}>
                                        @error('location')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>


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

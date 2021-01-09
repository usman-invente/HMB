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
                            <li class="breadcrumb-item active">Create Coupon</li>
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
                            <form action="{{ route('admin.create.coupon') }}" method="post" >
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Coupon  Title</label>
                                        <input type="text" class="form-control" value="{{ old('title') }}"
                                            id="exampleInputEmail1"  name="title">
                                        @error('title')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Discount Price</label>
                                        <input  type="number" name="discount_price"
                                            class="form-control" value="{{ old('discount_price') }}">
                                        @error('discount_price')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- <div class="form-group">
                                        <label for="exampleInputPassword1">Status</label>
                                        <select  class="form-control" name="status">
                                            <option @if (old('status') == 'active') {{ 'selected' }} @endif value="active">Active</option>
                                            <option  @if (old('status') == 'inactive') {{ 'selected' }} @endif value="inactive">Inactive</option>
                                        </select>

                                        @error('status')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div> --}}

                                     <div class="form-group">
                                        <label for="exampleInputPassword1">From</label>
                                        <input  type="date" name="from"
                                            class="form-control" id="fromdate" >
                                        @error('from')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">To</label>
                                        <input  type="date" name="to"
                                            class="form-control" >
                                        @error('to')
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

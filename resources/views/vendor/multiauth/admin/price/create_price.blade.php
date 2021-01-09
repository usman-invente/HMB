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
                            <li class="breadcrumb-item active">Create Price</li>
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

                            <form action="{{ route('admin.create.price') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">

                                        <label for="exampleInputEmail1">Company Size</label>
                                        <input type="text" placeholder="1-5" class="form-control"
                                            value="{{ old('company_size') }}" id="exampleInputEmail1" name="company_size">
                                        @error('company_size')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Monthly Price</label>
                                        <input type="number" class="form-control" value="{{ old('price') }}"
                                            id="exampleInputEmail1" name="price">
                                        @error('price')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Annual Price</label>
                                        <input type="number" class="form-control" value="{{ old('annual_price') }}"
                                            id="exampleInputEmail1" name="annual_price">
                                        @error('annual_price')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Monthly Plan Id</label>
                                        <input type="text" class="form-control" value="{{ old('monthly_plan_id') }}"
                                            id="exampleInputEmail1" name="monthly_plan_id">
                                        @error('monthly_plan_id')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Yearly Plan Id</label>
                                        <input type="text" class="form-control" value="{{ old('yearly_plan_id') }}"
                                            id="exampleInputEmail1" name="yearly_plan_id">
                                        @error('yearly_plan_id')
                                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>


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

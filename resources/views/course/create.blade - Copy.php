@extends('layouts.app')
@section('content')
    <div class="container createcourse">
        <h2>Create New Course</h2><br>
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>

        @endif
        @if (session('permissionerror'))
            <div class="alert alert-danger" role="alert">
                {{ session('permissionerror') }}
            </div>

        @endif
        <form method="post" action="{{ route('course') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Title</label>
                        <input type="text" class="form-control" name="course_title" value="{{ old('course_title') }}">
                        @error('course_title')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Category</label>
                        <select name="course_category" value="{{ old('course_category') }}">
                            <option value="category">Category</option>
                        </select>
                        @error('course_category')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Type</label>
                        <select name="course_type" class="form-control type" >
                            <option  @if (old('course_type') == "free") {{ 'selected' }} @endif value="free">Free</option>
                            <option  @if (old('course_type') == "subscribe") {{ 'selected' }} @endif value="subscribe"  value="subscribe">Subscribe</option>
                            <option  @if (old('course_type') == "premium") {{ 'selected' }} @endif value="premium">Premium</option>
                        </select>
                        @error('course_type')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Url</label>
                        <input class="form-control" type="url" name="course_file" value="{{ old('course_file') }}">
                        @error('course_file')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Course Preview Image</label>
                        <input type="file" class="form-control" name="course_image">
                        @error('course_image')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="price">
                </div>



                <div class="col-md-12">
                    <div class="form-group">
                        <label>Course Description</label>
                        <textarea class="form-control" id="summernote" name="course_description">{{old('course_description')}}</textarea>
                        @error('course_description')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                </div>

            </div>
        </form>

    </div>


@endsection



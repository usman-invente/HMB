@extends('layouts.app')
@section('content')
    <div class="container createcourse">
        <h3 style="font-weight: 700;">Create New Course</h3><br>



        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>

        @endif
        @if (session('permissionerror'))
            <div class="alert alert-danger" role="alert">
                {{ session('permissionerror') }} <b><a href="/profile#connectstripe">Click here</a></b>

            </div>

        @endif
        <form method="post" action="{{ route('course') }}"  name="demoform" id="demoform" enctype="multipart/form-data">
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
                        <select name="course_type" class="form-control type">
                            <option @if (old('course_type') == 'free') {{ 'selected' }}
                                @endif value="free">Free</option>
                            <option @if (old('course_type') == 'subscribe')
                                {{ 'selected' }} @endif value="subscribe" value="subscribe">Subscribe
                            </option>
                            @if(Auth::user()->status == 1)
                            <option @if (old('course_type') == 'premium') {{ 'selected' }}
                                @endif value="premium">Premium</option>
                            @endif
                        </select>
                        @error('course_type')
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
                        <textarea class="form-control" id="summernote"
                            name="course_description">{{ old('course_description') }}</textarea>
                        @error('course_description')
                            <div class="alert alert-danger validate-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <h3 style="font-weight: 700;">Create Lesson</h3>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Lesson Title</label>
                        <input type="text" class="form-control" required name="lesson_title" value="{{ old('lesson_title') }}">

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Lesson Video</label>
                        <input type="file" name="lesson"  required class="form-control">


                    </div>
                </div>

                <div class="more_lesson_div">
                    <!--content will append here-->
                </div>

                {{-- <div class="col-md-12">
                    <a  id="addmorelesson" class="btn btn-primary">
                        Add More Lesson
                    </a>
                </div> --}}





                <div class="col-md-12">
                    <button type="submit"  id="crearecourse" class="btn btn-primary">
                        Create
                    </button>
                </div>



            </div>
        </form>

    </div>


@endsection

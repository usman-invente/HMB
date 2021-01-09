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
        <form method="post" action="{{ route('editcourse') }}"  name="demoform" id="demoform" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Title</label>
                        <input type="text" class="form-control" name="course_title" value="{{ $course->course_title}}">
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
                        <select name="course_type"  class="form-control type">
                            <option @if ($course->course_type == 'free') {{ 'selected' }}
                                @endif value="free">Free</option>
                            <option @if ($course->course_type == 'subscribe')
                                {{ 'selected' }} @endif value="subscribe" value="subscribe">Subscribe
                            </option>
                            @if(Auth::user()->status == 1)
                            <option @if ($course->course_type == 'premium') {{ 'selected' }}
                                @endif value="premium">Premium</option>
                            @endif
                            @if(Auth::user()->status == 1)
                            <option @if ($course->course_type== 'premium') {{ 'selected' }}
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
                        <input type="file" class="form-control" name="course_image"><br>
                        <img src="{{asset($course->course_image)}}" class="img-responsive" style="width:200px;height:200px">
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
                            name="course_description">{{ $course->course_description }}</textarea>
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
                        <input type="text" class="form-control" required name="lesson_title" value="{{ $course->lesson->lesson_title }}">


                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Lesson Video</label>
                        <input type="file" name="lesson"   class="form-control">
                        <video control="controls" width="200" height="200">
                           <source src="{{asset($course->lesson->lesson)}}" type="video/mp4"></source>
                        </video>


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


                <input type="hidden" name="course_id" value="{{$course->id}}">
                <input type="hidden" name="lesson_id" value="{{$course->lesson->id}}">


                <div class="col-md-12">
                    <button type="submit"  id="crearecourse" class="btn btn-primary">
                        Update
                    </button>
                </div>



            </div>
        </form>

    </div>


@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 59px;">
                <video id="player" playsinline controls data-poster="{{ asset($course->course_image) }}">
                    <source src="{{ asset($course->lesson->lesson) }}" type="video/mp4" />


                </video>
            </div>
        </div>

    </div>
    <br><br><br><br><br><br>


@endsection

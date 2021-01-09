@extends('layouts.app')
@section('content')
<div class="light-wrapper">
    <div class="container inner">
      <div class="course grid-view-course col3">
        <div class="course-courses">
          <div class="isotope row">
          @if(session('message'))
                <p class="alert alert-success">{{session('message')}}</p>
          @endif
          @if(count($courses))
          @foreach($courses as $course)
             <div class="col-sm-6 col-md-4 grid-view-course">
              <div class="course">
                <figure class="main img-responsive"><img  style="width:100%;height:277px;" src="{{asset($course->course_image)}}" alt="" /></figure>
                <div class="box">
                  <div class="meta-course"><span class="author">Chris Daems</span></div>
                  <h3 class="course-title"><a href="course-course.html">{{$course->course_title}} </a></h3>
                  <a href="{{route('course.edit',$course->id)}}" class="outline">Edit</a>
                  <a href="{{route('course.delete',$course->id)}}" class="outline">Delete</a>
                  </div>
                <!-- /.box -->

              </div>
              <!-- /.course -->
            </div>
            <!-- /column -->

            @endforeach
            @endif


          </div>
          <!-- /.isotope -->
        </div>
        <!-- /.course-courses -->

        <div  class="pull-right">
            {{$courses->links()}}
        </div>
        <!-- /.pagination -->

      </div>
      <!-- /.course -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->
@endsection

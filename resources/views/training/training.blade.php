@extends('layouts.app')
@section('content')

    <div class="light-wrapper">
        <div class="container inner">
            <div class="course grid-view-course col3">
                <div class="course-courses">
                    <div class="isotope row">
                        @if (count($courses))
                            @foreach ($courses as $course)

                                <div class="col-sm-6 col-md-4 grid-view-course">
                                    <div class="course">
                                        <figure class="main img-responsive"><img style="width:100%;height:277px;"
                                                src="{{ asset($course->course_image) }}" alt="" /></figure>
                                        <div class="box">
                                            <div class="meta-course"><span
                                                    class="author">{{$course->creater_name}} </span><span
                                                    class="price label label-success">
                                                    @if($course->course_type=="premium")
                                                    £ {{$course->price}}
                                                    @else
                                                     {{$course->course_type}}
                                                    @endif
                                                    </span></div>
                                            <h3 class="course-title"><a
                                                href="course-course.html">{{ $course->course_title }} </a></h3>


                                             @if ($course->course_type=="free")
                                               <a href="{{ route('free.course', $course->slug) }}" class="outline">View</a>
                                            @elseif ($course->course_type=="premium")
                                                  <a href="{{route('paid.course',$course->slug)}}" class="outline">View</a>
                                            @else
                                                <a href="{{route('subscribe.course',$course->slug)}}" class="outline">View</a>
                                            @endif




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

                 {{$courses->links()}}
                <!-- /.pagination -->

            </div>
            <!-- /.course -->
        </div>
        <!-- /.container -->
    </div>
@endsection()

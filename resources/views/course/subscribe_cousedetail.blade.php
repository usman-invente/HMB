@extends('layouts.app')
@section('content')
    <div class="light-wrapper">
        <div class="container inner">
            <div class="blog classic-view row">
                <div class="col-sm-8 blog-content">
                    <div class="blog-posts">
                        <div class="post">
                            <div class="post-content">
                                <figure class="main"> <img src="{{ asset($course->course_image) }}"
                                        style="width:100%;height:500px;" alt="" /></figure>
                                <div class="meta"><span
                                        class="date">{{ date('d M Y', strtotime($course->created_at)) }}</span><span
                                        class="category"><a href="#">{{$course->creater_name}}</a></div>
                                        {!!$course->course_description!!}
                                <div class="divide20"></div>
                            </div>
                            <!-- /.post-content -->
                        </div>
                        <!-- /.post -->

                    </div>
                    <!-- /.blog-posts -->


                    <!-- /.comment-form-wrapper -->

                </div>
                <!-- /.blog-content -->

                <aside class="col-sm-4 sidebar">
                <div class="text-center">
                  <div class="sidebox widget">
                     @if($status =="true")
                      <a href="{{ route('free.watch.course', $course->slug) }}" class="btn btn-default">Watch</a>
                      @else
                       {{-- <a href="{{ route('pricing') }}" class="btn btn-default">Subscribe</a> --}}
                       <p>You Need to purchase  a plan </p>
                       <a  href="{{route('price.plan')}}" class="btn btn-info">Subscribe</a>
                       @endif
                  </div>
                </div>
                </aside>
                <!-- /column .sidebar -->

            </div>
            <!-- /.blog -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.light-wrapper -->

@endsection

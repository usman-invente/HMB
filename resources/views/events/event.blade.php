@extends('layouts.app')
@section('content')


        <div class="light-wrapper">
            <div class="container inner">
                <div class="blog event-grid-view col3">
                    <div class="event-posts">
                        <div class="isotope row">
                        @if(count($events))
                        @foreach($events as $event)
                            <div class="col-sm-6 col-md-4 event-grid-view-post" style="margin-bottom:50px;">
                                <div class="event-post">
                                    <figure class="event-main"><img  style="width:100%;height:277px;" src="{{asset($event->thumbnail)}}" alt="" /></figure>
                                    <div class="box ">
                                        <div class="meta"><span class="date">{{date('d M Y',strtotime($event->created_at))}}</span><span class="location"><a
                                                    href="#">{{$event->location}}</a></span></div>
                                        <h3 class="post-title"><a href="blog-post.html">{{$event->title}}</a></h3>
                                        <a href="{{route('single.event',$event->slug)}}" class="more">Details</a>
                                    </div>
                                    <!-- /.box -->

                                </div>
                                <!-- /.post -->
                            </div>

                            <!-- /column -->
                            @endforeach
                            @endif

                        </div>
                        <!-- /.isotope -->
                    </div>
                    <!-- /.event-posts -->
                    <div class="pull-right">

                   {{$events->links()}}
                    <!-- /.pagination -->
                    </div>


                </div>
                <!-- /.blog -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.light-wrapper -->

    </div>
    <!-- /.content-wrapper -->


@endsection

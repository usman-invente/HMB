@extends('layouts.app')
@section('content')


        <div class="light-wrapper">
            <div class="container inner">
                <div class="blog event-grid-view col3">
                    <div class="event-posts">
                     @if(session('message'))
                       <p class="alert alert-success">{{session('message')}}</p>
                     @endif
                        <div class="isotope row">
                        @if(count($blogs ))
                        @foreach($blogs  as $blog)
                            <div class="col-sm-6 col-md-4 event-grid-view-post" style="margin-bottom:50px;">
                                <div class="event-post">
                                    <figure class="event-main"><img  style="width:100%;height:277px;" src="{{asset($blog->thumbnail)}}" alt="" /></figure>
                                    <div class="box ">
                                        <div class="meta"><span class="date">{{date('d M Y',strtotime($blog->created_at))}}</span></div>
                                        <h3 class="post-title"><a href="blog-post.html">{{$blog->title}}</a></h3>
                                        <a href="{{route('post.news',$blog->slug)}}" class="btn">Details</a>
                                        <a href="{{route('edit-blog',$blog->id)}}" class="btn">Edit</a>
                                        <a href="{{route('delete-blog',$blog->id)}}" class="btn">Delete</a>
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

                   {{$blogs->links()}}
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

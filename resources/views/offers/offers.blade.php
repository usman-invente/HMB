@extends('layouts.app')
@section('content')


        <div class="light-wrapper">
            <div class="container inner">
                <div class="blog event-grid-view col3">
                    <div class="event-posts">
                        <div class="isotope row">
                        @if(count($offers))
                        @foreach($offers as $offer)
                            <div class="col-sm-6 col-md-4 event-grid-view-post" style="margin-bottom:50px;">
                                <div class="event-post">
                                    <figure class="event-main"><img  style="width:100%;height:277px;" src="{{asset($offer->thumbnail)}}" alt="" /></figure>
                                    <div class="box ">
                                        <div class="meta"><span class="date">{{date('d M Y',strtotime($offer->created_at))}}</span><p style="font-size:22px;float: right;">$ {{$offer->price}}</p></div>
                                        <h3 class="post-title"><a href="blog-post.html">{{$offer->title}}</a></h3>
                                        <a href="{{route('single.offer',$offer->slug)}}" class="more">Details</a>
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

                   {{$offers->links()}}
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

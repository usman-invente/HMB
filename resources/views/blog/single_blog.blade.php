@extends('layouts.app')
@section('content')
 <div class="light-wrapper">
    <div class="container inner">
      <div class="blog classic-view row">
        <div class="col-sm-8 blog-content">
          <div class="blog-posts">
            <div class="post">
              <div class="post-content">
                <figure class="main"> <img src="{{asset($post->thumbnail)}}" alt="" /></figure>
                <div class="meta"><span class="date">{{date('d M Y',strtotime($post->created_at))}}</span><span class="category"><a href="#">{{$post->category}}</a></div>
                {!!$post->description!!}


              </div>
              <!-- /.post-content -->
            </div>
            <!-- /.post -->

          </div>
          <!-- /.blog-posts -->

          <div class="divide30"></div>
          <!-- /#comments -->
          <div class="divide60"></div>
          <!-- /.comment-form-wrapper -->

        </div>
        <!-- /.blog-content -->
      </div>
      <!-- /.blog -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->

@endsection

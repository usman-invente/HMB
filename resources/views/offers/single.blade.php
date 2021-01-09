@extends('layouts.app')
@section('content')
 <div class="light-wrapper">
    <div class="container inner">
      <div class="blog classic-view row">
        <div class="col-sm-8 blog-content">
          <div class="blog-posts">
            <div class="post">
              <div class="post-content">
                <figure class="main"> <img src="{{asset($offer->thumbnail)}}" alt="" /></figure>
                <div class="meta"><span class="date">{{date('d M Y',strtotime($offer->created_at))}}</span><span class="category"><a href="#" class="label label-info" style="color:black">Start date :{{date('d M Y',strtotime($offer->start_at))}}</a>,<a href="#" class="label label-info" style="color:black">End date :{{date('d M Y',strtotime($offer->end_at))}}</a></span></div>
                {!!$offer->description!!}
                <div class="tiles post-gallery">
                  <div class="items row row-offset-0 light-gallery">
                    <div class="item col-xs-12 col-sm-6 col-md-6">
                      <figure><a class="lgitem" href="style/images/art/cb3-full.jpg" data-sub-html="#caption1">
                        <div class="overlay">
                          <div class="info"><span>View Larger</span></div>
                        </div>
                        <!-- /.overlay --> <img src="style/images/art/cb3.jpg" alt="" /> </a></figure>
                      <div id="caption1" class="hidden">
                        <h3>Sit Parturient Lorem</h3>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue.</p>
                      </div>
                      <!-- /.hidden -->
                    </div>
                    <!--/.item -->
                    <div class="item col-xs-12 col-sm-6 col-md-6">
                      <figure><a class="lgitem" href="style/images/art/cb5-full.jpg" data-sub-html="#caption2">
                        <div class="overlay">
                          <div class="info"><span>View Larger</span></div>
                        </div>
                        <!-- /.overlay --> <img src="style/images/art/cb5.jpg" alt="" /> </a></figure>
                    </div>
                    <!--/.item -->
                  </div>
                  <!--/.items -->
                </div>
                <!--/.tiles -->

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

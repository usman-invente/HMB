@extends('layouts.app')
@section('content')

  <div class="content-wrapper">
  <div class="navbar navbar-default default extended centered" role="navigation">
    <div class="container">
        <div class="divide50"></div>


    </div>
    <!-- /.container -->

  </div>
  <!-- /.light-wrapper -->

  <div class="dark-wrapper">
    <div class="container inner">
      <div class="thin">
        <h2 class="post-title bm10">{{$member->company_name}}</h2>
        <div class="row">
          <div class="col-sm-8">
            <p>{{$member->bussiness_description}}</p>

          </div>
          <!-- /column -->
          <aside class="col-sm-4 sidebar">
            <ul class="item-details">

              <li> <strong>Email:</strong>{{$member->email}}</li>
              <li> <strong>Website:</strong>{{$member->website}}</li>
          <!-- /.sidebar -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.thin -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.dark-wrapper -->

</div>
<!-- /.content-wrapper -->


    @endsection

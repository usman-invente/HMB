@extends('layouts.app')
@section('content')

    <div class="content-wrapper">
        <div class="light-wrapper">
            <div class="container inner">
                <div class="divide25"></div>
                <div class="portfolio-grid detailed col3">
                    <div class="clearfix"></div>
                    <div class="items-wrapper">
                        <div class="isotope items">
                        @foreach($users as $user)
                            <div class="item post food">
                                <figure><a href="{{route('members-profile',$user->id)}}">
                                        <div class="overlay">
                                            <div class="info"> <span>View Profile</span> </div>
                                        </div>
                                        <!-- /.overlay --><img src="{{asset($user->profile_image)}}"  width="380"
                                            height="262" alt="" />
                                    </a></figure>
                                <div class="post-content">
                                    <h3 class="post-title"><a href="portfolio-post.html">{{ $user->company_name }}</a>
                                    </h3>
                                    <!-- /.meta -->
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!-- /.post -->
                            @endforeach



                            <!-- /.post -->
                        </div>
                        <!--/.isotope -->
                    </div>
                    <!--/.items-wrapper -->

                </div>
                <!--/.portfolio-grid -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.light-wrapper -->


    @endsection

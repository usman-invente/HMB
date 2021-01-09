<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="style/images/favicon.png">
    <title>Havering Means Business</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/color/navy.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/type/icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/custom_css.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900,300,200,100' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dropzone.css') }}">
     <!-- include summernote css-->
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
   @yield('courselist-css')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
#table td ,th{
     text-align: center;
    vertical-align: middle;
}
</style>
</head>
<body class="full-layout">
    <div class="content-wrapper">
        <div class="navbar navbar-default default extended centered" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <div class="social-wrapper text-left">
                        <a href="{{route('register')}}" class="btn btn-large ">Sign Up</a>
                    </div>
                    <!--/.social-wrapper -->
                    <div class="navbar-brand text-center"><a href="/"><img src="#"
                                srcset="{{ asset('assets/frontend/images/logo.png') }} 1x, {{ asset('assets/frontend/images/logo@2x.png') }} 2x"
                                alt="" /></a></div>
                    <ul class="info text-right">
                        <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
                        <li> <a href="#"><i class="ion-social-twitter"></i></a> </li>
                        <li> <a href="#"><i class="ion-social-instagram"></i></a> </li>
                    </ul>
                    <!-- /.info -->
                    <div class="nav-bars-wrapper">
                        <div class="nav-bars-inner">
                            <div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span>
                            </div>
                        </div>
                        <!-- /.nav-bars-inner -->
                    </div>
                    <!-- /.nav-bars-wrapper -->
                </div>
                <!-- /.nav-header -->
            </div>
            <!--/.container -->
            <div class="navbar-collapse collapse">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('event')}}">Events</a></li>
                        @auth
                        <li><a href="{{route('members-directory')}}">Members Directory </a></li>
                        <li><a href="{{route('price.plan')}}">Pricing</a></li>
                        @endauth
                        @auth
                        <li><a href="{{route('offers')}}">Offers</a></li>
                        @endauth
                        <li><a href="{{route('training')}}">Trainings</a></li>
                        {{-- <li><a href="#!">Members Directory</a></li>
                        <li><a href="#!">Members Offers</a></li> --}}

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            <li class="nav-item">
                                    <a class="nav-link" href="{{route('register')}}">{{ __('Register') }}</a>
                            </li>

                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img  style="width: 36px;" src="{{asset(Auth::user()->profile_image)}}">
                                </a>



                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    @if(Auth::user()->end_at > date('Y-m-d'))
                                     <a class="dropdown-item" href="{{ route('createcourse') }}">
                                        Create Course
                                    </a>

                                    <a class="dropdown-item" href="{{ route('manage-courses') }}">
                                        Manage Courses
                                    </a>

                                     <a class="dropdown-item" href="{{ route('create-blogform') }}">
                                        Create Blog
                                     </a>

                                      <a class="dropdown-item" href="{{ route('manage-blogs') }}">
                                        Manage Blogs
                                     </a>

                                      <a class="dropdown-item" href="{{ route('create-offerform') }}">
                                        Create Offer
                                     </a>

                                      <a class="dropdown-item" href="{{ route('manage-offers') }}">
                                        Manage Offers
                                     </a>
                                    <br>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('my-courses') }}">
                                        My Courses
                                    </a>

                                     <a class="dropdown-item" href="{{ route('profile') }}">
                                        Profile
                                    </a><br>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>



                                </div>
                            </li>



                        @endguest
                    </ul>
                    </li>
                    </ul>
                </div>
                <!--/.container -->
            </div>
            <!--/.nav-collapse -->

        </div>
        <!--/.navbar -->

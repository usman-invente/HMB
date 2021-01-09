@extends('layouts.app')
@section('content')

<div class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
      <ul>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Chris2.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;">Chris Daems</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Cervello Financial Planning</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100','90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Phil.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;">Philip Fitzgibbons</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Fitz Squad Boot Camp</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Julie.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Julie Wedge</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Flower-Shed</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Lisa.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Lisa Cannings</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Abbey Group</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Elisabetta.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Gary Andrews</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Andrews Catering</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/SteveC.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Stephen Chilton </div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">ERB Insurance</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/PerfectLayout.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Christine Huntingford</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="30" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Tracey Levy-King</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="60" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Perfect Layout</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Terry.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Terry Upham</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="30" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Gemma Marie Upham</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="60" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">WPA Healthcare Practice Plc</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Carol.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Carol Hussey</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="30" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Martin Hussey</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="60" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">DOR-2-DOR</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/LisaJ.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Lisa Judd</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Cleaning Sensation</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Tiina.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Tiina Juhanson</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">F Barnes Solicitors</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Fiona.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Fiona Morpurgo</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Morpurgo Wealth</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/SteveD.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Steve Donovan</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Stephen James estate agent</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Chloe.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Chloe Lee</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Champion of Fun &</br>Magical photographer</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Megha.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Megha Arora</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="50" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Pink Foodie</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
        <li data-transition="fade"><img src="{{asset('assets/frontend/images/art/Radfield.jpg')}}" alt="">
          <div class="tp-caption large" data-x="900" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 60px; line-height: 60px; color:white;">Join the </br>community </br>now</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Jennie Bardrick</div>
          <div class="tp-caption light" data-x="2" data-hoffset="" data-y="center" data-voffset="30" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 25px; line-height: 30px; font-weight: bold;;">Lisa Cable</div>
          <div class="tp-caption light" data-x="5" data-hoffset="" data-y="center" data-voffset="60" data-width="['auto','auto','autp','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: bold;">Radfield Home Care</div>
          <div class="tp-caption" data-x="900" data-hoffset="" data-y="center" data-voffset="['75','100','100,'90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="{{route('register')}}" class="btn btn-large">Sign Up</a></div>
        </li>
      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
    </div>
    <!-- /.rev_slider -->
  </div>
  <!-- /.rev_slider_wrapper -->
  <div class="light-wrapper">
    <div class="container inner">
      <div class="thin">
        <p class="lead text-center">Morello is a <em>responsive</em> site template with a clean and professional design. A great <em>solution</em> for your business, portfolio, blog or any other purpose website.</p>
      </div>
      <!-- /.thin -->
      <div class="divide20"></div>
      <div class="row">
        <div class="col-sm-4 lp30 rp30 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.0s">
          <div class="icon icon-m bm20"><img src="{{asset('assets/frontend/images/icons/concept1.svg')}}" alt="" /></div>
          <h4>Professional Design</h4>
          <p>Morbi leo risus, porta ac consectetur ac, blandit at eros. Integer posuere erat morbi vehicula risus morbi risus nulla.</p>
        </div>
        <!--/column -->
        <div class="col-sm-4 lp30 rp30 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="icon icon-m bm20"><img src="{{asset('assets/frontend/images/icons/concept2.svg')}}" alt="" /></div>
          <h4>SEO-Friendly</h4>
          <p>Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit, vestibulum at consectetur porta consectetur.</p>
        </div>
        <!--/column -->
        <div class="col-sm-4 lp30 rp30 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
          <div class="icon icon-m bm20"><img src="{{asset('assets/frontend/images/icons/concept8.svg')}}" alt="" /></div>
          <h4>Clear Coding</h4>
          <p>Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus. Cras mattis consectetur vestibulum at eros.</p>
        </div>
        <!--/column -->

      </div>
      <!--/.row -->

   <div class="section-title">
        <h2>Free Courses</h2>

    </div>

  <div class="light-wrapper">
    <div class="container inner">
      <div class="course grid-view-course col3">
        <div class="course-courses">
          <div class="isotope row">
          @if(count($free_courses))
          @foreach($free_courses as $course)
           <div class="col-sm-6 col-md-4 grid-view-course">
              <div class="course">
                <figure class="main img-responsive"><img  style="width:100%;height:277px;" src="{{asset($course->course_image)}}" alt="" /></figure>
                <div class="box">
                  <div class="meta-course"><span class="author">{{$course->creater_name}}</span><span class="price label label-success">free</span></div>
                  <h3 class="course-title"><a href="course-course.html">{{$course->course_title}} </a></h3>
                  <a href="{{route('free.course',$course->slug)}}" class="outline">View</a> </div>
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


        <!-- /.pagination -->

      </div>
      <!-- /.course -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->

  <!-- Subscribe Cources-->
   <div class="section-title">
        <h2>Subscribe Courses</h2>

    </div>

 <div class="light-wrapper">
    <div class="container inner">
      <div class="course grid-view-course col3">
        <div class="course-courses">
          <div class="isotope row">
          @if(count($subscribe_courses))
          @foreach($subscribe_courses as $course)
           <div class="col-sm-6 col-md-4 grid-view-course">
              <div class="course">
                <figure class="main img-responsive"><img  style="width:100%;height:277px;" src="{{asset($course->course_image)}}" alt="" /></figure>
                <div class="box">
                  <div class="meta-course"><span class="author">{{$course->creater_name}}</span><span class="price label label-success">subscribe</span></div>
                  <h3 class="course-title"><a href="course-course.html">{{$course->course_title}} </a></h3>
                  <a href="{{route('subscribe.course',$course->slug)}}" class="outline">View</a> </div>
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

        <!-- /.pagination -->

      </div>
      <!-- /.course -->
    </div>
    <!-- /.container -->
  </div>

  <!-- /.light-wrapper -->
      <div class="divide70"></div>

       <!-- Subscribe Cources-->
   <div class="section-title">
        <h2>Premium Courses</h2>

    </div>

 <div class="light-wrapper">
    <div class="container inner">
      <div class="course grid-view-course col3">
        <div class="course-courses">
          <div class="isotope row">
          @if(count($premium_courses))
          @foreach($premium_courses as $course)
           <div class="col-sm-6 col-md-4 grid-view-course">
              <div class="course">
                <figure class="main img-responsive"><img  style="width:100%;height:277px;" src="{{asset($course->course_image)}}" alt="" /></figure>
                <div class="box">
                  <div class="meta-course"><span class="author">{{$course->creater_name}} </span><span class="price"><a href="#">£ {{$course->price}}</a></span></div>
                  <h3 class="course-title"><a href="course-course.html">{{$course->course_title}} </a></h3>
                  <a href="{{route('paid.course',$course->slug)}}" class="outline">View</a> </div>
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

        <!-- /.pagination -->

      </div>
      <!-- /.course -->
    </div>
    <!-- /.container -->
  </div>

  <!-- /.light-wrapper -->
      <div class="divide70"></div>
      <div class="section-title">
        <h2>Key Features of Morello</h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
      </div>
      <div class="row numbered">
        <div class="col-md-6 text-center">
          <figure class="icon-l wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.0s"> <img src="{{asset('assets/frontend/images/icons/concept15.svg')}}" style="width: auto; height: 350px;" alt="" /> </figure>
        </div>
        <!-- /column -->
        <div class="divide30 hidden-md hidden-lg"></div>
        <div class="col-sm-6 col-md-3">
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
            <h4><span class="number"></span>Video Support</h4>
            <p>Morbi leo risus, porta ac consectetur ac, at eros. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <!--/.service -->
          <div class="divide10"></div>
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
            <h4><span class="number"></span>Working Contact Form</h4>
            <p>Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi. </p>
          </div>
          <!--/.service -->
          <div class="divide10"></div>
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
            <h4><span class="number"></span>Design Quality</h4>
            <p>Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur.</p>
          </div>
          <!--/.service -->

        </div>
        <!-- /column -->

        <div class="col-sm-6 col-md-3">
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.8s">
            <h4><span class="number"></span>Pixel-Perfect Layout</h4>
            <p>Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu.</p>
          </div>
          <!--/.service -->
          <div class="divide10"></div>
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
            <h4><span class="number"></span>Feature Availability</h4>
            <p>Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod.</p>
          </div>
          <!--/.service -->
          <div class="divide10"></div>
          <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.4s">
            <h4><span class="number"></span>Personal Support</h4>
            <p>Morbi leo risus, porta ac consectetur ac, at eros. Sed posuere consectetur est at lobortis.</p>
          </div>
          <!--/.service -->

        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->
  <div class="inverse-wrapper">
    <div class="container inner bp0">
      <div class="thin2">
        <p class="lead text-center">Morello is a <em>flat</em> and <em>responsive</em> site template with tons of features, built with Twitter Bootstrap. You can easily create a <em>unique</em> and <em>professional</em> looking website.</p>
      </div>
      <!-- /.thin2 -->
      <figure class="text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.0s"><img src="{{asset('assets/frontend/images/art/mockup.png')}}" alt="" /></figure>
    </div>
    <!-- /.container -->
  </div>



  <div class="light-wrapper">
    <div class="inner">
      <div class="container">
        <div class="section-title">
          <h2>Recent Products</h2>
        </div>
        <!-- /.section-title -->
      </div>
      <!-- /.container -->

      <div class="carousel-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="owl-posts portfolio-carousel">
          <div class="item post">
            <figure><img src="{{asset('assets/frontend/images/art/cp1.jpg')}}" alt="" /></figure>
            <div class="post-content">
              <h3 class="post-title"><a href="portfolio-post.html">Curabitur Blandit</a></h3>
              <div class="meta"><span class="category"><a href="#">Business</a>, <a href="#">Works</a></span></div>
              <!-- /.meta -->
            </div>
            <!-- /.post-content -->
          </div>
          <!-- /.post -->
          <div class="item post">
            <figure><img src="{{asset('assets/frontend/images/art/cp2.jpg')}}" alt="" /></figure>
            <div class="post-content">
              <h3 class="post-title"><a href="portfolio-post.html">Mollis Euismod Fringilla</a></h3>
              <div class="meta"><span class="category"><a href="#">News</a>, <a href="#">Corporate</a></span></div>
              <!-- /.meta -->
            </div>
            <!-- /.post-content -->
          </div>
          <!-- /.post -->
          <div class="item post">
            <figure><img src="{{asset('assets/frontend/images/art/cp3.jpg')}}" alt="" /></figure>
            <div class="post-content">
              <h3 class="post-title"><a href="portfolio-post.html">Dapibus Quam Ligula</a></h3>
              <div class="meta"><span class="category"><a href="#">Business</a>, <a href="#">Works</a></span></div>
              <!-- /.meta -->
            </div>
            <!-- /.post-content -->
          </div>
          <!-- /.post -->
          <div class="item post">
            <figure><img src="{{asset('assets/frontend/images/art/cp4.jpg')}}" alt="" /></figure>
            <div class="post-content">
              <h3 class="post-title"><a href="portfolio-post.html">Fusce Malesuada Cursus</a></h3>
              <div class="meta"><span class="category"><a href="#">News</a>, <a href="#">Corporate</a></span></div>
              <!-- /.meta -->
            </div>
            <!-- /.post-content -->
          </div>
          <!-- /.post -->
          <div class="item post">
            <figure><img src="{{asset('assets/frontend/images/art/cp5.jpg')}}" alt="" /></figure>
            <div class="post-content">
              <h3 class="post-title"><a href="portfolio-post.html">Vehicula Euismod Mollis</a></h3>
              <div class="meta"><span class="category"><a href="#">Business</a>, <a href="#">Works</a></span></div>
              <!-- /.meta -->
            </div>
            <!-- /.post-content -->
          </div>
          <!-- /.post -->
          <div class="item post">
            <figure><img src="{{asset('assets/frontend/images/art/cp6.jpg')}}" alt="" /></figure>
            <div class="post-content">
              <h3 class="post-title"><a href="portfolio-post.html">Vehicula Justo Elit</a></h3>
              <div class="meta"><span class="category"><a href="#">News</a>, <a href="#">Corporate</a></span></div>
              <!-- /.meta -->
            </div>
            <!-- /.post-content -->
          </div>
          <!-- /.post -->
          <div class="item post">
            <figure><img src="{{asset('assets/frontend/images/art/cp7.jpg')}}" alt="" /></figure>
            <div class="post-content">
              <h3 class="post-title"><a href="portfolio-post.html">Ultricies Tellus Inceptos</a></h3>
              <div class="meta"><span class="category"><a href="#">Business</a>, <a href="#">Works</a></span></div>
              <!-- /.meta -->
            </div>
            <!-- /.post-content -->
          </div>
          <!-- /.post -->
        </div>
        <!-- /.portfolio-carousel -->
      </div>
      <!-- /.carousel-wrapper -->

    </div>
    <!-- /.inner -->
  </div>
  <!-- /.light-wrapper -->

  <div class="dark-wrapper">
    <div class="container inner">
      <p class="lead text-center bm25">Let's make something <em>great</em> together.</p>
      <div class="text-center"> <a href="#" class="btn btn-large fixed-width">View Our Works</a> <a href="#" class="btn btn-large btn-red fixed-width">Get in Touch</a> </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.dark-wrapper -->

  <div class="parallax xs-center" data-parallax-img="{{asset('assets/frontend/images/art/parallax2.jpg')}}" data-parallax-img-width="1920" data-parallax-img-height="1123">
    <div class="container inner">
      <div class="row">
        <div class="col-md-4 col-md-offset-6 col-sm-5 col-sm-offset-6 col-xs-12">
          <h1>Free updates & premium support</h1>
          <p class="lead">You will have access to all updates and free supports</p>
          <a href="#" class="btn btn-large btn-border dark"><i class="ion-android-mail"></i>Ask a Question</a> </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.parallax -->

  <div class="light-wrapper">
    <div class="container inner">
      <div class="section-title">
        <h2>Our Recent News</h2>
      </div>
      <!-- /.section-title -->
      <div class="carousel-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="owl-posts blog-carousel">
        @if(count($recent_news))
        @foreach($recent_news as $post)
          <div class="item post">
            <figure class="main"><img src="{{asset($post->thumbnail)}}" alt="" /></figure>
            <div class="box">
              <div class="meta"><span class="date">{{date('m-d-Y',strtotime($post->created_at))}}</span><span class="comments"><a href="#">15 Comments</a></span></div>
              <h3 class="post-title"><a href="blog-post.html">{{$post->title}} </a></h3>
              <a href="{{route('post.news',$post->slug)}}" class="more">Read more</a> </div>
            <!-- /.box -->

          </div>
          <!-- /.post -->
          @endforeach
          @endif
        </div>
        <!--/.carousel -->
      </div>
      <!--/.carousel-wrapper -->
      {{-- <a href="{{route('allblog')}}" class="btn btn-large pull-right " >VIew All</a><br><br> --}}
    </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->

</div>
<!-- /.content-wrapper -->

@endsection

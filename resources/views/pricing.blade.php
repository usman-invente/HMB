
@extends('layouts.app')
@section('content')
   <div class="light-wrapper">
    <div class="container inner">
      <div class="section-title text-center">
        <h2 id="pricing">Pricing</h2>
      </div>
      <!-- /.section-title -->

      <div class="row row-offset-0">
        <div class="col-sm-4">
          <div class="pricing panel">
            <div class="panel-heading">
              <h3 class="panel-title">Free </h3>
              <div class="price" style="height: 123px;"><p style="font-size:22px;">Free</p></div>
            </div>
            <!--/.panel-heading -->
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td><strong>1</strong> Project </td>
                </tr>
                <tr>
                  <td><strong>100K</strong> API Access </td>
                </tr>
                <tr>
                  <td><strong>100MB</strong> Storage </td>
                </tr>
                <tr>
                  <td> Custom <strong>Cloud</strong> Services </td>
                </tr>
                <tr>
                  <td> Weekly <strong>Reports</strong></td>
                </tr>
                <tr>
                  <td> 7/24 <strong>Support</strong></td>
                </tr>
              </table>
            </div>
            <!--/.panel-body -->
            <div class="panel-footer"> <a href="{{route('free.user')}}" class="btn" role="button">Sign Up</a></div>
          </div>
          <!--/.pricing -->
        </div>
        <!--/column -->
        <div class="col-sm-4">
          <div class="pricing panel">
            <div class="panel-heading">
              <h3 class="panel-title">Monthly</h3>
              <div class="price"> <span class="price-currency">£</span> <span class="price-value">{{$monthly}}</span> <span class="price-duration">month</span></div>
            </div>
            <!--/.panel-heading -->
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td><strong>5</strong> Projects </td>
                </tr>
                <tr>
                  <td><strong>100K</strong> API Access </td>
                </tr>
                <tr>
                  <td><strong>200MB</strong> Storage </td>
                </tr>
                <tr>
                  <td> Custom <strong>Cloud</strong> Services </td>
                </tr>
                <tr>
                  <td> Weekly <strong>Reports</strong></td>
                </tr>
                <tr>
                  <td> 7/24 <strong>Support</strong></td>
                </tr>
              </table>
            </div>
            <!--/.panel-body -->
            <div class="panel-footer"> <a href="/payment?plan=monthly" class="btn" role="button">Sign Up</a></div>
          </div>
          <!--/.pricing -->
        </div>
        <!--/column -->
        <div class="col-sm-4">
          <div class="pricing panel">
            <div class="panel-heading">
              <h3 class="panel-title">Yearly</h3>
              <div class="price"> <span class="price-currency">£</span> <span class="price-value">{{$yearly}}</span> <span class="price-duration">Year</span></div>
            </div>
            <!--/.panel-heading -->
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td><strong>20</strong> Projects </td>
                </tr>
                <tr>
                  <td><strong>300K</strong> API Access </td>
                </tr>
                <tr>
                  <td><strong>500MB</strong> Storage </td>
                </tr>
                <tr>
                  <td> Custom <strong>Cloud</strong> Services </td>
                </tr>
                <tr>
                  <td> Weekly <strong>Reports</strong></td>
                </tr>
                <tr>
                  <td> 7/24 <strong>Support</strong></td>
                </tr>
              </table>
            </div>
            <!--/.panel-body -->
            <div class="panel-footer"> <a href="/payment?plan=yearly"  class="btn" role="button">Sign Up</a></div>
          </div>
          <!--/.pricing -->
        </div>
        <!--/column -->

      </div>
      <!--/.row -->

    </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->
@endsection

@extends("backend.layouts.master")

@section("content")
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Admin Dashboard</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Dashboard</li>
        </ol>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-lg-4 col-md-6 m-b-3">
                <div class="widget-info bg-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-white">
                                <p>Total Balance</p>
                                <h2 class="font-weight-bold">$15,859</h2>
                                <a href="#">View Statement</a>
                            </div>
                            <div class="col-md-6 m-t-2 text-right"> <span id="spa-bar"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 m-b-3">
                <div class="widget-info bg-aqua">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-white">
                                <p>Online Revenue</p>
                                <h2 class="font-weight-bold">$8,859</h2>
                                <a href="#">View Statement</a>
                            </div>
                            <div class="col-md-6 m-t-2 text-right"> <span id="spa-line"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 m-b-3">
                <div class="widget-info bg-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-white">
                                <p>Total Profit</p>
                                <h2 class="font-weight-bold">$85,085</h2>
                                <a href="#">View Statement</a>
                            </div>
                            <div class="col-md-6 m-t-2 text-right"> <span id="spa-pie"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="info-box">
                    <div class="col-12">
                        <h5>Revenue Statistics</h5>
                        <div class="row m-t-2 m-b-2">
                            <div class="col-md-6">
                                <h1 class="font-weight-500">$23,743</h1>
                                <p>Total Revenue</p>
                            </div>
                            <div class="col-md-3">
                                <h6 class="text-blue font-weight-bold">Organic Traffic</h6>
                                <p class="f-13">+ 40% this month</p>
                            </div>
                            <div class="col-md-3">
                                <h6 class="text-green font-weight-bold">Page Views</h6>
                                <p class="f-13">+ 25% this month</p>
                            </div>
                        </div>
                    </div>
                    <div id="earning"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("scripts")
<script src="{{ url('dist/plugins/jquery-sparklines/jquery.sparkline.min.js') }}"></script> 
<script src="{{ url('dist/plugins/jquery-sparklines/sparkline-int.js') }}"></script> 
<script src="{{ url('dist/plugins/raphael/raphael-min.js') }}"></script> 
<script src="{{ url('dist/plugins/morris/morris.js') }}"></script> 
<script src="{{ url('dist/plugins/functions/dashboard1.js') }}"></script> 
@endsection
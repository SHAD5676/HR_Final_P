@extends("backend.layouts.master")

{{-- 
   1. REMOVED @section("head") entirely. 
      Your master.blade.php already handles CSS and Meta tags. 
      We don't need to load them twice.
--}}

@section("content")
<div class="content-wrapper">

    <div class="content-header sty-one">
        <h1>User Dashboard</h1>
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
{{-- 
    2. CRITICAL FIX: Removed jQuery, Bootstrap, and bizadmin.js 
       They are already loaded in 'master.blade.php'.
       Loading them again here causes the freeze.
--}}

<script src="{{url('')}}/dist/plugins/jquery-sparklines/jquery.sparkline.min.js"></script> 
<script src="{{url('')}}/dist/plugins/jquery-sparklines/sparkline-int.js"></script> 

<script src="{{url('')}}/dist/plugins/raphael/raphael-min.js"></script> 
<script src="{{url('')}}/dist/plugins/morris/morris.js"></script> 
<script src="{{url('')}}/dist/plugins/functions/dashboard1.js"></script> 

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
@endsection
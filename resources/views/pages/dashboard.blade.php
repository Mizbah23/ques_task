@extends('master')
@section('title'){{$title}}@stop
@section('link')

    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/pages/card-analytics.css')}}">
@stop
@section('content')
<section id="dashboard-analytics">
<!--    <div class="row match-height" >

        </div>-->

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="{{asset('public/img/decore-left.png')}}" class="img-left" alt="
                                        card-img-left">
                                        <img src="{{asset('public/img/decore-right.png')}}" class="img-right" alt="
                                        card-img-right">
                                        {{-- <div class="avatar avatar-xl bg-success shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div> --}}
                                        <div class="text-center">
                                            <h1 class="mb-2 text-black">Welcome {{Auth::guard('web')->user()->name}},</h1>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                        
                        {{-- <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div>
                                        <h2 class="text-bold-700 mb-0">{{$suppliers}}</h2>
                                        <p>Total Suppliers</p>
                                    </div>
                                    <div class="avatar bg-rgba-danger p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="fa fa-user-circle-o text-danger font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div>
                                        <h2 class="text-bold-700 mb-0">{{$categories}}</h2>
                                        <p>Total Category</p>
                                    </div>
                                    <div class="avatar bg-rgba-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="fa fa-list text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>




<div class="row">
                        
                        {{-- <div class="col-lg-4 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div>
                                        <h2 class="text-bold-700 mb-0">{{$tsup}}</h2>
                                        <p>Total Supplies</p>
                                    </div>
                                    <div class="avatar bg-rgba-success p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="fa fa-truck text-success font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    
                      
</div>





                   <div class="row ">
                       
                       
                       
                       
                       {{-- <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div><h2 class="text-bold-700">{{$tsupplies}}</h2><p class="mb-0"><b>Supplies</b> (last <b>15</b> days)</p></div>
                                    <div class="avatar bg-rgba-success p-50">
                                        <div class="avatar-content"><i class="fa fa-truck text-success font-medium-5"></i></div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div id="supply-chart"></div>
                                </div>
                            </div>
                        </div> --}}
           
                
                       
                       
   
                       
                    </div>









    </section>


@stop
@section('script')
  
<script src="{{asset('public/back/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<script src="{{asset('public/back/vendors/js/charts/apexcharts.min.js')}}"></script>


<script>
    var e = "#7367F0",a = "#FF9F43",t = "#EA5455",r = "#e7eef7";g = "#75C974";

    var d = {
        chart:
        {
            height: 100,type: "area",
            toolbar:{  show: !1 },
            sparkline:{ enabled: !0 },
            grid:{ show: !1, padding: {left: 0,right: 0} }
        },
        colors: [g],
        dataLabels:{ enabled: !1 },
        stroke:{ curve: "smooth",width: 2.5 },
        fill:{ type: "gradient",
               gradient:{ shadeIntensity: .9,opacityFrom: .7,opacityTo: .5,stops: [0, 80, 100]}
            },
        series: [{ name: "Supplies", data: [  ] }],
        xaxis: { labels: { show: !1 },
                axisBorder: { show: !1 } 
               },
        yaxis: [{ y: 0, offsetX: 0, offsetY: 0, padding: { left: 0,right: 0 } }],
        tooltip: { x:{ show: !1 } }
    };
    new ApexCharts(document.querySelector("#supply-chart"), d).render();



    

  
    
    
</script>

@stop
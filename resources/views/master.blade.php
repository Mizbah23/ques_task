<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Inventory App">
    <meta name="keywords" content="Inventory App">
    <meta name="author" content="Mosheur">
    <title> Question Task  - @yield('title')  </title>
  
    <link rel="apple-touch-icon" href="{{asset('public/front/img/logo.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/vendors.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/extensions/toastr.css')}}">
 
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/core/colors/palette-gradient.css')}}">


    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/plugins/extensions/toastr.css')}}">
@yield('link')
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/back/css/style.css')}}">
    <!-- END: Custom CSS-->
    <style>
    .main-menu .navbar-header .navbar-brand .brand-logo {
    background: url( "{{asset('public/front/img/logo.png')}}" ) no-repeat;
}
    </style>
    

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    
@include('layouts.topnav')
@include('layouts.sidenav')

    <!-- BEGIN: Main Menu-->
 
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                
                
                
                
                
                    @yield('content')
                

                <!-- Dashboard Ecommerce ends -->

                
                
                
                
            </div>
            
            
            
            
            
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
   <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0" style="text-align: center;">
            <span class=" d-block d-md-inline-block mt-25" style="text-align: center !important;">
                COPYRIGHT &copy; {{now()->year}}
                <a class="text-bold-800 grey darken-2" href="{{route('dashboard')}}" target="_blank">Mizbah</a>All rights Reserved
            </span>
            <!--<span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>-->
            <button class="btn btn-primary btn-icon scroll-top" type="button">
                <i class="feather icon-arrow-up"></i>
            </button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('public/back/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('public/back/js/core/app-menu.js')}}"></script>
    <script src="{{asset('public/back/js/core/app.js')}}"></script>
    <script src="{{asset('public/back/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    
    <!-- END: Page JS-->
   
<script src="{{asset('public/back/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('public/back/js/scripts.js')}}"></script>
<script>
    $(document).ready(function(){
       getNotification();
       
});
toastr.options = {"closeButton": true,"debug": true,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        
</script>
 @yield('script')
</body>
<!-- END: Body-->

</html>
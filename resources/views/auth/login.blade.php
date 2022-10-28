<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="Mosheur">
    <title> Question Task | {{$title}}  </title>
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
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 1-column  
      navbar-floating footer-static  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" 
      data-col="1-column" data-layout="dark-layout" style="background-image:url({{asset('public/back/images/login-bg.jpg')}})">
    <!-- BEGIN: Content-->
        <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0" style="width: 400px">
                            <div class="row m-0">
<!--                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="{{asset('public/back/images/pages/login.png')}}" alt="branding logo">
                                </div>-->
                                <div class="col-lg-12 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
<!--                                            <div class="card-title">
                                                <h4 class="mb-0">Login</h4>
                                            </div>-->
                                        </div>
                                        <p class="px-2" style="text-align: center"> <h7 style="font-size: 20px;font-weight: bold;"> Question Task </h7> </p>
                                        
                                          
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                
                                                <form id="app" @submit="checkForm" action="{{route('login.submit')}}" method="post">
                                                     @if (session('message'))
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                            <p class="mb-0">
                                            {{ session('message') }}
                                            </p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            @elseif(session('error'))
                                              <div class="alert alert-danger alert-dismissible fade show" role="alert">

                                            <p class="mb-0"> <i class="feather icon-info mr-1 align-middle">
                                              </i>
                                            {{ session('error') }}
                                            </p>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            @endif
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" v-model="email" id="email" class="form-control" name="email" placeholder="Enter Admin Email." value="{{old('email')}}" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-mail"></i>
                                                        </div>
                                                        <label for="email">Email</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" v-model="password" name="password" class="form-control" id="user-password" placeholder="Password" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                    </fieldset>
                                            <div class="error alert-danger">{{$errors->first('password')}}</div>
                                                    
                                                    {{csrf_field()}}
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" id="remember" {{old('remember') ? 'checked' : ''}} >
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    
                                                                    <span class="">Remember me</span>
                                                                </div>
                                                                
                                                            </fieldset>
                                                        </div>
                                                        <!--<div class="text-right"><a href="auth-forgot-password.html" class="card-link">Forgot Password?</a></div>-->
                                                    </div>
                                               
                                                    <button type="submit" class="btn btn-primary float-left btn-inline">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        
                                        
<!--                                        
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form action="index.html">
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control" id="user-name" placeholder="Username" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="user-name">Username</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" class="form-control" id="user-password" placeholder="Password" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                    </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Remember me</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="text-right"><a href="auth-forgot-password.html" class="card-link">Forgot Password?</a></div>
                                                    </div>
                                                    <a href="auth-register.html" class="btn btn-outline-primary float-left btn-inline">Login</a>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline"></button>
                                                </form>
                                            </div>
                                        </div>-->
                                        
                                        
                                        
                                        <div class="login-footer">
                                            <div class="divider">
                                                <div class="divider-text"></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <script src="{{asset('public/back/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
  <script src="{{asset('public/back/vendors/js/charts/apexcharts.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('public/back/js/core/app-menu.js')}}"></script>
    <script src="{{asset('public/back/js/core/app.js')}}"></script>
    <script src="{{asset('public/back/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->


<script src="{{asset('public/back/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('public/back/js/scripts.js')}}"></script>
</script>

</body>
<!-- END: Body-->

</html>

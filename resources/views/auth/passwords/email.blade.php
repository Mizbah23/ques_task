
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Chelo | {{$title}}</title>
    
    <link rel="stylesheet" href="{{asset('public/web2/node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/web2/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/web2/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('public/web2/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/web2/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/web2/css/media-queries.css')}}">
    <link rel="stylesheet" href="{{asset('public/web2/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/web2/css/owl.theme.default.min.css')}}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="icon" href="{{asset('public/web/images/logo/logo1.png')}}" type="image/png">
    <style type="text/css">
    body{
        font-family: 'Inter', sans-serif;
        font-size: 15px;
    }
    </style>
    <link rel="icon" href="{{asset('public/web/images/logo/logo1.png')}}" type="image/png">
    
</head>
<body>
    

        <nav class="navbar navbar-expand-lg fixed-top navbar-light myNavbar-class" id="home-navbar"> 
            <div class="container">

                <div class="brand-logo">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('public/web/images/logo/logo1.png')}}" alt="chelo" class="d-inline-block align-top" loading="lazy">
                        Chelo
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto "> <!--mr-auto-->
                        <li class="nav-item mx-3"><a class="nav-link" href="#">Explore</a></li>

                        <li class="nav-item">
                                                    </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                    <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Login</a>
                            </li>
                                                            <li class="nav-item">
                                    <a class="nav-link" href="{{route('register')}}">Register</a>
                                </li>
                                                                            
                    </ul>
                </div>
            </div>
        </nav>

        <header class="container">
                    </header>

        <section>
                    </section>

        <main> <!--class="py-5"-->
            <div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Reset Password</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>

        	<!-- Footer -->
	<hr class="footer-line">
   @include('web.layouts.footer')
        
            
    

    <script src="{{asset('public/web/js/jquery-3.3.1.min.js')}}" defer></script> 
    <script src="{{asset('public/web/js/jquery-migrate-3.0.0.min.js')}}" defer></script>
    <script src="{{asset('public/web/js/app.js')}}" defer></script>
    <script src="{{asset('public/web/js/jquery.backstretch.min.js')}}" defer></script>
    <script src="{{asset('public/web/js/wow.min.js')}}" defer></script> 
    <script src="{{asset('public/web/js/jquery.stickem.js')}}" defer></script>
    <script src="{{asset('public/web/js/scripts.js')}}" defer></script>
</body>
</html>

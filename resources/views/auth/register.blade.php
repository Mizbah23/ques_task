
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
                <div class="card-header">Register</div>
              
                                           

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p class="mb-0">
                            {{ session('success') }}
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
                                         
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                             
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('name')}}</strong>
                                    </span>
                          

                            </div>
                        </div>  <!--name-->

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('username')}}</strong>
                                </span>
                            </div>
                        </div>  <!--username-->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="row justify-content-center my-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="radio" 
                                       name="usertype" id="donor"  required value="donor"  {{ (old('usertype')=='donor')?'checked':'' }} >
                                <label class="form-check-label col-form-label" for="donor" >Donor</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input "  type="radio" 
                                name="usertype" id="school" required value="school"  {{ (old('usertype')=='school')?'checked':'' }}>
                                <label class="form-check-label col-form-label" for="school"  >School</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="radio" 
                                name="usertype" id="other" required value="other"  {{ (old('usertype')=='other')?'checked':'' }}>
                                <label class="form-check-label col-form-label" for="other">Other</label>
                            </div>
                          
                                                    </div>
                        @if(old('usertype')=="school")
                        <div class="form-group row" id="school-types" style="display:flex">
                        @else
                        <div class="form-group row" id="school-types" style="display:none">
                        @endif
                            <label for="type" class="col-md-4 col-form-label text-md-right">School Type</label>
                            <div class="col-md-6">
                                <select name="type" id="type" class="form-control " required> 
                                    <option value="">Select</option>
                                    @foreach($types as $type)
                                    <option value="{{$type->id}}" {{ (old('type')== $type->id)? 'selected':'' }} >{{$type->name}}</option>
                                    @endforeach
                                </select>
                
                                                            </div>
                        </div>
@if(old('usertype')=="school")
<div class="form-group row" id="areas" style="display:flex">
@else
<div class="form-group row" id="areas" style="display:none">
@endif



                            <label for="area" class="col-md-4 col-form-label text-md-right">Area Type</label>
                            <div class="col-md-6">
                                <select name="area" id="area" class="form-control " required> 
                                    
                                    @foreach($areas as $area)
                                    <option value="{{$area->id}}" {{ (old('area')== $area->id)? 'selected':'' }} >{{$area->name}}</option>
                                    @endforeach

                                </select>
                
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
                                

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="confirm_password" type="password" class="form-control  @error('password') is-invalid @enderror" name="confirm_password" required autocomplete="new-password">
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('password')}}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
        
            
    

    <!-- Scripts -->
    <script src="{{asset('public/web/js/jquery-3.3.1.min.js')}}" defer></script> 
    <script src="{{asset('public/web/js/jquery-migrate-3.0.0.min.js')}}" defer></script>
    <script src="{{asset('public/web/js/app.js')}}" defer></script>
    <script src="{{asset('public/web/js/jquery.backstretch.min.js')}}" defer></script>
    <script src="{{asset('public/web/js/wow.min.js')}}" defer></script> 
    <script src="{{asset('public/web/js/jquery.stickem.js')}}" defer></script>
    <script src="{{asset('public/web/js/scripts.js')}}" defer></script>
</body>
</html>

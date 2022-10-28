<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8" />
	<title>Terrenogen  - Personal Property Investment made Public</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="keywords" content="" />
	<meta name="description" content="Satori - IT Startup & Business Service HTML Template" />
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="{{asset('public/front/img/favicon2.png')}}">
	<link href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/front/css/font-awesome.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/front/css/et-line.css')}}" rel="stylesheet" />
	<link href="{{asset('public/front/css/magnific-popup.css')}}" rel="stylesheet" />
	<link href="{{asset('public/front/css/animate.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/front/css/owl.carousel.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/front/css/owl.theme.default.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/front/css/slick.css')}}" rel="stylesheet" />
	<link href="{{asset('public/front/css/slick-theme.css')}}" rel="stylesheet" />
	
	<link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/vendors.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/back/vendors/css/extensions/toastr.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/back/css/plugins/extensions/toastr.css')}}">
	<link href="{{asset('public/front/css/style.css')}}" rel="stylesheet" />
	<link href="{{asset('public/front/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="preloader-inner">
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- End Preloader Area -->
	
	<!-- Start Navbar Area -->
	<nav class="main-index-nav navbar navbar-b navbar-trans fixed-top navbar-expand-lg" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll" href="index.html">
				<img src="{{asset('public/front/img/tere.png')}}" style="max-width: 170px;" class="white-logo" alt="logo">
				<img src="{{asset('public/front/img/tere.png')}}" style="max-width: 170px;" class="black-logo" alt="logo">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span></span>
				<span></span>
				<span></span> 
			</button>
			<div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link js-scroll active" href="#home">Home</a></li>
					<li class="nav-item"><a class="nav-link js-scroll" href="#about">About</a></li>
					<li class="nav-item"><a class="nav-link js-scroll" href="#duty">Duties</a></li>
					<li class="nav-item"><a class="nav-link js-scroll" href="#discover">Services</a></li>
					<li class="nav-item"><a class="nav-link js-scroll" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar Area -->
	
	<!-- Start Home Section -->
	<section id="home" class="home-area home-animation hero-equal-height section-padding">
		<div class="container">
			@foreach($headings as $head)
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="text-left home-content z-index position-relative">
						<h1>{{$head->title}}</h1>
						<p>{!!$head->details!!}
						</p>
						<div class="home-button-box">
							<!-- <a href="#" class="button home-btn-1">Get Started</a> -->
							<a href="#about" class="button home-btn-2 js-scroll">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="home-shape-animation">
			<div class="shape-1">
				<img src="{{asset('public/front/img/shape/1.png')}}" alt="shape image">
			</div>
			<div class="shape-2">
				<img src="{{asset('public/front/img/shape/2.png')}}" alt="shape image">
			</div>
			<div class="shape-3">
				<img src="{{asset('public/front/img/shape/3.png')}}" alt="shape image">
			</div>
			<div class="shape-4">
				<img src="{{asset('public/front/img/shape/4.png')}}" alt="shape image">
			</div>
			<div class="shape-5">
				<img src="{{asset('public/front/img/shape/5.png')}}" alt="shape image">
			</div>
			<div class="shape-6">
				<img src="{{asset('public/front/img/shape/6.png')}}" alt="shape image">
			</div>
			<div class="shape-7">
				<img src="{{asset('public/front/img/shape/3.png')}}" alt="shape image">
			</div>
		</div>
	</section>
	<!-- End Home Section -->


	
	<!-- Start About Section -->

	<section id="about" class="about-area section-padding">
		<div class="container">
			@foreach($abouts as $about)
			<div class="row d-flex align-items-center">
				<div class="col-lg-12 col-md-12 col-sm-12 section-title">
					<h2>{{$about->name}}{{-- About Us --}}</h2>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-image-wrapper">
						<img src="{{asset($about->img)}}" alt="About image">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="about-content">
						<div class="about-content-text">
							<h5>{{$about->subtitle}}{{-- About Our Company --}}</h5> 
								<p> {!!$about->details!!}
								</p>
								<!-- <h2>We Offer Best Creatives IT Solutions & Consulting Firm</h2> -->
								{{-- <p>Our own journey of investment as individuals started more than two decades ago with different challenges and success. We know investing alone will not be as profitable as those who invests as a group while management of properties as an individual will only lead to more headaches than profits.</p>
								<p>Therefore, to overcome the challenges and to maximize rental yield, we:</p>
								<p>1. Spot for good projects by doing due diligence and market survey</p>
								<p>2. Invest as individuals but purchase projects as a group</p>
								<p>3. Maximizing Rental Space through Creative Space Planning</p>
								<p>4. Property Management is done as a Group where we have more control</p>
								<p>5. Letting the projects out in bulk</p>
								<p>6. Expanding the portfolios of our individual investors by ensuring stable rental returns and eventually aim to exit by going into a Real Estate Investment Trust</p> --}}

							<a class="button" href="#duty">Discover More</a>
						</div>
					</div>
				</div>
	
		</div>
		@endforeach
	</div>
	</section>
	<!-- End About Section -->



		<!---Start Our Duty-->
		<section id="duty" class="about-area section-padding">
			<div class="container">
				@foreach($duties as $duty)
				<div class="row d-flex align-items-center">
					<div class="row d-flex align-items-center">
						<div class="col-lg-12 col-md-12 col-sm-12 section-title">
							<h2>{{$duty->name}}</h2>
						</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="about-content">
							<div class="about-content-text">
								<h5>{{$duty->subtitle}}</h5> 
	
	
								<p>{!!$duty->details!!}</p>
								
								
								<a class="button" href="#discover">Discover More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="about-image-wrapper">
							<img src="{{asset($duty->img)}}" alt="About image">
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		</section>
		<!---End Our duty-->



		<section id="discover" class="about-area section-padding">
			<div class="container">
				@foreach($services as $serve)
				<div class="row d-flex align-items-center">
					<div class="row d-flex align-items-center">
						<!-- <div class="col-lg-12 col-md-12 col-sm-12 section-title">
							<h2>We are extremely effective in helping the following type of property investors:</h2>
						</div> -->
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="about-content">
							<div class="about-content-text">
								<h5>{{$serve->title}}:</h5> 
	
	
								<p>{!! $serve->details !!}</p>
								
								
								<a class="button" href="#duty">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		</section>

	
	<!-- Start Contact Section -->
	<section id="contact" class="contact-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="section-title">
						<h5>Get In Touch</h5>
						<h2>Contact us</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-5 col-md-12">
					<div class="row contact-information">
						{{-- @foreach($info as $info) --}}
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="contact-info-title">
								<h3>Contact Info</h3>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="contact-details">
								<h6>Phone:</h6>
								<p>{{$info->phone}}</p>
								<!-- <p>+001 503 777 505</p> -->
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="contact-details">
								<h6>Email:</h6>
								<p>{{$info->email}}</p>
								<!-- <p>contact@example.com</p> -->
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="contact-details">
								<h6>Address:</h6>
								<p>{{$info->address}}</p>
							</div>
						</div>
						{{-- @endforeach --}}
					</div>
				</div>
				<div class="col-lg-7 col-md-12">
				
					<form class="contact-form form" id="contact-form" method="post" enctype="multipart/form-data">
					
						<div class="controls">
						

							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="form-group has-error has-danger">
										<input id="form_name" type="text" name="name" placeholder="Your Name" required="required" />
										 <span class="text-danger">{{ $errors->first('name') }}</span>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="form-group has-error has-danger">
										<input id="form_email" type="email" name="email" placeholder="Your Email" required="required" />
										 <span class="text-danger ">{{ $errors->first('email') }}</span>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group has-error has-danger">
										<input id="form_subject" type="text" name="subject" placeholder="Your Subject" required="required" />
										 <span class="text-danger ">{{ $errors->first('subject') }}</span>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea id="form_message" name="message" placeholder="Your Message" rows="4" required="required"></textarea>
										 <span class="text-danger">{{ $errors->first('message') }}</span>
									</div>
								</div>
								<div class="col-md-12">
									<button type="submit"  class="button">Send Message</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Section -->

	<!-- Start Counter Section -->
	<!-- <section class="counter-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">100</span>
								<span>k</span>
							</h2>
							<h3 class="counter-heading">Complete Projects</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">95</span>
								<span>%</span>
							</h2>
							<h3 class="counter-heading">Of people feel happy</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">500</span>
								<span>+</span>
							</h2>
							<h3 class="counter-heading">Employees Works</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">70</span>
								<span>k+</span>
							</h2>
							<h3 class="counter-heading">5 Star Rating</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Counter Section -->

	<!-- Start Partner Logo Section -->
    <!-- <div class="partner-area pt-70 pb-30">
        <div class="container">
            <div id="partner-carousel" class="partner-carousel owl-carousel owl-theme owl-loaded">
                <div class="partner-item">
                    <img src="assets/img/partner-logo/client-1.png" alt="partner-image">
                </div>
                <div class="partner-item">
                    <img src="assets/img/partner-logo/client-2.png" alt="partner-image">
                </div>
                <div class="partner-item">
                    <img src="assets/img/partner-logo/client-3.png" alt="partner-image">
                </div>
                <div class="partner-item">
                    <img src="assets/img/partner-logo/client-4.png" alt="partner-image">
                </div>
                <div class="partner-item">
                    <img src="assets/img/partner-logo/client-5.png" alt="partner-image">
                </div>
                <div class="partner-item">
                    <img src="assets/img/partner-logo/client-6.png" alt="partner-image">
                </div>
                <div class="partner-item">
                    <img src="assets/img/partner-logo/client-7.png" alt="partner-image">
                </div>
                <div class="partner-item">
                    <img src="assets/img/partner-logo/client-8.png" alt="partner-image">
                </div>
            </div>
        </div>
    </div> -->
	<!-- End Partner Logo Section -->
	
	<!-- Start Footer Section -->
	<footer class="footer-area">
		<div class="footer-top-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 footer-box-item">
						@foreach($headings as $head)
						<div class="footer-content">
							<img src="public/front/img/tere.png" alt="Brand">
							<p>{!!$head->details!!} </p>
							
						</div>
						@endforeach
					</div>
					<div class="col-lg-4 col-md-6 footer-box-item">
						<div class="footer-content mid-content">
							<h3>Usefull Link</h3>
							<ul class="footer-link">
								<li><a href="#about">About Us</a></li>
								<li><a href="#contact">Contact Us</a></li>
								<li><a href="#discover">Our Services</a></li>
								<li><a href="#duty">Our Duties</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 footer-box-item">

						<div class="footer-content">
							
							<h3>Contact Us</h3>
							
							<ul class="footer-link">
								{{-- @foreach($info as $in) --}}
								<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+603 8945 5381"></a>{{$info->phone}}</li>
								<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href=""></a>{{$info->email}}</li>
								<li><i class="fa fa-home" aria-hidden="true"></i>{{$info->address}} 
									</li>
							    {{-- @endforeach --}}
							</ul>
							{{-- <div class="subscribe-form-wrap">
								<form action="#" class="subscribe-form">
									<input type="email" name="email" class="form-input" placeholder="Enter Email">
									<button type="submit" class="submit-btn">Subscribe</button>
								</form>
							</div> --}}
						    
						</div>
							
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-copyright text-center">
							<p>Copyright © {{now()->year}}</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Section -->
	
	<!-- Start Back to Top -->
	<div class="back-to-top">
		<i class="fa fa-caret-up"></i><i class="fa fa-caret-up"></i>
	</div>
	<!-- End Back to Top -->
	
	<!-- Site All Jquery Js -->
	<script src="{{asset('public/front/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('public/front/js/slick.min.js')}}"></script>
	<script src="{{asset('public/front/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/front/js/plugins.js')}}"></script>
	<script src="{{asset('public/front/js/owl.carousel.js')}}"></script>
	<script src="{{asset('public/back/vendors/js/extensions/toastr.min.js')}}"></script>
	<!--Site Main Custom Js-->
	<script src="public/front/js/main.js"></script>
	<script>

toastr.options = {"closeButton": true,"debug": true,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        
</script>

	<script>

		$("#contact-form").on('submit',function(event)
		{
			event.preventDefault();
			var formData = new FormData(this);
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
			

$.ajax({type: 'POST',url: "{{route('form.post')}}",data:formData,dataType:'JSON',contentType: false,cache: false,processData: false,
success:function(data)
{
	toastr[data.type](data.message);

	}});});
   
    </script>




</body>

</html>
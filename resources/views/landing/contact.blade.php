<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; Contact Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<!-- Modernizr JS -->
	<script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
</head>
<body>
	<div class="fh5co-loader"></div>
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row" style="display: flex; align-items: center; justify-content: space-between;">
					<div class="col-xs-2">
						<div id="fh5co-logo">
							<img src="{{ asset('images/logohayaakum-removebg-preview.png') }}" alt="Logo" style="width: 12rem; height: 12rem;">
						</div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
						<li class="active"><a href="{{ route('land.index') }}">Home</a></li>
						<li><a href="services.html">Services</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="{{ route('contactland.index') }}">Contact</a></li>
							@if (Route::has('login'))
								@auth
									<a href="{{ route('logout') }}" class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								@else
									<a href="{{ route('login') }}" class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">Log in</a>
									@if (Route::has('register'))
										<a href="{{ route('register') }}" class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">Register</a>
									@endif
								@endauth
							@endif
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(assets/images/img_bg_3edit.jpg);">
			<div class="overlay"></div>
			<div class="fh5co-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Contact Us</h1>
								<h2>We will help you make a wonderful story</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-push-6 animate-box">
						<h3>Get In Touch</h3>
						<form action="{{ route('contacts.store') }}" method="POST" class="bg-white p-5 contact-form">
							@csrf
							<div class="row form-group">
								<div class="col-md-6">
									<label for="name"> Name</label>
									<input type="text" id="name" name="name" class="form-control" placeholder="Your name">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="email" id="email" name="email" class="form-control" placeholder="Your email address">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write us something"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
						</form>
					</div>

					<div class="col-md-6 d-flex">
					</div>

					<div class="col-md-5 col-md-pull-5 animate-box">
						<div class="fh5co-contact-info">
							<h3>Contact Information</h3>
							<ul>
								<li class="phone"><a href="tel://1234567920">0792668919</a></li>
								<li class="email"><a href="mailto:talaalosili@gmail.com">talaalosili@gmail.com</a></li>
							</ul>
						</div>
						@if (session('success'))
							<div class="alert alert-success" id="success-alert">
								{{ session('success') }}
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>

		<script>
			setTimeout(function () {
				const alert = document.getElementById('success-alert');
				if (alert) {
					alert.style.transition = "opacity 0.5s ease";
					alert.style.opacity = "0";
					setTimeout(() => alert.remove(), 500); 
				}
			}, 3000);
		</script>
		
		<!-- jQuery -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<!-- jQuery Easing -->
		<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
		<!-- Bootstrap -->
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<!-- Waypoints -->
		<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
		<!-- Carousel -->
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<!-- countTo -->
		<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
		<!-- Stellar -->
		<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
		<!-- Magnific Popup -->
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script>
		<!-- Google Map -->
		<!-- Uncomment the following line if you want to use Google Maps API -->
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script> -->
		<!-- Main -->
		<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>

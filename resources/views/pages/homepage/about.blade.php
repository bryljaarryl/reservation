{{--<?php
//include('db.php');
?>--}}
<!DOCTYPE html>
<html lang="en">
<head>
<title>About Tranquilstay</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //for-mobile-apps -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('css/chocolat.css')}}" type="text/css" media="screen">
<link href="{{asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-gn538Mzj+8F/wJtFl5Mz6VJ/bGUgwbQSW26U+QI8Uz6U3V9LG4MEd7bT1Sowc7w6TynQGSxGUzr88RxlyNOFGrA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<!-- header -->
<div class="banner-top">
			{{--<div class="social-bnr-agileits">
				<ul class="social-icons3">
                    <li><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjUo5uvwZ6DAxUQ1jgGHYFKCB8QFnoECAoQAQ&url=https%3A%2F%2Fm.facebook.com%2Fp%2FTATAG-IP-Students-Tourism-Center-61550127272619%2F&usg=AOvVaw3Oh0CmnoURXxn94BVdk96g&opi=89978449" class="fa fa-facebook icon-border facebook"> </a></li>
                </ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">tatagipstudentsfoundation@gmail.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+63)926 178 321</li>
				</ul> 
			</div>
			<div class="clearfix"></div>
		</div>--}}
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">TRANQUILSTAY<p class="logo_w3l_agile_caption">Your One Stop Vacation</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
						<!-- Authentication Links -->
						@guest
							@if (Route::has('login'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}"></a>
								</li>
							@endif

							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}"></a>
								</li>
							@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }}
								</a>

								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</div>
							</li>
						@endguest
							<li class="menu__item"><a href="/home" class="menu__link">Dashboard</a></li>
							<li class="menu__item menu__item--current"><a href="#about" class="menu__link scroll">About</a></li>
							<!-- <li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li> -->
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
							<li class="menu__item"><a href="{{ route('login') }}" class="menu__link scroll">Login</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
</body>    
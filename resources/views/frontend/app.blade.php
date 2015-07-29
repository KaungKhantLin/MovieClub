<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MovieClub MM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<!-- bootstrap -->
	<link href="{{ asset('frontend/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">

	<link href="{{ asset('themes/css/bootstrappage.css') }}" rel="stylesheet"/>

	<!-- global styles -->
	<link href="{{ asset('themes/css/flexslider.css') }}" rel="stylesheet"/>
	<link href="{{ asset('themes/css/main.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" href='http://mmwebfonts.comquas.com/fonts/?font=myanmar3' />

	<script src="{{ asset('themes/js/jquery-1.7.2.min.js') }}"></script>
	<script src="{{ asset('frontend/bootstrap/js/<bootstrap class="min"></bootstrap>.js') }}"></script>
	<script src="{{ asset('themes/js/superfish.js') }}"></script>
	<script src="{{ asset('themes/js/jquery.scrolltotop.js') }}"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
			<![endif]-->

		</head>
		<body>
			<div id="top-bar" class="container">
				<div class="row">

			<div class="span4">

					<form action="/search" method="get" class="navbar-form navbar-left" role="search">
					    <input type="text" id="query" name="query" >
					    <button type="submit" class="btn btn-default">~ Search ~</button>


					</form>

				</div>

				<div class="span8">
					<div id = "menu" class="pull-right">
						<ul class="user-menu">
							<li><a href="{{ url('/auth/register') }}">Theater Owners Register</a></li>
							<li><a href="{{ url('/auth/login') }}">Theater Owners Login</a></li>
							<li><a href="{{ url('/auth/logout') }}">Theater Owners Logout</a></li>
						</ul>
					</div>
				</div>
				</div>


				</div>
			</div>
			<div id="wrapper" class="container">
				<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
						<a href="{{ route('home.index') }}" class="logo pull-left"><img src="{{ asset('/logo/logo.png') }}" class="site_logo" alt=""></a>


				<nav id="menu" class="pull-right">
						<ul>
						<li><a href="{{ route('theratermovies.index') }}">In Theraters</a></li>
							<li><a href="#">International Movies</a>
								<ul>
									<li><a href="{{ route('home.index') }}">Latest Movies</a></li>
									<li><a href="#">Popular Movies</a></li>

								</ul>
							</li>

							<li><a href="#">Myanmar Movie</a>
								<ul>
									<li><a href="#">Latest Moies</a></li>
									<li><a href="#">Popular Movies</a></li>
								</ul>
							</li>

							<li><a href="#">Best Movies</a></li>
							<li><a href="{{ route('ourabout.index') }}">About Us</a></li>

						</ul>
					</nav>
				</div>
			</section>

				{{-- for banner slider  --}}
				<section  class="homepage-slider" id="home-slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<img src="{{ asset('themes/images/carousel/b1.png') }}" alt="" />
								<div class="intro">
									<h1>MovieClub MM</h1>
									<p><span>Latest movies information and reviews </span></p>

								</div>
							</li>
							<li>
								<img src="{{ asset('themes/images/carousel/b2.png') }}" alt="" />
							</li>
							{{-- <li>
								<img src="{{ asset('themes/images/carousel/b3.jpg') }}" alt="" />
							</li>
							<li>
								<img src="{{ asset('themes/images/carousel/b4.jpg') }}" alt="" />
							</li>
 --}}



						<li>
								<img src="{{ asset('themes/images/carousel/b5.jpg') }}" alt="" />
							</li>
							<li>
								<img src="{{ asset('themes/images/carousel/b6.jpg') }}" alt="" />
							</li>
							<li>
								<img src="{{ asset('themes/images/carousel/b7.jpg') }}" alt="" />
							</li>

							<li>
								<img src="{{ asset('themes/images/carousel/b8.jpg') }}" alt="" />
							</li>
		</ul>
					</div>
				</section>

				<br/>
				<br/>


{{-- Start section of movie list --}}
					@yield('movielist')
{{-- end of movie list --}}




				{{-- <section class="our_client">
					<h4 class="title"><span class="text">Sponser Company and Theraters</span></h4>
					<div class="row">
						<div class="span2">
							<a href="#"><img alt="" src="{{ asset('themes/images/clients/14.png') }}"></a>
						</div>
						<div class="span2">
							<a href="#"><img alt="" src="{{ asset('themes/images/clients/35.png') }}"></a>
						</div>
						<div class="span2">
							<a href="#"><img alt="" src="{{ asset('themes/images/clients/1.png') }}"></a>
						</div>
						<div class="span2">
							<a href="#"><img alt="" src="{{ asset('themes/images/clients/2.png') }}"></a>
						</div>
						<div class="span2">
							<a href="#"><img alt="" src="{{ asset('themes/images/clients/3.png') }}"></a>
						</div>
						<div class="span2">
							<a href="#"><img alt="" src="{{ asset('themes/images/clients/4.png') }}"></a>
						</div>
					</div>
				</section> --}}
				<hr>
				<hr>
				<section id="footer-bar">
					<div class="row">
						<div class="span3">

							<ul class="nav">
									<br>
									<br>
								<li><a href="{{ route('home.index') }}">Homepage</a></li>
								<li><a href="{{ route('theratermovies.index') }}">In TheraterMovies</a></li>

							</ul>
						</div>
						<div class="span3">

							<ul class="nav">
							<br>
							<br>
								<li><a href="{{ route('ourabout.index') }}">About Us</a></li>
								<li><a href="https://www.facebook.com/movieclubmm" target="_blank">Facebook</a></li>

							</ul>
						</div>
						<div class="span5">
							<p class="logo"><img src="{{ asset('logo/logo.png') }}" class="site_logo" alt=""></p>
							<p>This site is for international latest movies update ,review and therater show movie in Myanmar.
							Now ,this site version is 1.0. Please , advice us for this site requirements to our facebook account ,page, and gmail.
							(Contact address is in About Page.)</p>
							<br/>

						</div>
					</div>
				</section>
				<section id="copyright">
					<span>This site is created by PROWAY Creative Team. Site theme is Credit to 2013 bootstrappage template.</span>
				</section>
			</div>
			<script src="{{ asset('themes/js/common.js') }}"></script>
			<script src="{{ asset('themes/js/jquery.flexslider-min.js') }}"></script>
			<script type="text/javascript">
				$(function() {
					$(document).ready(function() {
						$('.flexslider').flexslider({
							animation: "fade",
							slideshowSpeed: 4000,
							animationSpeed: 600,
							controlNav: false,
							directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
					});
				});
			</script>
		</body>
		</html>
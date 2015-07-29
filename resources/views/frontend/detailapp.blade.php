
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MovieClub MM</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->

		<!-- bootstrap -->

	    <link href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('frontend/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
		<link href="{{ asset('themes/css/bootstrappage.css') }}" rel="stylesheet"/>

		<!-- global styles -->
		<link href="{{ asset('themes/css/main.css') }}" rel="stylesheet"/>
		<link href="{{ asset('themes/css/jquery.fancybox.css') }}" rel="stylesheet"/>

		<!-- for youtube -->

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
         <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />


		<!-- scripts -->
		<script src="{{ asset('themes/js/jquery-1.7.2.min.js') }}"></script>
		<script src="{{ asset('frontend/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('themes/js/superfish.js') }}"></script>
		<script src="{{ asset('themes/js/jquery.scrolltotop.js') }}"></script>
		<script src="{{ asset('themes/js/jquery.fancybox.js') }}"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>
		<div id="top-bar" class="container">

				<div class="row">
					<form action="/search" method="get" class="navbar-form navbar-left" role="search">
					  <div class="form-group">
					    <input type="text" id="query" name="query" class="form-control" placeholder="Search">
					  </div>
					  <button type="submit" class="btn btn-default">~ Search ~</button>
					</form>
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
			<section class="header_text sub">
			<img class="pageBanner" src="{{ asset('themes/images/shutter.jpg') }}" alt="New products" >

			</section>

{{-- for main content --}}
			@yield('main_content')
			{{-- for main content --}}
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
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})


				$('#myCarousel-2').carousel({
                    interval: 2500
                });
			});
		</script>
    </body>
</html>
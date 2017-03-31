
<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="Transfers - Private Transport and Car Hire HTML Template" />
	<meta name="description" content="Transfers - Private Transport and Car Hire HTML Template">
	<meta name="author" content="themeenergy.com">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	{{ Html::style('css/theme-pink.css') }}
	{{ Html::style('css/style.css') }}
	{{ Html::style('css/animate.css') }}
	
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/favicon.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  </head>
 
  <body class="home">
<header class="header" role="banner">
<div class="wrap">
				<!-- Logo -->
				<div class="logo">
					<a href="index.html" title="Transfers"><img src="images/transfers.jpg" alt="Transfers" /></a>
				</div>
				<!-- //Logo -->
				
				<!-- Main Nav -->
				<nav role="navigation" class="main-nav">
					<ul>
						<li class="active"><a href="index.html" title="">Home</a></li>
						<li><a href="destinations.html" title="Destinations">Destinations</a>
							<ul>
								<li><a href="destination-single.html" title="Single destination">Single destination</a></li>
								<li><a href="destination-micro.html" title="Micro destination">Micro destination</a></li>
							</ul>
						</li>
						<li><a href="tailor-made.html" title="Tailor made">Tailor made</a></li>
						<li><a href="blog.html" title="Blog">Blog</a>
							<ul>
								<li><a href="blog.html" title="Post">Blog list</a></li>
								<li><a href="blog2.html" title="Post">Blog grid</a></li>
								<li><a href="blog-single.html" title="Post">Post</a></li>
							</ul>
						</li>
						<li><a href="contact.html" title="Contact">Contact</a></li>
						<li><a href="#" title="Pages">Pages</a>
							<div>
								<div class="one-fourth">
									<h2>Common</h2>
									<ul>
										<li><a href="left-sidebar-page.html" title="Left sidebar page">Left sidebar page</a></li>
										<li><a href="right-sidebar-page.html" title="Right sidebar page">Right sidebar page</a></li>
										<li><a href="both-sidebar-page.html" title="Both sidebars page">Both sidebars page</a></li>
										<li><a href="full-width-page.html" title="Full width page">Full width page</a></li>
									</ul>
								</div>
								<div class="one-fourth">
									<h2>Booking</h2>
									<ul>
										<li><a href="search-results.html" title="Search results page">Search results page</a></li>
										<li><a href="booking-step1.html" title="Booking step 1">Booking step 1</a></li>
										<li><a href="booking-step2.html" title="Booking step 2">Booking step 2</a></li>
										<li><a href="booking-step3.html" title="Booking step 3">Booking step 3</a></li>
									</ul>
								</div>
								<div class="one-fourth">
									<h2>Corporate</h2>
									<ul>
										<li><a href="about.html" title="About u">About us</a></li>
										<li><a href="services.html" title="Services">Services</a></li>
										<li><a href="faq.html" title="Faq">Faq</a></li>
										<li><a href="contact.html" title="Contact">Contact</a></li>
									</ul>
								</div>
								<div class="one-fourth">
									<h2>Special</h2>
									<ul>
				
										<li><a href="{{ url('/login') }}" title="Login">Login</a></li>
										<li><a href="{{ url('register/create') }}" title="Register">Register</a></li>
										<li><a href="account.html" title="My account">My account</a></li>
										<li><a href="error.html" title="404 error">404 error</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="http://themeforest.net/item/transfers-transport-and-car-hire-html-template/9366018?ref=themeenergy" title="Purchase">Purchase</a></li>
					</ul>
				</nav>
				<!-- //Main Nav -->
			</div>
</header>
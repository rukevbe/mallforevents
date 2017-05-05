
<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="vendor - vendor listing" />
	<meta name="description" content="vendor listing">
	<meta name="author" content="smartvendor">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	{{ Html::style('css/theme-dblue.css') }}
	{{ Html::style('css/style.css') }}
	{{ Html::style('css/animate.css') }}
	
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/favicon.fw.ico" />

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
					<a href="index.html" title="Transfers"><img src="images/smartvendor.jpg" alt="smartvendor" /></a>
				</div>
				<!-- //Logo -->
				
				<!-- Main Nav -->
				<nav role="navigation" class="main-nav">
					<ul>
						<li class="active"><a href="/" title="">Home</a></li>
						<li><a href="#" title="Destinations">Events</a>
							<ul>
								<li><a href="#" title="Single destination">Seminar</a></li>
								<li><a href="#" title="Micro destination">weekend hangout</a></li>
								<li><a href="#" title="Micro destination">comedy shows</a></li>
								<li><a href="#" title="Micro destination">Exhibitions</a></li>
							</ul>
						</li>
						<!--<li><a href="tailor-made.html" title="Tailor made">Tailor made</a></li>-->
						<li><a href="#" title="Blog">Blog</a>	
						</li>
						<li><a href="contact.html" title="Contact">Contact</a></li>
						<li><a href="{{ url('/login') }}" title="Login">login</a>	
						</li>
						<li><a href="{{ url('register') }}" title="Register">Register</a></li>
					</ul>
				</nav>
				<!-- //Main Nav -->
			</div>
</header>
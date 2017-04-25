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
	{{ Html::style('css/responsive-tables.css') }}
	<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>-->
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
						<li class="active"><a href="{{ url('/') }}" title="">Home</a></li>
						
						<li><a href="tailor-made.html" title="Tailor made">Tailor made</a></li>
						
						<li><a href="contact.html" title="Contact">Contact</a></li>
						<li><a href="#" title="Pages">Messages</a>	
						</li>
						
						<li><a href="" title="welcome">welcome {{ Auth::user()->first_name }} </a>
                          <ul>
								<li><a href="{{ url('/logout') }}" title="logout">logout</a></li>
							
							</ul>
						</li>
                       
					</ul>
				</nav>
				<!-- //Main Nav -->
			</div>
</header>
	<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>My account</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index.html" title="Home">Home</a></li>
							<li>My account</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		
		
		<div class="wrap">
			<div class="row">
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar left">
					<!-- Widget -->
					
					<div class="widget">
						<ul class="categories">
							<li class="active"><a href="/dashboard">Back</a></li>
						

						</ul>
					</div>
					
					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
				
				<!--- Content -->
				<div class="three-fourth content">
					<!-- Tab -->
					<article class="single" id="tab1">
						<div class="box">
							<h2>General settings</h2>
							<main class="main" role="main">
		<!-- Search -->
		
		<!-- //Search -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
				
                   
				</div>
				<!--- //Content -->
				
				<div class="three-fourth">
            
		         
					<div class="box">
							<h2>update a list</h2>
							
                        
				@include ('common.errors')

				{!! Form::model($listings, array('route'=> array('vendorlistings.update',$listings->id),'method'=>'PUT', 'files'=>'true')) !!} 
					  
							<fieldset>
								<div class="f-row">
									<div class="one-half">

						{!! Form::label('title','title') !!} 
                        {!! Form::text('title',null, array('class'=>'form-control')) !!} 
									</div>
									<div class="one-half">
						{!! Form::label('listing_desc','Description') !!} 
                        {!! Form::textarea('listing_desc',null, array('class'=>'form-control')) !!} 
									</div>
								</div>
						<div class="f-row">
									<div class="one-half">
						{!! Form::label('phone number','Phone number') !!} 
                        {!! Form::number('phone_number',null, array('class'=>'form-control')) !!} 
									</div>
								</div>
								<div class="f-row">
									<div class="one-half">

						
									</div>
									<div class="one-half">
						{!! Form::label('city','City') !!} 
                        {!! Form::text('city',null, array('class'=>'form-control')) !!} 
									</div>
								</div>

							<div class="f-row">
									<div class="one-half">
						{!! Form::label('min price','Min-price') !!} 
                        {!! Form::text('min_price',null, array('class'=>'form-control')) !!}
									</div>
									<div class="one-half">
						{!! Form::label('max price','Max-price') !!} 
                        {!! Form::text('max_price',null, array('class'=>'form-control')) !!} 
									</div>
								</div>
						<div class="f-row">
									<div class="f-row">
									<div class="one-half">
						
									</div>
									<div class="one-half">
						<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
									</div>
								</div>
						
									<div class="one-half">
						{!! Form::label('pix_upload','Upload photo') !!} 
                        {!! Form::file('pix_upload',null, array('class'=>'form-control')) !!} 
									</div>
								</div<div class="f-row">
								<div class="full-width">
						{!! Form::submit('Update' , array('class'=>'btn color medium full')) !!} 
                        {!! Form::close() !!} 
							<!--<input type="submit" value="Create an account" class="btn color medium full" />-->
								</div>
							</div>
						


								
								
							</fieldset>
							</form>
						</div>
						
				</div>
				
				<!--- Sidebar -->
		
				<!--- //Sidebar -->
			</div>
		</div>
	</main>
						</div>
						
					</article>
					<!-- //Tab -->
					
					<!-- Tab -->
				
					<!-- //Tab -->
					
				</div>
				<!--- //Content -->
			</div>
		</div>
	</main>
	<!-- //Main -->
	
	<!-- Footer -->
	<footer class="footer black" role="contentinfo">
		<div class="wrap">
			<div class="row">
				<!-- Column -->
				<article class="one-half">
					<h6>About us</h6>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Need help?</h6>
					<p>Contact us via phone or email:</p>
					<p class="contact-data"><span class="ico phone"></span> +1 555 555 555</p>
					<p class="contact-data"><span class="ico email"></span> <a href="mailto:help@transfers.com">help@transfers.com</a></p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Follow us</h6>
					<ul class="social">
						<li class="facebook"><a href="#" title="facebook">facebook</a></li>
						<li class="twitter"><a href="#" title="twitter">twitter</a></li>
						<li class="gplus"><a href="#" title="gplus">google plus</a></li>
						<li class="linkedin"><a href="#" title="linkedin">linkedin</a></li>
						<li class="vimeo"><a href="#" title="vimeo">vimeo</a></li>
						<li class="pinterest"><a href="#" title="pinterest">pinterest</a></li>
					</ul>
				</article>
				<!-- //Column -->
			</div>
			
			<div class="copy">
				<p>Copyright 2014, Themeenergy. All rights reserved. </p>
				
				<nav role="navigation" class="foot-nav">
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#" title="Blog">Blog</a></li>
						<li><a href="#" title="About us">About us</a></li>
						<li><a href="#" title="Contact us">Contact us</a></li>
						<li><a href="#" title="Terms of use">Terms of use</a></li>
						<li><a href="#" title="Help">Help</a></li>
						<li><a href="#" title="For partners">For partners</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
	<!-- //Footer -->
	
	<!-- Preloader -->
	
	<!-- //Preloader -->

    <!-- jQuery -->
   
	
	<!-- TEMPLATE STYLES -->
	
	<script src="js/styler.js"></script>
  </body>
</html>
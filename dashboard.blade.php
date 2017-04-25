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
							<li class="active"><a href="#tab1">view listing</a></li>
							<li class=""><a href="#tab2">create listing</a></li>
							<li class=""><a href="#tab3">who viewed</a></li>

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
				 @if(Session::has('delete_listing'))
                        <div class="alert alert-success"><em>{!! session('delete_listing') !!}</em>
                        <button type="button" class="close" data-dismiss="alert" arial-label="close">
                        <span aria-hidden="true">&times</span>
                        </button>
                        </div>
                        @endif 
                   @if(Session::has('post_update'))
                        <div class="alert alert-success"><em>{!! session('post_update') !!}</em>
                        <button type="button" class="close" data-dismiss="alert" arial-label="close">
                        <span aria-hidden="true">&times</span>
                        </button>
                        </div>
                        @endif 
		         
					<form>
						<table class="data responsive">
							<tr>
								<th>Image</th>
								<th>title</th>
								<th>description</th>
								<th>category</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							
							@if ($vendorlistings->count() > 0)

							@foreach($vendorlistings as $listing)
							<tr>
								<td>{!! Html::image('/img/post/'.$listing->pix_upload,null,array('style'=>'width:50px; height: 50px;')) !!}</td>
								<td>{{ $listing->title }}</td>
								<td>{{ $listing->listing_desc }}</td>
								<td>{{ $listing->category->name }}</td>
								<td><a href="{!! url('vendorlisting/'.$listing->id.'/edit')!!}">Edit</a></td>
								<td>
								   <a href="{{ url('/vendorlisting/delete')}}/{{ $listing->id}}">Delete</a>
								</td>
							</tr>
                                   
							@endforeach
                         
						</table>
						@endif
							
							
						<div class="actions">
						  
			 {{ $vendorlistings->links() }}
						</div>
					</form>
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
				<article class="single" id="tab2">

	
						<div class="box">
							<h2>Create a list</h2>
							 @if(Session::has('post_create'))
                        <div class="alert alert-success"><em>{!! session('post_create') !!}</em>
                        <button type="button" class="close" data-dismiss="alert" arial-label="close">
                        <span aria-hidden="true">&times</span>
                        </button>
                        </div>
                        @endif 
							 @include ('common.errors')
					{!! Form::open( array('url'=>'vendorlisting','files'=>'true')) !!} 
							<fieldset>
								<div class="f-row">
									<div class="one-half">
						{!! Form::label('title','title') !!} 
                        {!! Form::text('title',null, array('class'=>'form-control','placeholder'=>'place the title of listing here')) !!} 
									</div>
									<div class="one-half">
						{!! Form::label('listing_desc','Description') !!} 
                        {!! Form::textarea('listing_desc',null, array('class'=>'form-control','placeholder'=>'short description about your listing')) !!} 
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

						{!! Form::label('state','state') !!} 
                        {!! Form::select('state_id',$states, array('class'=>'form-control')) !!}
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
						{!! Form::label('category_id','Category') !!} 
                        {!! Form::select('category_id',$categories, array('class'=>'form-control')) !!}
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
						{!! Form::submit('Create Listing' , array('class'=>'btn color medium full')) !!} 
                        {!! Form::close() !!} 
							<!--<input type="submit" value="Create an account" class="btn color medium full" />-->
								</div>
							</div>
						


								
								
							</fieldset>
							</form>
						</div>
						
					</article>
					<!-- //Tab -->
					<article class="single" id="tab3">
						<div class="box">
							<h2>General settings</h2>
							<main class="main" role="main">
		<!-- Search -->
		
		<!-- //Search -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
					<h2>Who viewed my listing</h2>
					<p> </p>
				</div>
				<!--- //Content -->
				
				<div class="three-fourth">
					nothing here for now
				</div>
				
				<!--- Sidebar -->
		
				<!--- //Sidebar -->
			</div>
		</div>
	</main>
						</div>
						
					</article>
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
	<div class="preloader">
		<div id="followingBallsG">
			<div id="followingBallsG_1" class="followingBallsG"></div>
			<div id="followingBallsG_2" class="followingBallsG"></div>
			<div id="followingBallsG_3" class="followingBallsG"></div>
			<div id="followingBallsG_4" class="followingBallsG"></div>
		</div>
	</div>
	<!-- //Preloader -->

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/scripts.js"></script>
	<script>
		$(document).ready(function () {
			$('.single').hide().first().show();
			$('.categories li:first').addClass('active');

			$('.categories a').on('click', function (e) {
				e.preventDefault();
				$(this).closest('li').addClass('active').siblings().removeClass('active');
				$($(this).attr('href')).show().siblings('.single').hide();
			});

			var hash = $.trim( window.location.hash );
			if (hash) $('.categories a[href$="'+hash+'"]').trigger('click');
		});
	</script>
	
	<!-- TEMPLATE STYLES -->
	
	<script src="js/styler.js"></script>
  </body>
</html>
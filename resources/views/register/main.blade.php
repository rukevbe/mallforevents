@include('webparts/header')
	<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Register</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index.html" title="Home">Home</a></li>
							<li>Register</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		 @yield('form')
	
	</main>
	<!-- //Main -->
	
	<!-- Footer -->
	@include('webparts/footer')
	<!-- //Footer -->
	
	<!-- Preloader -->
	@include('webparts/preloaders')
	<!-- //Preloader -->

    <!-- jQuery -->
     {{ Html::script('js/jquery.min.js') }}
     {{ Html::script('js/jquery.uniform.min.js') }}
     {{ Html::script('js/jquery.datetimepicker.js') }}
     {{ Html::script('js/jquery.slicknav.min.js') }}
     {{ Html::script('js/wow.min.js') }}
     {{ Html::script('js/search.js') }}
     {{ Html::script('js/scripts.js') }}
   <!--javascript for password validation-->
  
   
	
  </body>
</html>
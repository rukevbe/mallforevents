 @include('webparts/header')
	
	<!-- Main -->
	<main class="main" role="main">
		<!-- Search -->
		
		<!-- Intro -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					
					<nav role="navigation" class="breadcrumbs">
						<ul>
							
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Intro -->
		
		<!-- Search -->
		@include('webparts/search')
		<!-- //Search -->
		
		<!-- Services iconic -->
		
		@include('webparts/query')
		<!-- //Services iconic -->
		
		<!-- Call to action -->
		
		<!-- //Call to action -->
		
		<!-- Services -->
	  
		<!-- //Services -->
		
		<!-- Testimonials -->
		
		<!-- //Testimonials -->
		
		
		
		<!-- Call to action -->
		@include('webparts/calltoaction2')
		<!-- //Call to action -->
	
	</main>
	<!-- //Main -->
	
	<!-- Footer -->
	@include('webparts/footer')
		
		<!-- //Header -->
	
	<!-- Main -->
	
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
	
  </body>
</html>
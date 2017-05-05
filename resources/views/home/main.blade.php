
		<!-- Header -->
	   
 @include('webparts/header')
	 
	
<main class="main" role="main">
		<!-- Intro -->
		@include('webparts/intro')
		<!-- //Intro -->
		
		<!-- Search -->
		@include('webparts/search')
		<!-- //Search -->
		
		<!-- Services iconic -->
		@include('webparts/serviceiconic')
		
		<!-- //Services iconic -->
		
		<!-- Call to action -->
		{{--@include('webparts/calltoaction')--}}
		<!-- //Call to action -->
		
		<!-- Services -->
	   {{--@include('webparts/services')--}}
		<!-- //Services -->
		
		<!-- Testimonials -->
		{{--@include('webparts/testimonials')--}}
		<!-- //Testimonials -->
		{{--@include('webparts/partners')--}}
		
		
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
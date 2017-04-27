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
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
					<h2>Get the best vendors for your event</h2>
					
					<div class="results">
						<!-- Item -->
						@if (count($vendorlist["data"]) > 0)
						@foreach($vendorlist["data"] as $list)
						<article class="result">
							<div class="one-fourth heightfix">{!! Html::image('/img/post/'.$list["pix_upload"],null,array('style'=>'width:300px; height: 200px;')) !!}</div>
							<div class="one-half heightfix">
								<h3>{{ $list["title"] }}<a href="javascript:void(0)" class="trigger color" title="Read more">?</a></h3>
								<ul>
									<li>
										<span class="ico people"></span>
										<p>{{$list["username"]}}</p>
									</li>
									<li>
										<span class="ico phone"></span>
										{{ $list["phone_number"] }}
									</li>
									<li>
										{{ $list["city"] }}
									</li>
								</ul>
							</div>

							<div class="one-fourth heightfix">
								<div>
									<div class="price">{{ $list["min_price"] }}-<br>{{ $list["max_price"] }} <small>NGN</small></div>
									<span class="meta">negotiable</span>
									<a href="#" class="btn grey large">message</a>
								</div>
							</div>
							<div class="full-width information">	
								<a href="javascript:void(0)" class="close color" title="Close">x</a>
								<p>{{ $list["listing_desc"] }}</p>
						@endforeach
						@else
						NO RESULT FOUND FOR THIS SEARCH
						@endif

						<!-- //Item -->
						
						<!-- Item -->
						
						<!-- //Item -->
						
						<!-- Item -->
						
						<!-- //Item -->
						
						<!-- Item -->
						
						<!-- //Item -->
						
						<!-- Item -->
						 
						<!-- //Item -->
					</div>
					{{ $vendorlist1->links() }}
				
					
				</div>
				<!--- //Content -->
			</div>

		</div>

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
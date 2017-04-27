<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
					<h2>Get the best vendors for your event</h2>
					
					<div class="results">
						<!-- Item -->
						@foreach($vendorlist as $list)
						<article class="result">
							<div class="one-fourth heightfix">{!! Html::image('/img/post/'.$list->pix_upload,null,array('style'=>'width:50px; height: 50px;')) !!}</div>
							<div class="one-half heightfix">
								<h3>Private car <a href="javascript:void(0)" class="trigger color" title="Read more">?</a></h3>
								<ul>
									<li>
										<span class="ico people"></span>
										<p>{{ $list->users->first_name }}</p>
									</li>
									<li>
										<span class="ico luggage"></span>
										{{ $list->phone_number }}
									</li>
									<li>
										<span class="ico time"></span>
										<p>Estimated time <br /><strong>50 mins</strong></p>
									</li>
								</ul>
							</div>
							<div class="one-fourth heightfix">
								<div>
									<div class="price">130,00 <small>USD</small></div>
									<span class="meta">per passenger</span>
									<a href="booking-step1.html" class="btn grey large">select</a>
								</div>
							</div>
							<div class="full-width information">	
								<a href="javascript:void(0)" class="close color" title="Close">x</a>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							</div>
						</article>
						@endforeach
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
					
					
					
				</div>
				<!--- //Content -->
			</div>
		</div>
<?php get_header() ?>
	<!-- TOP SLIDES -->
	<div class="top-baner swiper-animate arrows first-swiper">
			<div class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
				<div class="swiper-wrapper">
					<div class="swiper-slide active" data-val="0"> 
					  <div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(<?php echo get_template_directory_uri() ?>/img/home_9/slide_1.jpg)">
							</div>
					  </div>
						<div class="vertical-align">
							<div class="container">
								<div class="row">
										<div class="col-md-12">
											<div class="main-title style-1 vert-title">
												<div class="top-weather-info delay-1">
													<img src="<?php echo get_template_directory_uri() ?>/img/home_9/slide_icon.png" alt="">
												</div>
												<h1 class="color-white delay-1">amazing cruises</h1>
												<h3 class="person_price color-white delay-1">more then <strong>10 000</strong> cruises worldwide</h3>
												<p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum. Lorem ipsum dolor sit.</p>
												<div class="row">
													<div class="col-xs-12 col-sm-6">
														<a href="#" class="c-button b-60 bg-blue-3 hv-transparent delay-2 fr"><img src="<?php echo get_template_directory_uri() ?>/img/loc_icon.png" alt=""><span>view our tours</span></a>
													</div>
													<div class="col-xs-12 col-sm-6">
														<a href="#" class="c-button b-60 bg-tr-1 hv-blue-3-f delay-2 fl"><span>view hot propose</span></a>
													</div>
												</div>
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>    
				<div class="pagination pagination-hidden poin-style-1"></div>
			</div>
			<div class="arrow-wrapp m-200 arr-s-7">
				<div class="cont-1170">
					<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
					<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
				</div>
			</div>
	</div>
	<!-- /TOP SLIDES -->

	<!-- HOT TOURS -->
	<div class="main-wraper padd-90">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 mx-auto pt-3">
					<div class="second-title">
						<br>
						<h2>TOP BOOKED TOUR 2019</h2>
						<p class="color-grey">Here're some Sanna Tour's most-booked tours in 2019</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="top-baner arrows">
					<div class="swiper-container offers-slider" data-autoplay="5000" data-loop="1" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
						<div class="swiper-wrapper">
							<?php
								$tours = new WP_Query( array(
										'post_type'   => 'tour',
									)
								);
								if( $tours->have_posts() ) :
									while( $tours->have_posts() ) :
										$tours->the_post();
										get_template_part( 'template-parts/body/content', 'tours-hot' ); 
									endwhile;
									wp_reset_postdata();
								else :
									get_template_part( 'template-parts/content', 'none' ); 
								endif;
							?>
						</div>
						<div class="pagination  poin-style-1 pagination-hidden"></div>
					</div>
					<div class="swiper-arrow-left offers-arrow color-2"><span class="fa fa-angle-left"></span></div>
					<div class="swiper-arrow-right offers-arrow color-2"><span class="fa fa-angle-right"></span></div>
				</div>
			</div>			
		</div>
	</div>
	<div class="top-baner arrows">
     	<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="tour-slide-2">
		    <div class="swiper-wrapper">
			  	<div class="swiper-slide">
			  		<img class="center-image" src="<?php echo get_template_directory_uri() ?>/img/home_9/bg_1.jpg" alt="">
						<div class="slider-tour style-2 padd-100">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-10 col-sm-offset-1 mx-auto">
				      	 	    	<h3><strong>from $960</strong> / person</h3>
									<div class="rate-wrap clearfix">
				          	          <div class="rate">
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
									  </div>
								      <i>485 Rewies</i> 
			                       	</div>
									<h2>Princess World Cruise vacation</h2>
									<div class="tour-info-line clearfix">
										<div class="tour-info">
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/calendar_icon.png" alt="">
								  	 		<span class="font-style-2 color-white">July <strong>19th 2015</strong></span>
								  	 	</div>
										<div class="tour-info">
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/loc_icon_small.png" alt="">
								  	 		<span class="font-style-2 color-white">alaska</span>
								  	 	</div>						
									</div>
									<a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>view more</span></a>
									<h4>inna lunoe</h4>
									<p class="color-white-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
								</div>
							</div>							
						</div>
	      	        </div>
			  	</div>
			  	<div class="swiper-slide">
			  		<img class="center-image" src="<?php echo get_template_directory_uri() ?>/img/home_9/bg_2.jpg" alt="">
					<div class="slider-tour style-2 padd-100">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-10 col-sm-offset-1 mx-auto">
				      	 	    	<h3><strong>from $960</strong> / person</h3>
									<div class="rate-wrap clearfix">
				          	          <div class="rate">
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
									  </div>
								      <i>485 Rewies</i> 
			                       	</div>
									<h2>Princess World Cruise vacation</h2>
									<div class="tour-info-line clearfix">
										<div class="tour-info">
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/calendar_icon.png" alt="">
								  	 		<span class="font-style-2 color-white">July <strong>19th 2015</strong></span>
								  	 	</div>
										<div class="tour-info">
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/loc_icon_small.png" alt="">
								  	 		<span class="font-style-2 color-white">alaska</span>
								  	 	</div>						
									</div>
									<a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>view more</span></a>
									<h4>inna lunoe</h4>
									<p class="color-white-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
								</div>
							</div>							
						</div>
	      	        </div>
			  	</div>
			  	<div class="swiper-slide">
			  		<img class="center-image" src="<?php echo get_template_directory_uri() ?>/img/home_9/bg_3.jpg" alt="">
					<div class="slider-tour style-2 padd-100">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-10 col-sm-offset-1 mx-auto">
				      	 	    	<h3><strong>from $960</strong> / person</h3>
									<div class="rate-wrap clearfix">
				          	          <div class="rate">
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
										<span class="fas fa-star color-yellow"></span>
									  </div>
								      <i>485 Rewies</i> 
			                       	</div>
									<h2>Princess World Cruise vacation</h2>
									<div class="tour-info-line clearfix">
										<div class="tour-info">
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/calendar_icon.png" alt="">
								  	 		<span class="font-style-2 color-white">July <strong>19th 2015</strong></span>
								  	 	</div>
										<div class="tour-info">
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/loc_icon_small.png" alt="">
								  	 		<span class="font-style-2 color-white">alaska</span>
								  	 	</div>						
									</div>
									<a href="#" class="c-button b-40 bg-blue-3 hv-transparent"><span>view more</span></a>
									<h4>inna lunoe</h4>
									<p class="color-white-light">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
								</div>
							</div>							
						</div>
	      	        </div>
			  	</div>			  				  	
			</div>
			<div class="pagination pagination-hidden poin-style-1"></div>
		</div>
        <div class="arrow-wrapp arr-s-7">
			<div class="cont-1170">
				<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
				<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
			</div>
		</div>
  </div>
	<!-- /HOT TOURS -->

	<!-- HOT PLACES -->
	<div class="main-wraper padd-70-70">
		<div class="container">
			<div class="filter style-2">
					<ul class="filter-nav">
							<li class="selected"><a href="#all" data-filter="*">all</a></li>
							<li><a href="#recommended" data-filter=".recommended">recommended</a></li>
							<li><a href="#special" data-filter=".special">special</a></li>
							<li><a href="#most" data-filter=".most">most-traveled</a></li>
							<li><a href="#deal" data-filter=".deal">deal</a></li>
					</ul>
			</div>
			<div class="filter-content row">
				<div class="grid-sizer col-mob-12 col-xs-6 col-sm-2"></div>
					<?php
						$places = new WP_Query( array(
								'post_type'   => 'place',
							)
						);
						if( $places->have_posts() ) :
							while( $places->have_posts() ) :
								$places->the_post();
								get_template_part( 'template-parts/body/content', 'places-hot' ); 
							endwhile;
							wp_reset_postdata();
						else :
							get_template_part( 'template-parts/content', 'none' ); 
						endif;
					?>
			</div>
		</div>        		
	</div>
	<!-- /HOT PLACES -->

	<!-- HOTEL-ITEM-->
	<div class="main-wraper  bg-grey-2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 mx-auto">
					<div class="second-title">
						<br>
						<h4 class="subtitle color-dr-blue-2">Check out more</h4>
						<h2 class="color-dark-2">OUR OTHER SERVICES</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="icon-block style-3 bg-white">
						<div class="icon-price color-dark-2">cruise from <strong>$750</strong></div>
						<img class="icon-img" src="<?php echo get_template_directory_uri() ?>/img/home_9/icon_1.jpg" alt="">
						<div class="rate-wrap clearfix">
	          	          	<div class="rate">
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
						  	</div>
					      	<i>485 Rewies</i> 
                       	</div>						
						<h5 class="icon-title color-dark-2">Carnival Cruise Lines</h5>
						<div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium. Donec fermentum.</div>
						<a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>view more</span></a>
					</div>				
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="icon-block style-3 bg-white">
						<div class="icon-price color-dark-2">cruise from <strong>$750</strong></div>
						<img class="icon-img" src="<?php echo get_template_directory_uri() ?>/img/home_9/icon_2.jpg" alt="">
						<div class="rate-wrap clearfix">
	          	          	<div class="rate">
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
						  	</div>
					      	<i>485 Rewies</i> 
                       	</div>						
						<h5 class="icon-title color-dark-2">Transatlantic Lines</h5>
						<div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium. Donec fermentum.</div>
						<a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>view more</span></a>
					</div>				
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="icon-block style-3 bg-white">
						<div class="icon-price color-dark-2">cruise from <strong>$750</strong></div>
						<img class="icon-img" src="<?php echo get_template_directory_uri() ?>/img/home_9/icon_3.jpg" alt="">
						<div class="rate-wrap clearfix">
	          	          	<div class="rate">
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
						  	</div>
					      	<i>485 Rewies</i> 
                       	</div>						
						<h5 class="icon-title color-dark-2">princes Lines</h5>
						<div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium. Donec fermentum.</div>
						<a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>view more</span></a>
					</div>				
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="icon-block style-3 bg-white">
						<div class="icon-price color-dark-2">cruise from <strong>$750</strong></div>
						<img class="icon-img" src="<?php echo get_template_directory_uri() ?>/img/home_9/icon_4.jpg" alt="">
						<div class="rate-wrap clearfix">
	          	          	<div class="rate">
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
								<span class="fas fa-star color-yellow"></span>
						  	</div>
					      	<i>485 Rewies</i> 
                       	</div>						
						<h5 class="icon-title color-dark-2">Cruise-compare Lines</h5>
						<div class="icon-text color-grey-3">Sed sit amet leo orci. Fusce tincidunt accu msan pretium. Donec fermentum.</div>
						<a href="#" class="c-button small bg-dr-blue-2 hv-dr-blue-2-o delay-2"><span>view more</span></a>
					</div>				
				</div>											
			</div>
		</div>
	</div>	    
<?php get_footer() ?>
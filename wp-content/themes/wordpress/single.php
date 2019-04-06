<?php get_header() ?>

<!-- INNER-BANNER -->
<div class="inner-banner style-6">
	<img class="center-image" src="<?php echo get_template_directory_uri() ?>/img/detail/bg_3.jpg" alt="">
	<div class="vertical-align">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2 mx-auto">
		  			<ul class="banner-breadcrumb color-white clearfix">
		  				<li><a class="link-blue-2" href="#">home</a> /</li>
		  				<li><a class="link-blue-2" href="#">blog</a> /</li>
		  				<li><span>blog detail</span></li>
		  			</ul>
		  			<h2 class="color-white"><?php the_title() ?></h2>
  				</div>
			</div>
		</div>
	</div>
</div>

<!-- BLOG -->
<div class="detail-wrapper">
	<div class="container">
       	<div class="row padd-90">
       		<div class="col-xs-12 col-sm-10 col-sm-offset-1 mx-auto">
       			<div class="detail-header style-3">
       				<h2 class="detail-title color-dark-2">Best place to propose</h2>
					<div class="tour-info-line clearfix">
						<div class="tour-info">
				  	 		<img src="<?php echo get_template_directory_uri() ?>/img/calendar_icon_grey.png" alt="">
				  	 		<span class="font-style-2 color-dark-2"><?php echo get_the_date('l j F, Y') ?></span>
				  	 	</div>
						<div class="tour-info">
				  	 		<img src="<?php echo get_template_directory_uri() ?>/img/people_icon_grey.png" alt="">
				  	 		<span class="font-style-2 color-dark-2">By Emma Stone</span>
				  	 	</div>
						<div class="tour-info">
				  	 		<img src="<?php echo get_template_directory_uri() ?>/img/comment_icon_grey.png" alt="">
				  	 		<span class="font-style-2 color-dark-2">10 comments</span>
				  	 	</div>						
					</div>       				
       			</div>
       			<div class="detail-content">
       				<div class="detail-content-block">
	       				<div class="slider-wth-thumbs style-2">
							<div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
				                <div class="swiper-wrapper">
			                    	<div class="swiper-slide active" data-val="0">
			                    		 <img class="img-responsive img-full" src="<?php echo get_template_directory_uri() ?>/img/detail/slide_1.jpg" alt="">
			                    	</div>
			                    	<div class="swiper-slide" data-val="1">
			                    		 <img class="img-responsive img-full" src="<?php echo get_template_directory_uri() ?>/img/detail/slide_2.jpg" alt="">
			                    	</div>
			                    	<div class="swiper-slide" data-val="2">
			                    		 <img class="img-responsive img-full" src="<?php echo get_template_directory_uri() ?>/img/detail/slide_3.jpg" alt="">
			                    	</div>		                    	
			                    </div>
				                <div class="pagination pagination-hidden"></div>
				            </div>
				            <div class="swiper-container thumbnails" data-autoplay="0" 
				            data-loop="0" data-speed="500" data-center="0" 
				            data-slides-per-view="responsive" data-xs-slides="3" 
				            data-sm-slides="5" data-md-slides="5" data-lg-slides="5" 
				            data-add-slides="5">
				                <div class="swiper-wrapper">
									<div class="swiper-slide current active" data-val="0">
										<img class="img-responsive img-full" src="<?php echo get_template_directory_uri() ?>/img/detail/slide_1s.jpg" alt="">
									</div>
									<div class="swiper-slide" data-val="1">
										<img class="img-responsive img-full" src="<?php echo get_template_directory_uri() ?>/img/detail/slide_2s.jpg" alt="">
									</div>
									<div class="swiper-slide" data-val="2">
										<img class="img-responsive img-full" src="<?php echo get_template_directory_uri() ?>/img/detail/slide_3s.jpg" alt="">
									</div>									
								</div>
								<div class="pagination hidden"></div>
							</div>
						</div>       									

						<?php the_field('content') ?>

						<?php the_field('embed-iframe') ?>

						<div class="tags clearfix">
							<div class="tags-title color-dark-2">tag:</div>
							<ul class="clearfix">
	 							<li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">flights</a></li>
	 							<li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">travelling</a></li>
	 							<li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">Sale</a></li>
	 							<li><a class="c-button b-30 b-1 bg-grey-2 hv-dr-blue-2" href="#">cruises</a></li>							
	 						</ul>						
						</div> 
						<div class="share clearfix">
							<div class="share-title color-dark-2">share:</div>
							<ul>
		    			      	<li class="color-fb"><a href=""><i class="fa fa-facebook"></i>facebook<span class="color-fb-2">12</span></a></li>
		    			      	<li class="color-tw"><a href=""><i class="fa fa-twitter"></i>twitter<span class="color-tw-2">27</span></a></li>
		    			      	<li class="color-gg"><a href=""><i class="fa fa-google-plus"></i>google +<span class="color-gg-2">51</span></a></li>
		    			      	<li class="color-pin"><a href=""><i class="fa fa-pinterest"></i>pinterest<span class="color-pin-2">70</span></a></li>
	    			      	</ul>						
						</div>
					</div> 					     			
				</div>
				<div class="additional-block padd-90">
					<h4 class="additional-title">related posts</h4>
					<div class="row">
	    				<div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="1000" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="2">
							<div class="swiper-wrapper">
								<?php 

								$posts = new WP_Query( array(
									'post_type'   => 'post',
									)
								);
								if( $posts->have_posts() ) :
									$i = 0;
									while( $posts->have_posts() ) :
										$i++;
										$posts->the_post();
										get_template_part('template-parts/body/content','blogs');							
										if ($i == 4) break;
									endwhile;
									wp_reset_postdata();
								else :
									get_template_part( 'template-parts/content', 'none' ); 
								endif;

								?>														  
							  </div>
							<div class="pagination poin-style-2"></div>  
						</div>
					</div>
				</div>
				<div class="blog-navigation">
					<div class="row">
						<div class="col-xs-6 col-md-6">
							<div class="blog-nav-left">
								<a class="blog-nav-img black-hover" href="#">
									<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/detail/blog_nav_1.jpg" alt="">
									<div class="tour-layer delay-1"></div>        						
								</a>
								<div class="blog-nav-text">							
									<a class="c-button b-26 bg-dr-blue-2 hv-dr-blue-2-o" href="#">prev post</a>
									<div class="tour-info-line">
										<div class="tour-info">
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/calendar_icon_grey.png" alt="">
								  	 		<span class="font-style-2 color-dark-2">03/07/2015</span>
								  	 	</div>				
									</div>
			    					<h4><a class="color-dark-2 link-dr-blue-2" href="#">history of mauritius best information</a></h4>
									<div class="tour-info-line">
										<div class="tour-info">
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/comment_icon_grey.png" alt="">
								  	 		<span class="font-style-2 color-dark-2">10 comments</span>
								  	 	</div>									
										<div class="tour-info">
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/people_icon_grey.png" alt="">
								  	 		<span class="font-style-2 color-dark-2">By Emma Stone</span>
								  	 	</div>					
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-6">
							<div class="blog-nav-right">
								<a class="blog-nav-img black-hover" href="#">
									<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/detail/blog_nav_2.jpg" alt="">
									<div class="tour-layer delay-1"></div>        						
								</a>
								<div class="blog-nav-text">							
									<a class="c-button b-26 bg-dr-blue-2 hv-dr-blue-2-o" href="#">next post</a>
									<div class="tour-info-line">
										<div class="tour-info">
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/calendar_icon_grey.png" alt="">
								  	 		<span class="font-style-2 color-dark-2">03/07/2015</span>
								  	 	</div>				
									</div>
			    					<h4><a class="color-dark-2 link-dr-blue-2" href="#">top best hotels 2015 year from tripadvisor</a></h4>
									<div class="tour-info-line">
										<div class="tour-info">
								  	 		<span class="font-style-2 color-dark-2">10 comments</span>
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/comment_icon_grey.png" alt="">
								  	 	</div>									
										<div class="tour-info">
								  	 		<span class="font-style-2 color-dark-2">By Emma Stone</span>
								  	 		<img src="<?php echo get_template_directory_uri() ?>/img/people_icon_grey.png" alt="">
								  	 	</div>					
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>				       			
       		</div>
       	</div>
	</div>
</div>

<?php get_footer() ?>			   
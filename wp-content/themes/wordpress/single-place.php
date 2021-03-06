<?php get_header() ?>

<!-- INNER-BANNER -->
<div class="inner-banner style-6">
	<img class="center-image" src="<?php echo get_template_directory_uri() ?>/img/gallery/bg_2.jpg" alt="">
	<div class="vertical-align">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2 mx-auto">
		  			<ul class="banner-breadcrumb color-white clearfix">
		  				<li><a class="link-dr-blue-2" href="#">home</a> /</li>
		  				<li><a class="link-dr-blue-2" href="#">place</a> /</li>
		  				<li>
							<span>
								<?php
									the_title();
								?>
							</span>
						</li>
		  			</ul>
		  			<h2 class="color-white"><?php the_title() ?></h2>
  				</div>
			</div>
		</div>
	</div>
</div>

<!-- GALLERY-DETAIL -->
<div class="main-wraper padd-70-70">
	<div class="container">

		<div class="gallery-detail">

		    <div class="top-baner arrows">
		     	<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-center="0" data-slides-per-view="1" id="tour-slide-2">
				    <div class="swiper-wrapper">
					  	<div class="swiper-slide">
							<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/gallery/slide_1.jpg" alt="">
					  	</div>
					  	<div class="swiper-slide">
							<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/gallery/slide_2.jpg" alt="">
					  	</div>
					  	<div class="swiper-slide">
							<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/gallery/slide_1.jpg" alt="">
					  	</div>
					  	<div class="swiper-slide">
							<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/gallery/slide_1.jpg" alt="">
					  	</div>
					</div>
					<div class="pagination pagination-hidden poin-style-1"></div>
				</div>
		        <div class="arrow-wrapp arr-s-1">
					<div class="cont-1170">
						<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
						<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
					</div>
				</div>
		    </div>
			<div class="gd-content">
			    <div class="gd-category color-grey">honeymoon tours</div>
			    <h2 class="gd-title">monte carlo</h2>
			    <p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				
				<h4>my listing deactivated</h4>

				<p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			</div>
			<div class="photo-arrows clearfix">
				<a href="#" class="c-button b-50 photo-ar-left bg-dr-blue-2">
					prev image
					<img class="arrow-img" src="<?php echo get_template_directory_uri() ?>/img/gallery/arrow-left.jpg" alt="">
					<div class="photo-prev">
						<div class="photo-prev-title color-dark-2">andora</div>
						<div class="photo-prev-desc color-grey">mountain tours</div>
					</div>
				</a>
				<a href="#" class="c-button b-50 photo-ar-right bg-dr-blue-2">
					next image
					<img class="arrow-img" src="<?php echo get_template_directory_uri() ?>/img/gallery/arrow-left.jpg" alt="">
					<div class="photo-next">
						<div class="photo-next-title color-dark-2">andora</div>
						<div class="photo-next-desc color-grey">mountain tours</div>
					</div>
				</a>				
			</div>

		</div>
		<div class="related-block">
			<h3 class="related-title">Related Photos</h3>
			<div class="row">
				<div class="item hotels gal-item style-3 col-sm-12 col-sm-4">
					<a class="black-hover" href="#">
						<div class="gal-item-icon">
							<img class="img-full img-responsive" src="<?php echo get_template_directory_uri() ?>/img/gallery/m_gal_1.jpg" alt="">
							<div class="tour-layer delay-1"></div>
							<div class="vertical-align">
								<span class="c-button small bg-white delay-2"><span>view more</span></span>
							</div>
						</div>
						<div class="gal-item-desc delay-1">
							<h4><b>monaco, monte carlo</b></h4>					
							<h5>sea tours</h5>
						</div>
					</a>
				</div>
				<div class="item hotels gal-item style-3 col-xs-12 col-sm-4">
					<a class="black-hover" href="#">
						<div class="gal-item-icon">
							<img class="img-full img-responsive" src="<?php echo get_template_directory_uri() ?>/img/gallery/m_gal_2.jpg" alt="">
							<div class="tour-layer delay-1"></div>
							<div class="vertical-align">
								<span class="c-button small bg-white delay-2"><span>view more</span></span>
							</div>
						</div>
						<div class="gal-item-desc delay-1">
							<h4><b>paris, france</b></h4>					
							<h5>mountain tours</h5>
						</div>
					</a>
				</div>
				<div class="item hotels gal-item style-3 col-xs-12 col-sm-4">
					<a class="black-hover" href="#">
						<div class="gal-item-icon">
							<img class="img-full img-responsive" src="<?php echo get_template_directory_uri() ?>/img/gallery/m_gal_3.jpg" alt="">
							<div class="tour-layer delay-1"></div>
							<div class="vertical-align">
								<span class="c-button small bg-white delay-2"><span>view more</span></span>
							</div>
						</div>
						<div class="gal-item-desc delay-1">
							<h4><b>santorini, Greece</b></h4>					
							<h5>sea tours</h5>
						</div>
					</a>
				</div>				
			</div>
		</div>
	</div>        		
</div>

<?php get_footer() ?>
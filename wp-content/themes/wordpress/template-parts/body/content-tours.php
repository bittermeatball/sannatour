<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress
 */

?>
<div class="swiper-slide" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hotel-item style-6">
		<div class="radius-top">
			<?php
				if (wordpress_post_thumbnail() == NULL || wordpress_post_thumbnail() == '')
					echo '<span style="font-style: italic; text-align: center; display: block; line-height: 120px;">No image</span>';
				else
					wordpress_post_thumbnail(); 
			?>
		</div>
		<div class="title">
			<div class="tour-info-line clearfix">
				<div class="tour-info fl">
					<!-- Just an icon -->
					<img src="http://localhost:8000/sannatour/wp-content/themes/wordpress/img/calendar_icon_grey.png" alt="">
					<span class="font-style-2 color-grey-3">July <strong>19th 2015</strong></span>
				</div>
				<div class="tour-info fl">
					<!-- Just an icon -->
					<img src="http://localhost:8000/sannatour/wp-content/themes/wordpress/img/loc_icon_small_grey.png" alt="">
					<!-- Country -->
					<span class="font-style-2 color-grey-3">alaska</span>
				</div>						
			</div>
			<?php the_title( '<h4><b>', '</b></h4>' ); ?>
			<div class="rate-wrap">
				<div class="rate">
					<span class="fas fa-star color-yellow"></span>
					<span class="fas fa-star color-yellow"></span>
					<span class="fas fa-star color-yellow"></span>
					<span class="fas fa-star color-yellow"></span>
					<span class="fas fa-star color-yellow"></span>
				</div>
				<i>485 rewies</i> 
			</div>  
			<h5>from <strong>$860</strong> / person</h5>
			<p class="f-14 color-grey-3">
				<!-- Description -->
				Lorem dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to 
			</p>
			<a href="#" class="c-button b-50 bg-grey-3-t1 hv-grey-3-t">detail</a>
			<a href="#" class="c-button bg-dr-blue-2 hv-dr-blue-2-o fr">book now</a>
		</div>
	</div>
</div>

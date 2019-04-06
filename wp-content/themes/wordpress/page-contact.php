<?php get_header() ?>

<!-- INNER-BANNER -->
<div class="inner-banner style-6">
	<img class="center-image" src="<?php echo get_template_directory_uri() ?>/img/inner/bg_3.jpg" alt="">
	<div class="vertical-align">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2 mx-auto">
		  			<h2 class="color-white">get in touch</h2>
  				</div>
			</div>
		</div>
	</div>
</div>

<div class="detail-wrapper">
<!-- CONTACT-FORM -->
<div class="main-wraper padd-40">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<?php echo do_shortcode('[contact-form-7 id="1430" title="Contact form 1"]'); ?>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="contact-about">
					<h4 class="color-dark-2"><strong>contact info</strong></h4>
					<p class="color-grey-3"><?php the_field('description') ?></p>					
				</div>
				<div class="contact-info">
					<h4 class="color-dark-2"><strong>contact info</strong></h4>
					<div class="contact-line color-grey-3">
						<img src="<?php echo get_template_directory_uri() ?>/img/phone_icon_2_dark.png" alt="">
						Phone: 
						<a class="color-dark-2" href="tel:
							<?php echo str_replace('+','',str_replace(' ', '',get_field('phone_number')))?>">
							<?php the_field('phone_number') ?>
						</a>
					</div>					
					<div class="contact-line color-grey-3">
						<img src="<?php echo get_template_directory_uri() ?>/img/mail_icon_b_dark.png" alt="">
						Email us: 
						<a class="color-dark-2 tt" href="mailto:<?php the_field('email') ?>">
							<?php the_field('email') ?>
						</a>
					</div>					
					<div class="contact-line color-grey-3">
						<img src="<?php echo get_template_directory_uri() ?>/img/loc_icon_dark.png" alt="">
						Address: 
						<span class="color-dark-2 tt">
							<?php the_field('address') ?>
						</span>
					</div>
				</div>
				<div class="contact-social">
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fab fa-facebook"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fab fa-twitter"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fab fa-skype"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fab fa-google-plus"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fab fa-pinterest-p"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fab fa-instagram"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fab fa-behance"></i></a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1115.3539065240532!2d108.2213607566188!3d16.079110255052772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142183ba59dcb2f%3A0x3cd3f0f22fea6db9!2zSzYsIDIxIE5ndXnhu4VuIER1LCBUaOG6oWNoIFRoYW5nLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1554465723177!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

<?php get_footer() ?>			   
    <footer class="bg-dark type-2">
    	<div class="container" style="margin-top: 30px">
    		<div class="row">
    			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    				<div class="footer-block">
    					<img src="http://localhost:8000/sannatour/wp-content/themes/wordpress/img/theme-1/logo.png" alt="" class="logo-footer">
    					<div class="f_text color-grey-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore  magna aliqua. Ut aliquip ex ea commodo consequat.</div>
    					<div class="footer-share">
    						<a href="#"><span class="fab fa-facebook"></span></a>
    						<a href="#"><span class="fab fa-twitter"></span></a>
    						<a href="#"><span class="fab fa-google-plus"></span></a>
    						<a href="#"><span class="fab fa-pinterest"></span></a>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
				   <div class="footer-block">
						<h6>Travel News</h6>
						<?php
							if ( have_posts() ) {
								// Load posts loop.
								$i = 0;
								while ( have_posts() ) {
									$i++;
									the_post();
									get_template_part( 'template-parts/footer/content','blogs' );
									if ($i > 3) break;
								}
							} else {
								// If no content, include the "No posts found" template.
								get_template_part( 'template-parts/content', 'none' );
							}
						?>
				   </div>
				</div>
    			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="footer-block">
							<h6>Tags:</h6>
							<?php wp_tag_cloud(array(
								'number' => 10
							)) ?>
				   </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                   <div class="footer-block">
                     <h6>Contact Info</h6>
                       <div class="contact-info">
                        <div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>Aenean vulputate porttitor</span></div>
						<div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a href="tel:93123456789">+93 123 456 789</a></div>
						<div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a href="mailto:">letstravel@mail.com</a></div>					
						<div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a href="#">let’s_travel@world.com</a></div>					
						
					</div>
				   </div> 
				</div>
    		</div>
    	</div>
    	<div class="footer-link bg-black">
    	  <div class="container">
    	  	<div class="row">
    	  		<div class="col-md-12">
    	  		    <div class="copyright">
						<span>&copy; 2019 All rights reserved. SANNA TOUR JSC</span>
					</div>
    	  			<ul>
						<li><a class="link-aqua" href="#">Privacy Policy </a></li>
						<li><a class="link-aqua" href="#">About Us</a></li>
						<li><a class="link-aqua" href="#">Support </a></li>
						<li><a class="link-aqua" href="#">FAQ</a></li>
						<li><a class="link-aqua" href="#">Blog</a></li>
						<li><a class="link-aqua" href="#"> Forum</a></li>
					</ul>
    	  		</div>
    	  	</div>
    	  </div>
    	</div>
    </footer>
	
	<?php wp_footer() ?>                                                                                    

</body>
</html>
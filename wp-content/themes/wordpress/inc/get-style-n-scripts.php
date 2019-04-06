<?php

/**
 * Enqueue scripts and styles.
 */
function wordpress_scripts() {

	// CSS


	wp_enqueue_style( 'wordpress-fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );

	wp_enqueue_style( 'wordpress-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_style( 'wordpress-DateTimePicker', get_template_directory_uri() . '/css/DateTimePicker.min.css' );

	wp_enqueue_style( 'wordpress-jquery-ui', get_template_directory_uri() . '/css/jquery-ui.min.css' );

	wp_enqueue_style( 'wordpress-jquery-ui-structure', get_template_directory_uri() . '/css/jquery-ui.structure.min.css' );

	wp_enqueue_style( 'wordpress-jquery-classycountdown', get_template_directory_uri() . '/css/jquery.classycountdown.min.css' );

	wp_enqueue_style( 'wordpress-jquery-fullPage', get_template_directory_uri() . '/css/jquery.fullPage.css' );

	// wp_enqueue_style( 'wordpress-landing', get_template_directory_uri() . '/css/landing.css' );

	wp_enqueue_style( 'wordpress-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );

	wp_enqueue_style( 'wordpress-style', get_stylesheet_uri() );

	// JS
	// INDEX PAGE
	
	wp_enqueue_script( 'wordpress-jquery-library', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array(), '', true );

	wp_enqueue_script( 'wordpress-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );

	wp_enqueue_script( 'wordpress-jquery-ui-js', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '', true );

	wp_enqueue_script( 'wordpress-idangerous-swiper', get_template_directory_uri() . '/js/idangerous.swiper.min.js', array(), '', true );

	wp_enqueue_script( 'wordpress-jquery-viewportchecker', get_template_directory_uri() . '/js/jquery.viewportchecker.min.js', array(), '', true );

	wp_enqueue_script( 'wordpress-isotope-pkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '', true );

	wp_enqueue_script( 'wordpress-jquery-mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array(), '', true );

	wp_enqueue_script( 'wordpress-jquery-all-js', get_template_directory_uri() . '/js/all.js', array(), '', true );

	wp_enqueue_script( 'wordpress-forms-customizer', get_template_directory_uri() . '/js/forms-customizer.js', array(), '', true );

	// if ( is_singular('post_type') ) {

				
	// }


	// wp_enqueue_script( 'wordpress-anchors-navigation', get_template_directory_uri() . '/js/anchors.navigation.js');

	// wp_enqueue_script( 'wordpress-customizer', get_template_directory_uri() . '/js/customizer.js');

	// wp_enqueue_script( 'wordpress-DateTimePicker', get_template_directory_uri() . '/js/DateTimePicker.min.js');

	// wp_enqueue_script( 'wordpress-jquery-circliful', get_template_directory_uri() . '/js/jquery.circliful.min.js');

	// wp_enqueue_script( 'wordpress-jquery-classycountdown', get_template_directory_uri() . '/js/jquery.classycountdown.min.js');

	// wp_enqueue_script( 'wordpress-jquery-countTo', get_template_directory_uri() . '/js/jquery.countTo.js');

	// wp_enqueue_script( 'wordpress-jquery-fullPage', get_template_directory_uri() . '/js/jquery.fullPage.min.js');

	// wp_enqueue_script( 'wordpress-jquery-knob', get_template_directory_uri() . '/js/jquery.knob.js');

	// wp_enqueue_script( 'wordpress-jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');

	// wp_enqueue_script( 'wordpress-jquery-throttle', get_template_directory_uri() . '/js/jquery.throttle.js');

	// wp_enqueue_script( 'wordpress-landing', get_template_directory_uri() . '/js/landing.js');

	// wp_enqueue_script( 'wordpress-map', get_template_directory_uri() . '/js/map.js');

	// wp_enqueue_script( 'wordpress-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'wordpress-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wordpress_scripts' );

?>
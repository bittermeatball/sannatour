<?php

if ( ! function_exists( 'create_custom_posts' ) ) :

	function create_custom_posts() {
		register_post_type( 'tour',
			array(
				'labels' => array(
				'name' => __( 'Tours' ),
				'singular_name' => __( 'Tour' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'tour'),
				'supports' => array( 'title', 'editor', 'author', 'thumbnail')
			)
		);

		register_post_type( 'service',
			array(
				'labels' => array(
				'name' => __( 'Services' ),
				'singular_name' => __( 'Service' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'service'),
				'supports' => array( 'title', 'editor', 'author', 'thumbnail')
			)
		);

		register_post_type( 'place',
			array(
				'labels' => array(
				'name' => __( 'Places' ),
				'singular_name' => __( 'Place' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'place'),
				'supports' => array( 'title', 'editor', 'author', 'thumbnail')
			)
		);
	}

endif;

add_action( 'init', 'create_custom_posts' );

?>
<?php

if ( ! function_exists( 'create_taxonomies' ) ) :

	function create_taxonomies() {

	// CREATE TOUR TAXONOMIES ///////////////////////////////////////////////////////////////////////
		// Create tours categories ( foreign, domestic, ...)
		$tour_labels = array(
			'name' => _x('Tour categories','wordpress'),
			'singular_name' => _x('Tour category','wordpress'),
			'menu_name' => __('Tour categories','wordpress') ,
			'all_items' => __('All tour categories','wordpress'),
		);
		$tour_args = array(
			'hierarchical'      => true,
			'labels'            => $tour_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'tour_category' ),
		);
		register_taxonomy('tour_categories','tour',$tour_args);

		// Create tour's departures (From...)
		$departure_labels = array(
			'name' => _x('Departures','wordpress'),
			'singular_name' => _x('Departure','wordpress'),
			'menu_name' => __('Departures','wordpress'),
			'all_items' => __('All departures','wordpress'),
			'edit_item'                  => __( 'Edit Departure', 'wordpress' ),
			'update_item'                => __( 'Update Departure', 'wordpress' ),
			'add_new_item'               => __( 'Add New Departure', 'wordpress' ),
			'new_item_name'              => __( 'New Departure Name', 'wordpress' ),
			'separate_items_with_commas' => __( 'Separate departures with commas', 'wordpress' ),
			'add_or_remove_items'        => __( 'Add or remove departures', 'wordpress' ),
			'choose_from_most_used'      => __( 'Choose from the most used departures', 'wordpress' ),
			'not_found'                  => __( 'No departures found.', 'wordpress' ),
		);
		$departure_args = array(
			'hierarchical'      => false,
			'labels'            => $departure_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'departure' ),
		);
		register_taxonomy('departures','tour',$departure_args);

		// Create tour's destinations (To inside of VietNam...)
		$destination_labels = array(
			'name' => _x('Domestic destinations','wordpress'),
			'singular_name' => _x('Domestic destination','wordpress'),
			'menu_name' => __('Domestic destination','wordpress'),
			'all_items' => __('All domestic destinations','wordpress'),
			'edit_item'                  => __( 'Edit Domestic destination', 'wordpress' ),
			'update_item'                => __( 'Update Domestic destination', 'wordpress' ),
			'add_new_item'               => __( 'Add New Domestic destination', 'wordpress' ),
			'new_item_name'              => __( 'New Domestic destination Name', 'wordpress' ),
			'separate_items_with_commas' => __( 'Separate domestic destinations with commas', 'wordpress' ),
			'add_or_remove_items'        => __( 'Add or remove domestic destinations', 'wordpress' ),
			'choose_from_most_used'      => __( 'Choose from the most used domestic destinations', 'wordpress' ),
			'not_found'                  => __( 'No domestic destinations found.', 'wordpress' ),
		);
		$destination_args = array(
			'hierarchical'      => false,
			'labels'            => $destination_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'domestic_destination' ),
		);
		register_taxonomy('domestic_destinations','tour',$destination_args);

		// Create tour's destinations (To outside of VietNam...)
		$destination_labels = array(
			'name' => _x('Foreign destinations','wordpress'),
			'singular_name' => _x('Foreign destination','wordpress'),
			'menu_name' => __('Foreign destination','wordpress'),
			'all_items' => __('All foreign destinations','wordpress'),
			'edit_item'                  => __( 'Edit Foreign destination', 'wordpress' ),
			'update_item'                => __( 'Update Foreign destination', 'wordpress' ),
			'add_new_item'               => __( 'Add New Foreign destination', 'wordpress' ),
			'new_item_name'              => __( 'New Foreign destination Name', 'wordpress' ),
			'separate_items_with_commas' => __( 'Separate foreign destinations with commas', 'wordpress' ),
			'add_or_remove_items'        => __( 'Add or remove foreign destinations', 'wordpress' ),
			'choose_from_most_used'      => __( 'Choose from the most used foreign destinations', 'wordpress' ),
			'not_found'                  => __( 'No foreign destinations found.', 'wordpress' ),
		);
		$destination_args = array(
			'hierarchical'      => true,
			'labels'            => $destination_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'foreign_destination' ),
		);
		register_taxonomy('foreign_destinations','tour',$destination_args);

	// CREATE SERVICE TAXONOMIES ///////////////////////////////////////////////////////////////////////
		$service_labels = array(
			'name' => _x('Services','wordpress'),
			'singular_name' => _x('Service','wordpress'),
			'menu_name' => __('Service categories','wordpress'),
			'all_items' => __('All services','wordpress'),
			'edit_item'                  => __( 'Edit Service', 'wordpress' ),
			'update_item'                => __( 'Update Service', 'wordpress' ),
			'add_new_item'               => __( 'Add New Service', 'wordpress' ),
			'new_item_name'              => __( 'New Service Name', 'wordpress' ),
			'separate_items_with_commas' => __( 'Separate services with commas', 'wordpress' ),
			'add_or_remove_items'        => __( 'Add or remove services', 'wordpress' ),
			'choose_from_most_used'      => __( 'Choose from the most used services', 'wordpress' ),
			'not_found'                  => __( 'No services found.', 'wordpress' ),
		);
		$service_args = array(
			'hierarchical'      => true,
			'labels'            => $service_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'service' ),
		);
		register_taxonomy('service_categories','service',$service_args);

	// CREATE PLACE TAXONOMIES ///////////////////////////////////////////////////////////////////////
		$place_labels = array(
			'name' => _x('Places','wordpress'),
			'singular_name' => _x('Place','wordpress'),
			'menu_name' => __('Place categories','wordpress'),
			'all_items' => __('All places','wordpress'),
			'edit_item'                  => __( 'Edit Place', 'wordpress' ),
			'update_item'                => __( 'Update Place', 'wordpress' ),
			'add_new_item'               => __( 'Add New Place', 'wordpress' ),
			'new_item_name'              => __( 'New Place Name', 'wordpress' ),
			'separate_items_with_commas' => __( 'Separate places with commas', 'wordpress' ),
			'add_or_remove_items'        => __( 'Add or remove places', 'wordpress' ),
			'choose_from_most_used'      => __( 'Choose from the most used places', 'wordpress' ),
			'not_found'                  => __( 'No places found.', 'wordpress' ),
		);
		$place_args = array(
			'hierarchical'      => true,
			'labels'            => $place_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'place' ),
		);
		register_taxonomy('place_categories','place',$place_args);

	}

endif;

add_action( 'init', 'create_taxonomies' );
?>
<?php

function the_taxonomy_breadcrumb($id,$taxonomy) {
	$terms = get_the_terms( $id , array( $taxonomy ) );
	// init counter
	$i = 1;
	foreach ( $terms as $term ) {
		$term_link = get_term_link( $term, array( $taxonomy ) );
		if( is_wp_error( $term_link ) )
			continue;
		echo "<a class='link-dr-blue-2' href='".$term_link."'>".__($term->name,'wordpress')."</a>";
		//  Add comma (except after the last theme)
		echo ($i < count($terms))? " / " : "";
		// Increment counter
		$i++;
	}
}

function the_destinations($id,$taxonomy) {
	$terms = get_the_terms( $id , array( $taxonomy ) );
	// init counter
	$i = 1;
	foreach ( $terms as $term ) {
		$term_link = get_term_link( $term, array( $taxonomy ) );
		if( is_wp_error( $term_link ) )
			continue;
		echo "<a class='link-dr-blue-2' href='".$term_link."'>".__($term->name,'wordpress')."</a>";
		//  Add comma (except after the last theme)
		echo ($i < count($terms))? " - " : "";
		// Increment counter
		$i++;
	}
}

?>
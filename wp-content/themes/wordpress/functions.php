<?php
/**
 * wordpress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordpress
 */

/**
 * Wordpress theme setup
 */
require get_template_directory() . '/inc/init.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wordpress_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wordpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'wordpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wordpress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wordpress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wordpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wordpress_widgets_init' );

/**
 *Some templates extra functions.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 *Create custom post types.
 */
require get_template_directory() . '/inc/create-custom-post-types.php';

/**
 * Get styles and scripts.
 */
require get_template_directory() . '/inc/get-style-n-scripts.php';

/**
 * Create the taxonomy and stuff.
 */
require get_template_directory() . '/inc/create-taxonomies.php';

/**
 * Get the taxonomy and stuff.
 */
require get_template_directory() . '/inc/get-taxonomies.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

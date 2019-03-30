<?php
/**
 * wordpress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordpress
 */

if ( ! function_exists( 'wordpress_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wordpress_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wordpress, use a find and replace
		 * to change 'wordpress' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wordpress', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Primary', 'wordpress' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wordpress_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wordpress_setup' );

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
 * Enqueue scripts and styles.
 */
function wordpress_scripts() {

	// CSS


	wp_enqueue_style( 'wordpress-fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );

	wp_enqueue_style( 'wordpress-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_style( 'wordpress-DateTimePicker', get_template_directory_uri() . '/css/DateTimePicker.min.css' );

	wp_enqueue_style( 'wordpress-jquery-ui', get_template_directory_uri() . '/css/jquery-ui.min.css' );

	wp_enqueue_style( 'wordpress-jquery-ui-structure', get_template_directory_uri() . '/css/jquery-ui.structure.min.css' );

	// wp_enqueue_style( 'wordpress-superfish', get_template_directory_uri() . '/css/superfish.css' );

	// wp_enqueue_style( 'wordpress-jquery-classycountdown', get_template_directory_uri() . '/css/jquery.classycountdown.min.css' );

	// wp_enqueue_style( 'wordpress-jquery-fullPage', get_template_directory_uri() . '/css/jquery.fullPage.css' );

	// wp_enqueue_style( 'wordpress-landing', get_template_directory_uri() . '/css/landing.css' );

	// wp_enqueue_style( 'wordpress-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );

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

	// wp_enqueue_script( 'wordpress-superfish-js', get_template_directory_uri() . '/js/superfish.js', array(), '', true );

	// wp_enqueue_script( 'wordpress-superfish-js', get_template_directory_uri() . '/js/custom.js', array(), '', true );


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

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
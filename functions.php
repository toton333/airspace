<?php
/**
 * Airspace functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Airspace
 */

if ( ! function_exists( 'airspace_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function airspace_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Airspace, use a find and replace
		 * to change 'airspace' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'airspace', get_template_directory() . '/languages' );

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

		 set_post_thumbnail_size( 555, 253, true );
		 add_image_size( 'single', 1098, 500, false );
		 add_image_size( 'non-grid', 750, 341.5, false );
		

		 add_theme_support( 'post-formats', array(
		 	'video',
		 	'audio',
		 ) );



		//add_image_size( $name, $width = 0, $height = 0, $crop = false );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'airspace' ),
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
		add_theme_support( 'custom-background', apply_filters( 'airspace_custom_background_args', array(
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
add_action( 'after_setup_theme', 'airspace_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function airspace_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'airspace_content_width', 640 );
}
add_action( 'after_setup_theme', 'airspace_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function airspace_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'airspace' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'airspace' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'airspace_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function airspace_scripts() {

	//css
	wp_enqueue_style( 'airspace-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() .'/plugins/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'Ionicons', get_template_directory_uri() .'/plugins/Ionicons/css/ionicons.min.css');
	wp_enqueue_style( 'animate-css', get_template_directory_uri() .'/plugins/animate-css/animate.css');
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() .'/plugins/magnific-popup/dist/magnific-popup.css');
	wp_enqueue_style( 'slick-carousel', get_template_directory_uri() .'/plugins/slick-carousel/slick/slick.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() .'/plugins/slick-carousel/slick/slick-theme.css');
	wp_enqueue_style( 'main-style', get_template_directory_uri() .'/css/style.css');



    //js
	wp_enqueue_script( 'airspace-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'airspace-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'slick-carousel', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/plugins/magnific-popup/dist/jquery.magnific-popup.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/plugins/mixitup/dist/mixitup.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'SyoTimer', get_template_directory_uri() . '/plugins/SyoTimer/build/jquery.syotimer.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'google-map', get_template_directory_uri() . '/plugins/google-map/map.js', array('jquery'), null, true );
	wp_enqueue_script( 'airspace-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'airspace_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom link color.
 */
require get_template_directory() . '/inc/custom-link-color.php';

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

/**
 * customize primary nav menu with walker class.
 */
require get_template_directory() . '/inc/walker.php';

//custom logo 
function airspace_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}




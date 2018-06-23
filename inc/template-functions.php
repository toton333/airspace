<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Airspace
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function airspace_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'airspace_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function airspace_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'airspace_pingback_header' );


/* remove version string from js and css */
function airspace_remove_wp_version_strings( $src ) {
	
	global $wp_version;
	parse_str( parse_url($src, PHP_URL_QUERY), $query );
	if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
	
}
add_filter( 'script_loader_src', 'airspace_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'airspace_remove_wp_version_strings' );
/* remove metatag generator from header */
function airspace_remove_meta_version() {
	return '';
}
add_filter( 'the_generator', 'airspace_remove_meta_version' );

//embeded media

function airspace_get_embedded_media( $type = array() ){
	$content = do_shortcode( apply_filters( 'the_content', get_the_content() ) );
	$embed = get_media_embedded_in_content( $content, $type );
	
	if( in_array( 'audio' , $type) ):
		$output = str_replace( '?visual=true', '?visual=false', $embed[0] );
	else:
		$output = $embed[0];
	endif;
	
	return $output;
}

//wp customize cropped image control output 

function get_cropped_image_url($setting_id) {
    if ( get_theme_mod( $setting_id ) > 0 ) {
        return wp_get_attachment_url( get_theme_mod( $setting_id) );
    } 
}




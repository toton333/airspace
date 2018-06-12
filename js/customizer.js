/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	//link color
	wp.customize( 'test_color', function( value ) {
		value.bind( function( newval ) {
			$('.navigation .navbar .navbar-nav  li  a').css('color', newval );
		} );
	} );

	


	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			
			}
		} );
	} );

	//toggle switch
	wp.customize( 'sample_toggle_switch', function( value ) {
		value.bind( function( to ) {

			if( to ){
                $( '.switch-toggle' ).css('display', 'block');
            }
            else{
                $( '.switch-toggle' ).css('display', 'none');
            }
			
			
		} );
	} );
	

	

} )( jQuery );

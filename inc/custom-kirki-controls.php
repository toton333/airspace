<?php
add_action( 'customize_register', function( $wp_customize ) {
	/**
	 * The custom control class
	 */
	class Kirki_Controls_Tinymce_Control extends Kirki_Control_Base {
		public $type = 'tinymce';
		
		public function render_content() { ?>
			THE CONTROL CONTENT HERE
			<?php
		}
	}
	// Register our custom control with Kirki
	add_filter( 'kirki_control_types', function( $controls ) {
		$controls['tinymce'] = 'Kirki_Controls_Tinymce_Control';
		return $controls;
	} );

} );
?>
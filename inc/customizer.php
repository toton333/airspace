<?php
/**
 * Airspace Theme Customizer
 *
 * @package Airspace
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function airspace_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'airspace_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'airspace_customize_partial_blogdescription',
		) );
	}

	/* Start of test customizer*/
    
	$wp_customize->add_setting(
		'test_color', array(
			'default'           => '#655E7A',
			'transport'         => 'postMessage'
			
		)
	);

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_color_control', array(
	'label'      => __( 'Nav Menu Color', 'airspace' ),
	'settings'   => 'test_color',
	'section'    => 'colors'
) ) );

	$wp_customize->add_setting(
		'test_hover_color', array(
			'default'           => '#353240',
			
		)
	);

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_hover_color_control', array(
	'label'      => __( 'Nav Menu Hover Color', 'airspace' ),
	'settings'   => 'test_hover_color',
	'section'    => 'colors'
) ) );


	/* end of testcustomizer*/

    /* Start of blog customizer*/
	//1. Define new section for blog
	     $wp_customize->add_section( 'blog_section_id', 
	        array(
	           'title'       => __( 'Blog Options', 'airspace' ), //Visible title of section
	           'priority'    => 35, //Determines what order this appears in
	           'capability'  => 'edit_theme_options', //Capability needed to tweak
	           'description' => __('Allows you to customize some blog related options.', 'airspace'), //Descriptive tooltip
	        ) 
	     );

	     //2. Register blog_options setting to the WP database...
	         $wp_customize->add_setting( 'blog_layout_setting_id', array(
	           'capability' => 'edit_theme_options',
	           'default' => 'grid',
	           'sanitize_callback' => 'airspace_customizer_sanitize_radio',
	         ) );

	   $wp_customize->add_control( 'blog_layout_setting_id', array(
	     'type' => 'radio',
	     'section' => 'blog_section_id', // Add a default or your own section
	     'label' => __( 'Select blog layout(default : Grid)' ),
	     'description' => __( 'Customize blog index page layout.', 'airspace' ),
	     'choices' => array(
	       'grid' => __( 'Grid', 'airspace' ),
	       'left' => __( 'Left Sidebar', 'airspace' ),
	       'right' => __( 'Right Sidebar', 'airspace' ),
	       'full'    => __('Full Width(no sidebar)', 'airspace')
	     ),
	   ) );
       

       //switch toggle
	   $wp_customize->add_setting( 'sample_toggle_switch',
	   	array(
	   		'default' => 0,
	   		'transport' => 'postMessage',
	   		'sanitize_callback' => 'skyrocket_switch_sanitization'
	   	)
	   );
	   $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'sample_toggle_switch',
	   	array(
	   		'label' => esc_html__( 'Toggle switch' ),
	   		'section' => 'blog_section_id'
	   	)
	   ) );
	   /* end of blog customizer*/





}
add_action( 'customize_register', 'airspace_customize_register' );

/**
 * Switch sanitization
 *
 * @param  string		Switch value
 * @return integer	Sanitized value
 */
if ( ! function_exists( 'skyrocket_switch_sanitization' ) ) {
	function skyrocket_switch_sanitization( $input ) {
		if ( true === $input ) {
			return 1;
		} else {
			return 0;
		}
	}
}



//Sanitization for blog layout settings
function airspace_customizer_sanitize_radio( $input, $setting ) {

  // Ensure input is a slug.
  $input = sanitize_key( $input );

  // Get list of choices from the control associated with the setting.
  $choices = $setting->manager->get_control( $setting->id )->choices;

  // If the input is a valid key, return it; otherwise, return the default.
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function airspace_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function airspace_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function airspace_customize_preview_js() {
	wp_enqueue_script( 'airspace-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'airspace_customize_preview_js' );

require_once trailingslashit( dirname(__FILE__) ) . 'custom-controls.php';



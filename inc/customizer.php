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
			'default'           => '#5C5C5C',
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
			'default'           => '#000',
			
		)
	);

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test_hover_color_control', array(
	'label'      => __( 'Nav Menu Hover Color', 'airspace' ),
	'settings'   => 'test_hover_color',
	'section'    => 'colors'
) ) );

	/* end of testcustomizer*/

/* Start of header_image section*/
  
  //header heading setting
   $wp_customize->add_setting(
    'header_heading', array(
     'default'   => __('A DIGITAL MARKETING & DESIGN AGENCY', 'airspace'),
     'transpost' => 'refresh'

    )
   );

   //header heading textarea
   $wp_customize->add_control('header_heading', array(

   'type' => 'textarea',
   'label' => __('Insert your header heading', 'airspace'),
   'section' => 'header_image',
   ));


  //header subheading setting
   $wp_customize->add_setting(
    'header_subheading', array(
     'default'   => __('We love the Web and the work we do.We work closely with our clients to deliver 
the best possible solutions for their needs','airspace'),
     'transpost' => 'refresh'

    )
   );

  //header subheading textarea
   $wp_customize->add_control('header_subheading', array(

   'type' => 'textarea',
   'label' => __('Insert your header sub heading','airspace'),
   'section' => 'header_image',
   ));



   // button text setting
   $wp_customize->add_setting(
    'header_button_text', array(
     'default'   => __('FREE BOOTSTRAP TEMPLATES','airspace'),
     'transpost' => 'refresh'

    )
   );

  //button textarea
   $wp_customize->add_control('header_button_text', array(

   'type' => 'textarea',
   'label' => __('Insert your button text','airspace'),
   'section' => 'header_image',
   ));

   // url setting
	$wp_customize->add_setting( 'header_button_url',
	   array(
	      'default' => 'http://localhost/airspace/portfolio-filter/', 
	      'transport' => 'refresh',
	   )
	);
    
    // url text field
	$wp_customize->add_control( 'header_button_url',
	   array(
	      'label' => __( 'Button URL', 'airspace' ),
	      'description' => esc_html__( 'Insert Button URL', 'airspace' ),
	      'section' => 'header_image',
	      'type' => 'text', 
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( 
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid grey',
	         'placeholder' => __( 'Enter URL...' ),
	      ),
	   )
	);





 
/* end of header image*/


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

/* start of Frontpage content*/

/*
    //frontpage panel
	$wp_customize->add_panel( 'frontpage_panel',
	   array(
	      'title' => __( 'Frontpage Content', 'airspace' ),
	      'description' => esc_html__( 'Insert your content at different areas of frontpage.' ),
	   )
	);
    
    //frontpage section 1 
	$wp_customize->add_section( 'frontpage_section1',
	   array(
	      'title' => __( 'About Us', 'airspace' ),
	      'description' => esc_html__( 'Insert content about your organisation', 'airspace' ),
	      'panel' => 'frontpage_panel', // Only needed if adding your Section to a Panel
	   )
	);

   //about title setting
	$wp_customize->add_setting( 'about_title',
	   array(
	      'default' => 'ABOUT US', 
	      'transport' => 'refresh',
	   )
	);
    
    //about title text field
	$wp_customize->add_control( 'about_title',
	   array(
	      'label' => __( 'Title', 'airspace' ),
	      'description' => esc_html__( 'Insert a title', 'airspace' ),
	      'section' => 'frontpage_section1',
	      'type' => 'text', 
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( 
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter Title...' ),
	      ),
	   )
	);


    //about content setting
	$wp_customize->add_setting( 'about_content',
	   array(
	      'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id', 
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_kses_post'
	   )
	);
    

    //about content tinymce
	$wp_customize->add_control( new WP_Customize_Teeny_Control( $wp_customize, 'about_content',
		array(
			'label' => __( 'Body', 'airspace' ),
			'description' => __( 'Enter your content here', 'airspace' ),
			'section' => 'frontpage_section1',
			
		)
	) );

	//about image setting 
	$wp_customize->add_setting( 'about_image',
	   array(
	      'default' => '',
	      'transport' => 'refresh',
	   )
	);
	
	//about image control
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_image',
	   array(
	      'label' => __( 'Image' , 'airspace'),
	      'description' => esc_html__( 'Upload your preferred image', 'airspace' ),
	      'section' => 'frontpage_section1',
	      'button_labels' => array( // Optional.
	         'select' => __( 'Select Image' ),
	         'change' => __( 'Change Image' ),
	         'remove' => __( 'Remove' ),
	         'default' => __( 'Default' ),
	         'placeholder' => __( 'No image selected' ),
	         'frame_title' => __( 'Select Image' ),
	         'frame_button' => __( 'Choose Image' ),
	      )
	   )
	) );

	//frontpage section 2 
	$wp_customize->add_section( 'frontpage_section2',
	   array(
	      'title' => __( 'Ideas', 'airspace' ),
	      'description' => esc_html__( 'Insert content about your ideas', 'airspace' ),
	      'panel' => 'frontpage_panel', 
	   )
	);

   //ideas title setting
	$wp_customize->add_setting( 'ideas_title',
	   array(
	      'default' => 'WE BELIEVE IN GREAT IDEAS', 
	      'transport' => 'refresh',
	   )
	);
    
    //ideas title text field
	$wp_customize->add_control( 'ideas_title',
	   array(
	      'label' => __( 'Title', 'airspace' ),
	      'description' => esc_html__( 'Insert a title', 'airspace' ),
	      'section' => 'frontpage_section2',
	      'type' => 'text', 
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( 
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter Title...' ),
	      ),
	   )
	);


    //ideas content setting
	$wp_customize->add_setting( 'ideas_content',
	   array(
	      'default' => 'Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.

			Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.

			Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_kses_post'
	   )
	);
    

    //ideas content tinymce
	$wp_customize->add_control( new WP_Customize_Teeny_Control( $wp_customize, 'ideas_content',
		array(
			'label' => __( 'Body', 'airspace' ),
			'description' => __( 'Enter your content here', 'airspace' ),
			'section' => 'frontpage_section2',
			
		)
	) );

	//ideas image setting 
	$wp_customize->add_setting( 'ideas_image',
	   array(
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'absint'
	   )
	);
	
	//ideas image control
	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'ideas_image',
	   array(
	      'label' => __( 'Image' , 'airspace'),
	      'description' => esc_html__( 'Upload your preferred image', 'airspace' ),
	      'section' => 'frontpage_section2',
	      'flex_width' => false, // Optional. Default: false
	      'flex_height' => true, // Optional. Default: false
	      'width' => 800, // Optional. Default: 150
	      'height' => 400, // Optional. Default: 150
	      'button_labels' => array( // Optional.
	         'select' => __( 'Select Image' ),
	         'change' => __( 'Change Image' ),
	         'remove' => __( 'Remove' ),
	         'default' => __( 'Default' ),
	         'placeholder' => __( 'No image selected' ),
	         'frame_title' => __( 'Select Image' ),
	         'frame_button' => __( 'Choose Image' ),
	      )
	   )
	) );

   //ideas url setting
	$wp_customize->add_setting( 'ideas_url',
	   array(
	      'default' => 'http://localhost/airspace/service/', 
	      'transport' => 'refresh',
	   )
	);
    
    //ideas url text field
	$wp_customize->add_control( 'ideas_url',
	   array(
	      'label' => __( 'Button URL', 'airspace' ),
	      'description' => esc_html__( 'Insert Button URL', 'airspace' ),
	      'section' => 'frontpage_section2',
	      'type' => 'text', 
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( 
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid grey',
	         'placeholder' => __( 'Enter URL...' ),
	      ),
	   )
	);

	//ideas button text setting
	$wp_customize->add_setting( 'ideas_button_text',
	   array(
	      'default' => __('View Works', 'airspace'), 
	      'transport' => 'refresh',
	   )
	);
    
    //ideas button text field
	$wp_customize->add_control( 'ideas_button_text',
	   array(
	      'label' => __( 'Button Text', 'airspace' ),
	      'description' => esc_html__( 'Insert Button Text', 'airspace' ),
	      'section' => 'frontpage_section2',
	      'type' => 'text', 
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( 
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid grey',
	         'placeholder' => __( 'Enter Button Text...' ),
	      ),
	   )
	);

	//frontpage section 3 
	$wp_customize->add_section( 'frontpage_section3',
	   array(
	      'title' => __( 'Services', 'airspace' ),
	      'description' => esc_html__( 'Describe your various services', 'airspace' ),
	      'panel' => 'frontpage_panel', // Only needed if adding your Section to a Panel
	   )
	);

	//services title setting
	$wp_customize->add_setting( 'services_title',
	   array(
	      'default' => __('OUR SERVICES', 'airspace'), 
	      'transport' => 'refresh',
	   )
	);
    
    //services title text field
	$wp_customize->add_control( 'services_title',
	   array(
	      'label' => __( 'Title', 'airspace' ),
	      'description' => esc_html__( 'Insert a title', 'airspace' ),
	      'section' => 'frontpage_section3',
	      'type' => 'text', 
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( 
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter Title...' ),
	      ),
	   )
	);


//services subheading setting
   $wp_customize->add_setting(
    'services_subheading', array(
     'default'   => __('We love the Web and the work we do.We work closely with our clients to deliver 
the best possible solutions for their needs','airspace'),
     'transpost' => 'refresh'

    )
   );

  //header subheading textarea
   $wp_customize->add_control('services_subheading', array(

   'type' => 'textarea',
   'label' => __('Description','airspace'),
   'description' => esc_html__( 'Insert a description of this section', 'airspace' ),
   'section' => 'frontpage_section3',
   'input_attrs' => array( 
      'class' => 'my-custom-class',
      'style' => 'border: 1px solid grey',
      'placeholder' => __( 'Enter Subheading...' ),
   ),
   ));

//services repeater setting
 $wp_customize->add_setting( 'services_repeater', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
     ));

//services repeater field
 $wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'services_repeater', array(
	   	'label'   => esc_html__('Services Repeater','airspace'),
	   	'section' => 'frontpage_section3',
	   	'customizer_repeater_image_control' => true,
	   	'customizer_repeater_icon_control' => true,
	   	'customizer_repeater_title_control' => true,
	   	'customizer_repeater_text_control' => true,
    ) ) );


*/
/* end of Frontpage content*/







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



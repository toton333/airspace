<?php

Kirki::add_config( 'airspace_kirki_config_id', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'frontpage_panel', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Frontpage Content', 'airspace' ),
    'description' => esc_attr__( 'Insert your content at different areas of frontpage.' ),
) );

/* Start of frontpage_section1 */

Kirki::add_section( 'frontpage_section1', array(
    'title'          => esc_attr__( 'About Us', 'airspace' ),
    'description'    => esc_attr__( 'Insert content about your organisation', 'airspace' ),
    'panel'          => 'frontpage_panel',
) );

Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'     => 'text',
	'settings' => 'about_title',
	'label'    => __( 'Title', 'airspace' ),
	'description' => esc_html__( 'Insert a title', 'airspace' ),
	'section'  => 'frontpage_section1',
	'default'  => esc_attr__( 'ABOUT US', 'airspace' ),
	'partial_refresh' => array(
       'about_title' => array(
             'selector' => '#about_title h2',
             'render_callback' => function(){

             	return get_theme_mod('about_title');
             }
       )
	),
	
) );

Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'     => 'editor',
	'settings' => 'about_content',
	'label'    => __( 'Body', 'airspace' ),
	'description' => __( 'Enter your content here', 'airspace' ),
	'section'  => 'frontpage_section1',
	'default'  => esc_attr__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id', 'airspace' ),
	'partial_refresh' => array(
       'about_content' => array(
             'selector' => 'div#about_content',
             'render_callback' => function(){

             	return get_theme_mod('about_content');
             }
       )
	),
	
) );

/*
Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'        => 'image',
	'settings'    => 'about_image',
	'label'       => esc_attr__( 'Image' , 'airspace'),
	'description' => esc_attr__( 'Upload your preferred image', 'airspace' ),
	'section'     => 'frontpage_section1',
	'default'     => get_template_directory_uri().'/images/wrapper-img.png',
	'transport'   => 'postMessage',
	 'js_vars'     => array(
        array(
            'element'  => '#about_image',
            'function' => 'html',
            'attr'     => 'src',
        ),
    )
) );
*/
Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'        => 'image',
	'settings'    => 'about_image',
	'label'       => esc_attr__( 'Image' , 'airspace'),
	'description' => esc_attr__( 'Upload your preferred image', 'airspace' ),
	'section'     => 'frontpage_section1',
	'default'     => get_template_directory_uri().'/images/wrapper-img.png',

	 'partial_refresh' => array(

        'about_image' => array(
           'selector' => 'div.about_image',

           'render_callback' => function(){

           	  ?>
           	 <img id="about_image"  src="<?php echo esc_url( get_theme_mod('about_image') );  ?>" alt="Img">

           	  <?php
           }

        )
	 )
) );



/* End of frontpage_section1 */


/* Start of frontpage_section2 */
Kirki::add_section( 'frontpage_section2', array(
    'title'          => esc_attr__( 'Ideas', 'airspace' ),
    'description'    => esc_attr__( 'Insert content about your ideas', 'airspace' ),
    'panel'          => 'frontpage_panel',
) );

Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'     => 'text',
	'settings' => 'ideas_title',
	'label'    => __( 'Title', 'airspace' ),
	'description' => esc_html__( 'Insert a title', 'airspace' ),
	'section'  => 'frontpage_section2',
	'default'  => esc_attr__( 'WE BELIEVE IN GREAT IDEAS', 'airspace' ),
	'partial_refresh' => array(
       'ideas_title' => array(
             'selector' => '#ideas h2',
             'render_callback' => function(){

             	return get_theme_mod('ideas_title');
             }
       )
	),
	
) );

Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'     => 'editor',
	'settings' => 'ideas_content',
	'label'    => __( 'Body', 'airspace' ),
	'description' => __( 'Enter your content here', 'airspace' ),
	'section'  => 'frontpage_section2',
	'default'  => esc_attr__( 'Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.

			Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.

			Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 'airspace' ),
	'partial_refresh' => array(
       'ideas_content' => array(
             'selector' => 'div#ideas_content',
             'render_callback' => function(){

             	return get_theme_mod('ideas_content');
             }
       )
	),
	
) );

Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'        => 'custom',
	'settings'    => 'ideas_background_collapse',
	'label'       => __( '', 'airspace' ),
	'section'     => 'frontpage_section2',
	'default'     => '<button class="airspacecollapsible">' . esc_html__( 'Background', 'airspace' ) . '</button>',

	'description' => esc_attr__( 'Set your Background for this block', 'airspace' ),
) );


Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'        => 'background',
	'settings'    => 'ideas_background',
	'label'       => esc_attr__( '' , 'airspace'),
	'section'     => 'frontpage_section2',
	'transport'   => 'auto',	
	'default'	 => array(
		'background-color'		 => '',
		'background-image'		 => '',
		'background-repeat'		 => 'no-repeat',
		'background-position'	 => 'center center',
		'background-size'		 => 'cover',
		'background-attachment'	 => 'fixed',
	),	
	'output'     => array(
          array(
            'element' => '.bg-2',
            'property' => 'background'

          )

	)
) );




Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'     => 'text',
	'settings' => 'ideas_button_text',
	'label'    => __( 'Button text', 'airspace' ),
	'description' => esc_html__( 'Insert button text', 'airspace' ),
	'section'  => 'frontpage_section2',
	'default' => esc_html__('View Works', 'airspace'),
	'partial_refresh' => array(
       'ideas_button_text' => array(
             'selector' => '#ideas_link a',
             'render_callback' => function(){

             	 echo get_theme_mod('ideas_button_text');
             }
       )
	),
	
) );

Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'     => 'link',
	'settings' => 'ideas_url',
	'label'    => __( 'Button URL', 'airspace' ),
	'description' => esc_html__( 'Insert a link to the buttom', 'airspace' ),
	'section'  => 'frontpage_section2',
	'default' => esc_url( 'http://localhost/airspace/service/', 'airspace') , 
	'transport'   => 'postMessage',
	 'js_vars'     => array(
        array(
            'element'  => '#ideas_link a',
            'function' => 'text',
            'attr'     => 'href',
        ),
    )
	
) );

/* End of frontpage_section2 */

/* Start of frontpage_section3 */
Kirki::add_section( 'frontpage_section3', array(
    'title'          => esc_attr__( 'Services', 'airspace' ),
    'description'    => esc_attr__( 'Describe your various services', 'airspace' ),
    'panel'          => 'frontpage_panel',
) );



Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'     => 'text',
	'settings' => 'services_title',
	'label'    => __( 'Title', 'airspace' ),
	'description' => esc_html__( 'Insert a title', 'airspace' ),
	'section'  => 'frontpage_section3',
	'default' => esc_html__('OUR SERVICES', 'airspace'),
	
	'partial_refresh' => array(
       'services_title' => array(
             'selector' => '#services_title',
             'render_callback' => function(){

             	 echo get_theme_mod('services_title');
             }
       )
	),
	
) );


Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'     => 'editor',
	'settings' => 'services_subheading',
	'label'    => __( 'Description', 'airspace' ),
	'description' => __( 'Insert a description of this section', 'airspace' ),
	'section'  => 'frontpage_section3',
	'default'  => esc_attr__( 'We love the Web and the work we do.We work closely with our clients to deliver the best possible solutions for their needs', 'airspace' ),
	'partial_refresh' => array(
       'services_subheading' => array(
             'selector' => '#services_subheading',
             'render_callback' => function(){

             	return get_theme_mod('services_subheading');
             },
       )
	),
	
) );



Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Services Blocks', 'airspace' ),
	'section'     => 'frontpage_section3',
	'row_label' => array(
		'type'  => 'field',
		'value' => esc_attr__('Block', 'airspace' ),
		'field' => 'icon_value',
	),
	'button_label' => esc_attr__('Add New Block', 'airspace' ),
	'settings'     => 'services_blocks',
	'default'      => array(
		array(
			'icon_value' => esc_attr__( 'coffee', 'airspace' ),
			'title'  => esc_attr__( 'BRANDING', 'airspace' ),
			'text'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'airspace' )
		),
		array(
			'icon_value' => esc_attr__( 'compass', 'airspace' ),
			'title'  => esc_attr__( 'WEB DESIGN', 'airspace' ),
			'text'   => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'airspace' )
		),
	),
	'fields' => array(
		'icon_value' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Icon Value', 'airspace' ),
			'description' => esc_attr__( 'Insert icon name for this block', 'airspace' ),
			'default'     => ''
		),
		'title' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Title', 'airspace' ),
			'description' => esc_attr__( 'Insert a title for this block', 'airspace' ),
			'default'     => '',
		),
		'text' => array(
			'type'        => 'textarea',
			'label'       => esc_attr__( 'Description', 'airspace' ),
			'description' => esc_attr__( 'Describe briefly about this block', 'airspace' ),
			'default'     => '',
		),
	)
) );



/* End of frontpage_section3 */

/* start of frontpage_section4 */

Kirki::add_section( 'frontpage_section4', array(
    'title'          => esc_attr__( 'Order and Visibility', 'airspace' ),
    'description'    => esc_attr__( 'Rearrange the display order of the sections', 'airspace' ),
    'panel'          => 'frontpage_panel',
) );

Kirki::add_field( 'airspace_kirki_config_id', array(
	'type'        => 'sortable',
	'settings'    => 'sortable_blocks',
	'label'       => __( 'Order of display and visibility', 'airspace' ),
	'section'     => 'frontpage_section4',
	'default'     => array(
		'aboutus',
		'ideas',
		'services'
	),
	'choices'     => array(
		'aboutus' => esc_attr__( 'About Us', 'airspace' ),
		'ideas' => esc_attr__( 'Ideas', 'airspace' ),
		'services' => esc_attr__( 'Services', 'airspace' ),
	),
) );



/* End of frontpage_section4 */
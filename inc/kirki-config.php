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
             'selector' => 'p#about_content',
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

/* End of frontpage_section2 */
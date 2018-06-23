<?php
function airspace_custom_css(){
  $test_color              =  get_theme_mod('test_color');
  $test_hover_color        =  get_theme_mod('test_hover_color');
  $sample_toggle_switch    = get_theme_mod('sample_toggle_switch');
  $header_image_url        = get_header_image();
  $bg_post_id               = get_theme_mod('ideas_image');

	?>

	<style type="text/css">
		
		.navigation .navbar .navbar-nav  li  a {
          color : <?php echo $test_color;  ?> ;
		}
		.navigation .navbar .navbar-nav  li  a:hover{
         color : <?php echo $test_hover_color; ?> ;

		}

		.switch-toggle{

			display : <?php echo ($sample_toggle_switch)? 'block' : 'none'; ?> ;
		}

		.slider {
		  background: url("<?php echo $header_image_url; ?>") no-repeat; 
		  background-size: cover;
		  background-attachment: fixed;
		  background-position: 10% 0%;
		  padding: 200px 0 280px 0;
		  position: relative;
		}
        
        /*
		.bg-2{
           background: url("<?php //echo wp_get_attachment_url( $bg_post_id ) ?>");
           background-size: cover;
           background-attachment: fixed;
		}
       */
	</style>

<?php
}
add_action( 'wp_head', 'airspace_custom_css' );
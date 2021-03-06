<?php
function airspace_custom_css(){
  $test_color              =  get_theme_mod('test_color');
  $test_hover_color        =  get_theme_mod('test_hover_color');
  $sample_toggle_switch    = get_theme_mod('sample_toggle_switch');
  $header_image_url        = get_header_image();
  $ideas_background        = get_theme_mod('ideas_background');

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

        
		
	</style>

<?php
}
add_action( 'wp_head', 'airspace_custom_css' );
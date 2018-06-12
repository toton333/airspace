<?php
function airspace_custom_css(){
  $test_color              =  get_theme_mod('test_color');
  $test_hover_color        =  get_theme_mod('test_hover_color');
  $sample_toggle_switch    = get_theme_mod('sample_toggle_switch');

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

	</style>

<?php
}
add_action( 'wp_head', 'airspace_custom_css' );
<?php
function airspace_custom_link_color(){
  $test_color       =  get_theme_mod('test_color');
  $test_hover_color =  get_theme_mod('test_hover_color');

	?>

	<style type="text/css">
		
		.navigation .navbar .navbar-nav  li  a {
          color : <?php echo $test_color;  ?> ;
		}
		.navigation .navbar .navbar-nav  li  a:hover{
         color : <?php echo $test_hover_color; ?> ;

		}

	</style>

<?php
}
add_action( 'wp_head', 'airspace_custom_link_color' );
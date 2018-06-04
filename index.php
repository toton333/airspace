

<?php
 get_header(); 

 $blog_layout = get_theme_mod( 'blog_layout_setting_id', 'grid' );


$blog_class = $blog_layout == 'full' ? 'col-md-8 col-md-offset-2' : 'col-md-8';

 ?>


<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<?php 
               

               	 if($blog_layout == 'left' ){
               	 	echo '<div class="col-md-4"><aside class="sidebar">';
                    get_sidebar( );
                    echo '</div></aside>';
                   
               	 }

               	 if($blog_layout != 'grid'){
                     echo '<div class="'.$blog_class.'" >';
               	 }
               	  
               	  //starting the loop
               	   if ( have_posts() ) :
				
					while ( have_posts() ) : the_post();

						if($blog_layout == 'grid'){
                           get_template_part('template-parts/post/content' , get_post_format());
						}else{
                           get_template_part('template-parts/post/content-nongrid' , get_post_format());
						}

					endwhile;
					?>

						

					<?php 

		               	 if($blog_layout != 'grid'){
		               	 	echo '</div>';
		               	 }

	               	 if($blog_layout == 'right' ){

	                    echo '<div class="col-md-4"><aside class="sidebar">';
                        get_sidebar();
                        echo '</div></aside>';
	               	 }

			?>

		
								
          </div>
          <div class="text-center">
				<?php
				 the_posts_pagination(
				 	array(
				 		'type' => 'list',
				 		'screen_reader_text' => ' ',
				 		'prev_text' => __('Prev', 'airspace'),
				 		'next_text' => __('Next', 'airspace')
				 ));  
				 ?>
			
	        </div>
	    <?php	
	             else :

				    get_template_part( 'template-parts/content', 'none' );

			    endif;
	    ?>
		
  </div>
</div>


<?php get_footer(); ?>
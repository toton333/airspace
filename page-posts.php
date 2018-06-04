

<?php
 get_header(); 

 ?>


<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<?php 

			/*
			  to get pagination in custom post, gotta use query_posts with paged
			 */

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			    query_posts(
			        array(
			            'post_type'=>'post',
			            'orderby'=>'date',
			            'paged'=>$paged
			        )
			    );
               
               	  
               	  //starting the loop
               	   if ( have_posts() ) :
				
					while (have_posts() ) : the_post();

                       get_template_part('template-parts/post/content' , get_post_format());
						
					endwhile;
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

		    endif; wp_reset_query(); 
	    ?>
		
  </div>
</div>


<?php get_footer(); ?>
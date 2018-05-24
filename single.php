<?php get_header(); ?>

<section class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="post post-single">

					<?php while(have_posts() ) : the_post(); ?>
                     <?php
                      get_template_part('template-parts/post/single', get_post_format()) ;
                      if(comments_open()):
                      	comments_template();
                      endif;
                      ?>
					  
                    <?php endwhile; ?>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
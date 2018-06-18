<?php get_header(); ?>

<section class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="post post-single">

					<?php while(have_posts() ) : the_post(); ?>
                     <?php
                      the_content();
                      
                      ?>
					  
                    <?php endwhile; ?>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<section class="about section">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="block">
					<div id="about_title" class="section-title">
						<h2><?php echo get_theme_mod('about_title'); ?></h2>
					</div>
					<div id="about_content"><?php echo get_theme_mod('about_content'); ?></div>
				</div>
			</div><!-- .col-md-7 close -->
			<div class="col-md-5 col-sm-12">
				<div class="block about_image">
					<img id="about_image"  src="<?php echo esc_url( get_theme_mod('about_image') );  ?>" alt="Img">
        
				</div>
			</div><!-- .col-md-5 close -->
		</div>
	</div>
</section>
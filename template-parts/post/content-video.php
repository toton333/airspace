<?php
/*
	
@package airspace
-- video Post Format
*/
?>

<div class="col-md-6 ">
    <div class="post">
      <div class="post-media post-media-audio">
			
			<?php echo airspace_get_embedded_media( array('video','iframe') ); ?>
		</div>
      <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <div class="post-meta">
        <ul>
          <li>
            <i class="ion-calendar"></i> <?php echo airspace_posted_on(); ?>
          </li>
          <li>
            <i class="ion-android-people"></i> POSTED BY <?php airspace_posted_by(); ?>
          </li>
          <li>
            <i class="ion-pricetags"></i> <?php airspace_tags(); ?>
          </li>
          
        </ul>
      </div>
      <div class="post-content">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-main">Read More</a>
      </div>
	</div>
</div>

	
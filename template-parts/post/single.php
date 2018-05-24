<h2 class="post-title"><?php the_title(); ?></h2>
<div class="post-meta">
    <ul>
      <li>
        <i class="ion-calendar"></i> <?php echo airspace_posted_on(); ?>
      </li>
      <li>
        <i class="ion-android-people"></i> POSTED BY <?php airspace_posted_by(); ?>
      </li>
      <?php if(has_tag()): ?>
      <li>
        <i class="ion-pricetags"></i> <?php airspace_tags(); ?>
      </li>
      <?php endif; ?>
      
    </ul>
	</div>
<div class="post-thumb">
	<?php if ( has_post_thumbnail() ) : ?>
	    
	        <?php the_post_thumbnail('single'); ?>
	    
	<?php endif; ?>
</div>
<div class="post-content post-excerpt">
	<?php the_content(); ?>
</div>

				   
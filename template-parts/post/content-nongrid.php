<div class="post">
  <div class="post-media post-thumb">
    <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('non-grid'); ?>
            </a>
        <?php endif; ?>
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
            <?php if(has_tag()): ?>
            <li>
              <i class="ion-pricetags"></i> <?php airspace_tags(); ?>
            </li>
            <?php endif; ?>
            
          </ul>
    </div>
    <div class="post-content">
      <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-main">Continue Reading</a>
    </div>
</div>
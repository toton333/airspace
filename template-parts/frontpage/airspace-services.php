<section class="service">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2 id="services_title"><?php echo get_theme_mod('services_title'); ?></h2>
    
        <div id="services_subheading"><?php echo get_theme_mod('services_subheading'); ?></div>
      </div>
    </div>
    <div class="row ">

      <?php
         $services_blocks = get_theme_mod('services_blocks');
         foreach($services_blocks as $repeater_item) :
      ?>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="icon ion-<?php echo strtolower($repeater_item['icon_value']); ?>"></i>
          <h4><?php echo $repeater_item['title']; ?></h4>
          <p><?php echo $repeater_item['text']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
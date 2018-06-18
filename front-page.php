<?php
/* 
Template Name: Front page Template
*/
 get_header(); 
 ?>
<section class="about section">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="block">
					<div class="section-title">
						<h2><?php echo get_theme_mod('about_title'); ?></h2>
					</div>
					<p><?php echo get_theme_mod('about_content'); ?></p>
				</div>
			</div><!-- .col-md-7 close -->
			<div class="col-md-5 col-sm-12">
				<div class="block">
					<img src="<?php echo get_template_directory_uri(); ?>/images/wrapper-img.png" alt="Img">
				</div>
			</div><!-- .col-md-5 close -->
		</div>
	</div>
</section>
<section class="feature bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-6">
        <h2 class="section-subtitle">WE BELIEVE IN GREAT IDEAS</h2>
        <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <a href="#" class="btn btn-view-works">View Works</a>
      </div>
    </div>
  </div>
</section>

<!-- Service Start -->
<section class="service">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2>Our Services</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br> there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
      </div>
    </div>
    <div class="row ">
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="icon ion-coffee"></i>
          <h4>Branding</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-compass"></i>
          <h4>Web Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-image"></i>
          <h4>App Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-bug"></i>
          <h4>Start Up</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-headphone"></i>
          <h4>Logo Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-leaf"></i>
          <h4>Development</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-planet"></i>
          <h4>Brand Identity</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="service-item">
          <i class="ion-earth"></i>
          <h4>Brand Identity</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Call to action Start -->

<section class="call-to-action bg-1 section-sm overly">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h2>We design delightful digital experiences.</h2>
					<p>Read more about what we do and our philosophy of design. Judge for yourself The work and results <br> we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>
					<a class="btn btn-main btn-solid-border" href="#" >Tell Us Your Story</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Content Start -->
<section class="testimonial">
  <div class="container">
    <div class="row">
      <div class="section-title text-center">
        <h2>Fun Facts About Us</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,  <br> there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="block">
          <ul class="counter-box clearfix">
            <li>
              <div class="counter-item">
                <i class="ion-ios-chatboxes-outline"></i>
                <h4 class="counter">99</h4>
                <span>Cups Of Coffee</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <i class="ion-ios-glasses-outline"></i>
                <h4 class="counter">45</h4>
                <span>Article Written</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <i class="ion-ios-compose-outline"></i>
                <h4 class="counter">125</h4>
                <span>Projects Completed</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <i class="ion-ios-timer-outline"></i>
                <h4 class="counter">200</h4>
                <span>Combined Projects</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1">
        <div class="testimonial-carousel text-center">
          <div  class="testimonial-slider owl-carousel">
            <div>
              <i class="ion-quote"></i>
              <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
              <div class="user">
                <img src="images/item-img1.jpg" alt="Pepole">
                <p><span>Rose Ray</span> CEO-Themefisher</p>
              </div>
            </div>
            <div>
              <i class="ion-quote"></i>
              <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
              <div class="user">
                <img src="images/item-img1.jpg" alt="Pepole">
                <p><span>Rose Ray</span> CEO-Themefisher</p>
              </div>
            </div>
            <div>
              <i class="ion-quote"></i>
              <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
              <div class="user">
                <img src="images/item-img1.jpg" alt="Pepole">
                <p><span>Rose Ray</span> CEO-Themefisher</p>
              </div>
            </div>
            <div>
              <i class="ion-quote"></i>
              <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
              <div class="user">
                <img src="images/item-img1.jpg" alt="Pepole">
                <p><span>Rose Ray</span> CEO-Themefisher</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <?php get_footer(); 
?>
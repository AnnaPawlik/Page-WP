<?php

/**
 * @package wppage
 */
?>

<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up"><?php the_sub_field('hero_heading'); ?></h1>
        <h2 data-aos="fade-up" data-aos-delay="400"><?php the_sub_field('hero_text'); ?></h2>
        <div class="text-start" data-aos="fade-up" data-aos-delay="600">
          <?php $button = get_sub_field('hero_link'); ?>
          <?php if ($button) : ?>
            <a href="<?php echo $button['link']; ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span><?php echo $button['link_name']; ?></span>
              <i class="fa-solid fa-arrow-right-long"></i>
            </a>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?php the_sub_field('hero_image'); ?>" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->
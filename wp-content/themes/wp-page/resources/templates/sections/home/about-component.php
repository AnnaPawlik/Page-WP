<?php

/**
 * @package wppage
 */
?>

<section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gx-0">
      <div class="col-lg-6 d-flex flex-column justify-content-center px-xl-0" data-aos="fade-up" data-aos-delay="200">
        <div class="about__content">
          <h3><?php the_sub_field('about_content'); ?></h3>
          <h2><?php the_sub_field('about_heading'); ?></h2>
          <p><?php the_sub_field('about_text'); ?></p>
          <div class="text-start">
            <?php $button = get_sub_field('about_link'); ?>
            <?php if ($button) : ?>
              <a href="<?php echo $button['link']; ?>" class="btn-get-started d-inline-flex align-items-center justify-content-center align-self-center mt-0">
                <span><?php echo $button['link_name']; ?></span>
                <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center pl-xl-0" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?php the_sub_field('about_image'); ?>" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section><!-- End About Section -->
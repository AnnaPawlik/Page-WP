<?php

/**
 * @package wppage
 */
?>

<section id="features" class="features">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2><?php the_sub_field('features_heading'); ?></h2>
      <p><?php the_sub_field('features_title'); ?></p>
    </header>

    <div class="row">

      <div class="col-lg-6">
        <img src="<?php the_sub_field('features_image'); ?>" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
        <div class="row align-self-center gy-4">

          <?php if (get_sub_field('cards_repeater')) :
            while (have_rows('cards_repeater')) : the_row(); ?>
              <div class="col-md-6 mb-3" data-aos="zoom-out" data-aos-delay="<?php echo get_row_index() * 100; ?>">
                <div class="features__box d-flex align-items-center">
                  <i class="fa-sharp fa-solid fa-check"></i>
                  <h3><?php the_sub_field('repeater_text'); ?></h3>
                </div>
              </div>
          <?php endwhile;
          endif; ?>
        </div>
      </div>

    </div> <!-- / row -->

    <!-- Feature Icons -->
    <div class="row features__icons" data-aos="fade-up">
      <h3 class="text-center mx-auto"><?php the_sub_field('feature_title'); ?></h3>
      <div class="row">
        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
          <img src="<?php the_sub_field('features_image_second'); ?>" class="img-fluid p-4" alt="">
        </div>
        <div class="col-xl-8 d-flex features__icons-content">
          <div class="row align-self-center gy-4">
            <?php if (get_sub_field('features_repeater')) :
              while (have_rows('features_repeater')) : the_row(); ?>
                <div class="col-md-6 icon-box" data-aos="zoom-out" data-aos-delay="<?php echo get_row_index() * 100; ?>">
                  <div>
                    <h4><?php the_sub_field('features_repeater_title'); ?></h4>
                    <p><?php the_sub_field('features_repeater_content'); ?></p>
                  </div>
                </div>
            <?php endwhile;
            endif; ?>
          </div>
        </div>

      </div>

    </div><!-- End Feature Icons -->

  </div>

</section><!-- End Features Section -->
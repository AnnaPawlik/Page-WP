<?php

/**
 * @package wppage
 */
?>
<section id="team" class="team">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2><?php the_sub_field('team_heading'); ?></h2>
      <p><?php the_sub_field('team_title'); ?></p>
    </header>

    <div class="row gy-4">
      <?php if (get_sub_field('team_repeater')) :
        while (have_rows('team_repeater')) : the_row(); ?>
          <div class="col-lg-3 col-md-6 d-flex mb-4 align-items-stretch" data-aos="fade-up" data-aos-delay="<?php echo get_row_index() * 100; ?>">
            <div class="team__member">
              <div class="team__member-img">
                <img src="<?php the_sub_field('person_image'); ?>" class="img-fluid" alt="">
              </div>
              <div class="team__member-info">
                <h4><?php the_sub_field('person_name'); ?></h4>
                <span><?php the_sub_field('person_job'); ?></span>
                <p><?php the_sub_field('person_description'); ?></p>
              </div>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </div>

  </div>

</section><!-- End Team Section -->
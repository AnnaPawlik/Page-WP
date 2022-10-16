<?php

/**
 * @package wppage
 */
?>

<section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2><?php the_sub_field('value_content'); ?></h2>
      <p><?php the_sub_field('value_heading'); ?></p>
    </header>

    <div class="row">
      <?php if (get_sub_field('value_cards')) :
        while (have_rows('value_cards')) : the_row();
      ?>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="<?php echo get_row_index() * 200;?>">
            <div class="values__box">
              <img src="<?php the_sub_field('value_image'); ?>" class="img-fluid" alt="">
              <h3><?php the_sub_field('value_title'); ?></h3>
              <p><?php the_sub_field('value_text'); ?></p>
            </div>
          </div>
      <?php endwhile;
      endif; ?>

    </div>

  </div>

</section><!-- End Values Section -->
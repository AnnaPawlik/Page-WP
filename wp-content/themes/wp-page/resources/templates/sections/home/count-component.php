<?php

/**
 * @package wppage
 */
?>

<section id="counts" class="count">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">
      <?php if(get_sub_field('counter')): 
      while(have_rows('counter')) : the_row();
      ?>
      <div class="col-lg-3 col-md-6 mb-3">
        <div class="count__box">
          <div>
            <span data-purecounter-start="0" data-purecounter-end="<?php the_sub_field('count'); ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php the_sub_field('counter_title'); ?></p>
          </div>
        </div>
      </div>
      <?php endwhile;
      endif;?>
    </div>

  </div>
</section><!-- End Counts Section -->
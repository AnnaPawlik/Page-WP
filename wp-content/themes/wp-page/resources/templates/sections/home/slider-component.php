<?php

/**
 * @package wppage
 */
?>
<section id="clients" class="clients">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2><?php the_sub_field('slider_heading'); ?></h2>
      <p><?php the_sub_field('slider_title'); ?></p>
    </header>

    <div class="clients-slider slider mt-6">
      <?php if (get_sub_field('slider_repeat')) :
        while (have_rows('slider_repeat')) : the_row();
      ?>
        <img src="<?php the_sub_field('slider_image');?>" alt="" class="mx-auto">
      <?php endwhile;
      endif; ?>
    </div>
  </div>

</section><!-- End Clients Section -->
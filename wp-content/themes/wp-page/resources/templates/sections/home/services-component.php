<?php

/**
 * @package wppage
 */
?>

<section id="services" class="services">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2><?php the_sub_field('services_heading'); ?></h2>
      <p><?php the_sub_field('services_title'); ?></p>
    </header>

    <div class="row gy-4">
      <?php
      $args = array(
        'post_type' => 'services',
        'tax_query' => array(
          array(
            'taxonomy' => 'services_category',
            'field'    => 'slug',
            'terms'    => 'Personal',
          ),
        ),
      );
      $query = new WP_Query($args);
      while ($query->have_posts()) : $query->the_post();
      ?>
        <?php get_template_part('resources/templates/content/content', 'services'); ?>
      <?php endwhile;
      wp_reset_query(); ?>

    </div>

  </div>

</section><!-- End Services Section -->
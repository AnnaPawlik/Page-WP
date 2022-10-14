<?php

/**
 * Template for displaying search result
 *
 * 
 */
?>
<?php

/**
 * The most generic template file in hierarchy.
 *
 * 
 */
?>
<?php get_header(); ?>
<main id="main">
  <section class="breadcrumbs">
    <div class="container">
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb();
      }
      ?>
      <h2><?= __('Blog', 'wppage'); ?></h2>
    </div>
  </section><!-- End Breadcrumbs -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-8 blog__entries">
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('resources/templates/content/content', 'post'); ?>
          <?php endwhile; ?>

          <div class="blog__pagination">
            <?php wp_pagenavi(); ?>
          </div>

        </div><!-- End blog entries list -->

        <div class="col-lg-4">
          <?php get_template_part('resources/templates/global/aside-component'); ?>
        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Section -->
</main>
<?php get_footer(); ?>
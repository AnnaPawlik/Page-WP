<?php

/**
 * @package wppage
 */
?>

<aside class="blog__sidebar">
  <h3 class="blog__sidebar-title"><?= __('Search', 'wppage'); ?></h3>
  <div class="blog__sidebar-item search-form">
    <?php get_search_form(); ?>
  </div><!-- End sidebar search formn-->

  <div class="blog__sidebar-item blog__sidebar-categories">
    <ul>
      <?php wp_list_categories(array(
        'orderby' => 'name',
        'show_count' => true,
        'title_li' => '<h3 class="blog__sidebar-title">' . __('Categories', 'wppage') . '</h4>'
      )); ?>
    </ul>
  </div><!-- End sidebar categories-->

  <h3 class="blog__sidebar-title"><?= __('Recent Posts', 'wppage'); ?></h3>
  <div class="blog__sidebar-item blog__sidebar-recent-posts">
    <?php $args = array(
      'post_type' => 'post',
      'post_per_page' => 5
    );
    $news = new WP_Query($args);
    while ($news->have_posts()) : $news->the_post();
    ?>
      <?php get_template_part('resources/templates/content/content', 'recent-post'); ?>
    <?php endwhile;
    wp_reset_query(); ?>
  </div><!-- End sidebar recent posts-->

  <h3 class="blog__sidebar-title"><?= __('Tags', 'wppage'); ?></h3>
  <div class="blog__sidebar-item blog__sidebar-tags">
    <?php
    $tags = get_tags(array(
      'hide_empty' => false
    ));
    echo '<ul>';
    foreach ($tags as $tag) {
      echo '<li><a href="' . get_tag_link($tag->term_id) . '"> ' . $tag->name . '</a></li>';
    }
    echo '</ul>';
    ?>
  </div><!-- End sidebar tags-->

</aside><!-- End sidebar -->
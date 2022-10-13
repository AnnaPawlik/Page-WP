<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'post_thumbnail'); ?>
<div class="blog__post-item clearfix d-flex align-items-center">
  <?php if ($thumbnail) : ?>
    <img src="<?php echo $thumbnail[0]; ?>" alt="">
  <?php endif; ?>
  <div class="ml-3">
    <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
    <span class="d-block font-italic"><?php the_time('F j, Y'); ?></span>
  </div>
</div>
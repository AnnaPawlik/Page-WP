<?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'post_image'); ?>
<article class="blog__post">
  <div class="blog__post-img">
    <?php if ($thumbnail) : ?>
      <img src="<?php echo $thumbnail[0]; ?>" alt="" class="img-fluid">
    <?php endif; ?>
  </div>

  <h2 class="blog__post-title p-0">
    <a href="blog-single.html"><?php the_title(); ?></a>
  </h2>

  <div class="blog__post-meta">
    <ul class="d-flex flex-wrap align-items-center m-0 p-0">
      <li class="d-flex align-items-center">
        <i class="fa-regular fa-user"></i>
        <a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a>
      </li>
      <li class="d-flex align-items-center">
        <i class="fa-regular fa-clock"></i>
        <a href="<?php the_permalink(); ?>"><?php echo the_time('j F Y'); ?></a>
      </li>
    </ul>
  </div>

  <div class="blog__post-content">
    <?php the_excerpt(); ?>
    <div class="read-more">
      <a href="<?php the_permalink(); ?>"><?= __('Read More', 'wppage'); ?></a>
    </div>
  </div>

</article><!-- End blog blog__post -->
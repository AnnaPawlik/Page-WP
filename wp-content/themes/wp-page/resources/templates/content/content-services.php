<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo get_row_index() * 200; ?>">
  <div class="services__box services__box--<?php the_field('color');?>">
    <h3><?php the_title(); ?></h3>
    <p><?php the_field('service_content'); ?></p>
    <a href="<?php the_permalink(); ?>" class="read-more"><span><?= __('Read more', 'wpage'); ?></span></a>
  </div>
</div>
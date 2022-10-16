<?php

/**
 * 
 */
?>
<header id="header" class="header fixed-top">
  <div class="container container-xl d-flex align-items-center justify-content-between">

    <a href="<?php bloginfo('url'); ?>" class="header__logo d-flex align-items-center">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/logo/logo.png" alt="">
      <span><?= __('FlexStart', 'wppage'); ?></span>
    </a>

    <nav id="navbar" class="navbar d-lg-block d-none">
      <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'ul')); ?>
    </nav><!-- .navbar -->
    <div class="ml-auto d-lg-none text-right">
      <div class="header__hamburger position-relative">
        <span class="line-menu"></span>
        <span class="line-menu"></span>
        <span class="line-menu"></span>
      </div>
    </div>
  </div>
  <div class="navbar overlay-menu">
    <div class="container">
      <div class="row flex-column">
        <nav class="col-12">
          <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'ul')); ?>
        </nav>
      </div>
    </div>
  </div>
</header><!-- End Header -->
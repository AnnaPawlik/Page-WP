<?php

/**
 * 
 */
?>

<footer id="footer" class="footer">

  <div class="footer__newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h4><?php the_field('newsletter_heading', 'options'); ?></h4>
          <p><?php the_field('newsletter_text', 'options'); ?></p>
        </div>
        <div class="col-lg-6">
          <?php echo do_shortcode('[contact-form-7 id="5" title="Newsletter"]'); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="footer__top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer__top-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/logo/logo.png" alt="">
            <span><?= __('FlexStart', 'wppage'); ?></span>
          </a>
          <p><?php the_field('footer_text', 'options'); ?></p>
          <div class="social-links mt-3">
            <a href="<?php the_field('twitter_link', 'options'); ?>" class="twitter"><i class="fa-brands fa-twitter"></i></a>
            <a href="<?php the_field('facebook_link', 'options'); ?>" class="facebook"><i class="fa-brands fa-facebook"></i></a>
            <a href="<?php the_field('instagram_link', 'options'); ?>" class="instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="<?php the_field('linkedin_link', 'options'); ?>" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer__links">
          <h4><?= __('Useful Links', 'wppage'); ?></h4>
          <?php wp_nav_menu(array('theme_location' => 'footer_links', 'container' => 'ul')); ?>
        </div>

        <div class="col-lg-2 col-6 footer__links">
          <h4><?= __('Our Services', 'wppage'); ?></h4>
          <?php wp_nav_menu(array('theme_location' => 'footer_services', 'container' => 'ul')); ?>
        </div>

        <div class="col-lg-3 col-md-12 footer__contact text-left text-md-start">
          <h4><?= __('Contact Us', 'wppage'); ?></h4>
          <p class="m-0"><?php the_field('contact', 'options'); ?></p>
          <p class="m-0"><strong><?= __('Phone:', 'wppage'); ?></strong> <a href="tel:<?= filter_var(get_field('phone', 'options'), FILTER_SANITIZE_NUMBER_INT); ?>"><?php the_field('phone', 'options'); ?></a></p>
          <p><strong><?= __('Email:', 'wppage'); ?></strong> <a href="mailto:<?php echo antispambot(get_field('email', 'options'), 1); ?>"><?php the_field('email', 'options'); ?></a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; <?php the_field('copyright', 'options'); ?></div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
      <?= __('Designed by ', 'wppage'); ?><a href="https://bootstrapmade.com/"><?= __('BootstrapMade', 'wppage'); ?></a>
    </div>
  </div>
</footer><!-- End Footer -->
<?php

/**
 * @package wppage
 */
?>

<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2><?= __('Contact', 'wppage'); ?></h2>
      <p><?= __('Contact Us', 'wppage'); ?></p>
    </header>

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6 mb-4">
            <div class="contact__info-box">
              <i class="fa-solid fa-location-dot"></i>
              <h3><?= __('Address', 'wppage'); ?></h3>
              <p><?php the_sub_field('contact_address'); ?></p>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="contact__info-box">
              <i class="fa-solid fa-phone"></i>
              <h3><?= __('Call Us', 'wppage'); ?></h3>
              <a href="tel:<?= filter_var(get_sub_field('contact_phone'), FILTER_SANITIZE_NUMBER_INT); ?>"><?php the_sub_field('contact_phone'); ?></a>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="contact__info-box">
              <i class="fa-solid fa-envelope"></i>
              <h3><?= __('Email Us', 'wppage'); ?></h3>
              <a href="mailto:<?php echo antispambot(get_sub_field('contact_email'), 1); ?>"><?php the_sub_field('contact_email'); ?></a>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="contact__info-box">
              <i class="fa-solid fa-clock"></i>
              <h3><?= __('Open Hours', 'wppage'); ?></h3>
              <p><?php the_sub_field('contact_hours'); ?></p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <?php echo do_shortcode('[contact-form-7 id="132" title="Contact form"]'); ?>
      </div>

    </div>

  </div>

</section><!-- End Contact Section -->
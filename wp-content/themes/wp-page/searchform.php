<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
  <input type="hidden" name="post_type" value="post">
  <input type="text" class="field wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-search" name="s" id="s"/>
  <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'wppage'); ?>" />
</form>
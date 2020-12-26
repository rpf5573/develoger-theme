<div class="logo text-logo">
  <a href="<?php echo home_url('/'); ?>" class="title ularge no-margin"> <?php
    if ( $args['icon'] ) : ?>
      <i class="fa <?php echo $args['icon']; ?>"></i> <?php
    endif;
    bloginfo('name'); ?><span class="dot"></span>
  </a>
</div>
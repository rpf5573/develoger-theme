<?php
$dt_options = develoger_get_theme_options();
$home = home_url('/'); ?>

<footer id="footer"> <?php
  if( epcl_get_option('copyright_text') ): ?>
    <div class="published"> <?php
      echo wp_kses_post( $dt_options['copyright_text'] ); ?>
    </div> <?php
  endif; ?>
  <a id="back-to-top" class="button"><i class="fa fa-angle-up"></i></a>
  <div class="clear"></div>
</footer>
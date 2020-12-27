<div class="post-format-wrapper featured-image cover">
  <img src="<?php echo DEVELOGER_THEMEPATH; ?>/assets/images/transparent.gif" data-src="<?php echo $args['thumbnail_url']; ?>" alt="<?php echo $args['title']; ?>" class="lazy fullwidth">
  <div class="info"> <?php
    if ($args['enable_title']) : ?>
      <h1 class="title large"><?php echo $args['title']; ?></h1> <?php
    endif; ?>
  </div>
</div>
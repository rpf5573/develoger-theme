<?php

$image_id = get_post_thumbnail_id( get_the_ID() );
$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);
if( !$image_alt ){
  $image_alt = get_the_title();
} ?>

<div class="featured-image">
  <div class="develoger-loader"> <?php
    the_post_thumbnail( 'develoger-single-featured-image', array('class' => 'fullwidth', 'data-lazy' => 'false') ); ?>
  </div>
</div>
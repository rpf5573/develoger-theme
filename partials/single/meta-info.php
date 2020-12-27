<?php
$author_id = get_the_author_meta('ID');
$user_meta = get_user_meta( $author_id, 'develoger_user', true );
$author_avatar = get_avatar_url( get_the_author_meta('email') );
if (!empty($user_meta) && !empty($user_meta['avatar']) && $user_meta['avatar']['url'] != '') {
  $author_avatar = $user_meta['avatar']['url'];
}
$author_name = get_the_author();
$reading_time = develoger_reading_time( get_the_content() ); ?>

<div class="meta">
  <a href="<?php echo get_author_posts_url($author_id); ?>" title="<?php echo '글쓴이 : ' . $author_name; ?>" class="author meta-info hide-on-mobile"> <?php
    if ($author_avatar) : ?>
      <span class="author-image cover lazy" data-src="<?php echo esc_url($author_avatar); ?>"></span> <?php
    endif; ?>
    <span class="author-name"><?php echo esc_attr($author_name); ?></span>
  </a>
  <time class="meta-info-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option('date_format') ); ?></time>
  <div class="clear"></div>
</div>
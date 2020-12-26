<?php
get_header();

$post_class = '';
$post_meta = get_post_meta( get_the_ID(), 'develoger_page', true );
if( !has_post_thumbnail() ){
  $page_class .= ' no-thumb';
} else {
  $page_class .= ' fullcover';
} ?>

<!-- start: #page -->
<main id="page" class="main grid-container"> <?php
  if (have_post()) { the_post(); } ?>
  <!-- start: #single -->
  <div id="single" class="content <?php echo $page_class; ?>"></div> <?php
  if ( has_post_thumbnail() ): ?>
    <div class="post-format-wrapper featured-image cover">
      <img src="<?php echo DEVELOGER_THEMEPATH; ?>/assets/images/transparent.gif" alt="">
    </div>
</main>
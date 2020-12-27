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
  if (have_post()) : the_post(); ?>
    <!-- start: #single -->
    <div id="single" class="content <?php echo $page_class; ?>"> <?php
      if ( has_post_thumbnail() ):
        $args = array(
          'thumbnail_url' =>  get_the_post_thumbnail_url( get_the_ID(), 'full' ),
          'enable_title' => $post_title['enable_title'],
          'title' => get_the_title()
        );
        echo get_template_part( 'partials/page', 'featured-image', $args );
      endif;?>

      <!-- start: .develoger-page-wrapper -->
      <div class="develoger-page-wrapper clearfix row">

        <!-- start: .left-content -->
        <div class="left-content grid-70 np-mobile">
          <article <?php post_class('main-article'); ?>>
            <section class="post-content"> <?php
              if (!has_post_thumbnail() && $post_meta['enable_title']) : ?>
                <h1 class="title large bordered"><?php the_title(); ?></h1> <?php
              endif; ?>
              <div class="text"> <?php the_content(); ?> </div>
              <div class="clear"></div>
            </section>
          </article>
        </div>
        <!-- end: .left-content -->
        
      </div>
      <!-- end: .develoger-page-wrapper -->
      
    </div>
    <!-- end: #single --> <?php
  endif;?>
</main>

<!-- end: #page --> <?php
get_footer(); ?>
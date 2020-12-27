<?php

get_header();

while(have_posts()): the_post();
  $post_id = get_the_ID();
  $post_thumbnail = get_the_post_thumbnail_url();
  $post_format = get_post_format();

  $post_style = 'fullcover';
  $post_meta = get_post_meta( $post_id, 'develoger_post', true );
  $views = isset($post_meta['views_counter']) ? $post_meta['views_counter'] : 0;
  $post_meta = array( 'views_counter' => $views+1 );
  update_post_meta( $post_id, 'develoger_post', $post_meta );
  $post_thumbnail = get_the_post_thumbnail_url($post_id, 'develoger_page_header');
  $title = get_the_title(); ?>

  <!-- start: #single -->
  <main id="single" class="main grid-container">
    <div class="content row">
      <div class="develoger-page-wrapper">
        <div class="left-content grid-70 np-mobile">
          <article <?php post_class('main-article'); ?>>
            <h1 class="main-title title"><?php the_title(); ?></h1> <?php
            echo get_template_part('partials/single', 'meta-info');
            echo get_template_part( 'partials/single', 'featured-image' ); ?>
            <section class="post-content">
              <div class="text"> <?php the_content(); ?> </div>
              <div class="clear"></div> <?php
              if (get_the_category()) {
                echo get_template_part( 'partials/single', 'category' );
              } ?>
            </section>
          </article>
        </div>
      </div>
    </div>
  </main>

endwhile;
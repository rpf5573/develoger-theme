<?php
$wp_query = $args['wp-query'] ?>

<div class="separator last hide-on-tablet hide-on-mobile"></div>
<div class="clear"></div>
<!-- start: .epcl-pagination -->
<div class="epcl-pagination section">
  <div class="nav"> <?php
    echo get_previous_posts_link( esc_html__('Previous', 'veen') ); ?>
    <span class="page-number"> <?php
      esc_html_e('Page', 'veen'); ?> <?php echo max(1, get_query_var('paged') );
      esc_html_e('of', 'veen'); ?> <?php echo intval($wp_query->max_num_pages); ?>
    </span> <?php
    echo get_next_posts_link( esc_html__('Next', 'veen') ); ?>
  </div>
</div>
  <!-- end: .epcl-pagination -->
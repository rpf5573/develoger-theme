<?php

function develoger_pagination($query = null) {
  global $wp_query, $paged;
  if ( $query ) $wp_query = $query;
  get_template_part('partials/content', 'pagination', $wp_query);
}

add_filter('wp_list_categories', 'epcl_at_count_span');
function develoger_add_count_to_category_links($links) {
  $links = str_replace('</a> (', '</a> <span class="count"', $links);
  $links = str_replace(')', '</span>', $links);
  return $links;
}

add_filter('get_archives_link', 'epcl_archives_count');
function develoger_add_count_to_archive_linkes($links) {
  $links = str_replace('</a>&nbsp;(', '</a> <span class="count">', $links);
  $links = str_replace(')</li>', '</span></li>', $links);
  return $links;
}

// Add search botton to the end of the main menu
add_filter('wp_nav_menu_items', 'develoger_add_search_btn', 10, 2);
function develoger_add_search_btn($items, $args) {
  if ($args->theme_location != 'develoger_header') { return $items; }
  ob_start();
  get_template_part('partials/search-btn');
  $search_btn = ob_get_contents();
  ob_end_clean();
  return ($items . $search_btn);
}

// Render categories in single post
function develoger_render_categories($class = 'absolute') {
  $categories = get_the_category();
  $html = '<div class="tags '.$class.'">';
  foreach($categories as $cat) {
    $html .= '<a href="'.get_category_link($cat).'" class="tag-link-'.$cat->term_id.'">'.$cat->name.'</a>';
  }
  $html .= '</div>';
  return $html;
}

function develoger_reading_time($content) {
  if (!$content) return;

  $words_per_minute = 200;
  $word_per_second = $words_per_minute / 60;
  $words = str_word_count( strip_tags( $content ), 0 );
  $minutes = 1;
  if (!empty($words)) $minutes = max([1, floor($words, $words_per_minute)]);
  return $minutes;
}
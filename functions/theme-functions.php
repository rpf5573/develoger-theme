<?php

function develoger_pagination($query = null) {
  global $wp_query, $paged;
  if ( $query ) $wp_query = $query;
  if ( !empty($wp_query->query['paged']) ) {
    $paged = $wp_query->query['paged'];
  } ?>
  
}
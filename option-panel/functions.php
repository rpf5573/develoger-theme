<?php

add_action('admin_enqueue_scripts', 'csf_option_panel_enqueue_scripts', 20 );  
function csf_option_panel_enqueue_scripts() {
  $prefix = DEVELOGER_THEMEPREFIX;
  $ver = '0.0.1';
  if (is_admin()) {
    if (!is_customizer_preview()) {
      wp_register_style($prefix . '-csf-custom-css', DEVELOGER_THEMEPATH . '/assets/dist/option-panel.css', null, $ver);
      wp_enqueue_style($prefix . '-csf-custom-css');
      wp_enqueue_script($prefix . '-csf-custom-modules', DEVELOGER_THEMEPATH . '/assets/dist/csf-modules.min.js', array('jQuery'), $ver, true);
    } else {
      wp_register_style($prefix . '-csf-customizer-css', DEVELOGER_THEMEPATH . '/assets/dist/customizer-panel.css', null, $ver);
      wp_enqueue_style($prefix . '-csf-customizer-css');
    }
  }
}

// Validate HEX color
function csf_validate_hex_color( $value ) {
  if( $value && !is_wp_error($value) ){
    if ( !sanitize_hex_color($value) && $value != 'transparent' && strpos( $value, 'rgb') === false ) {    
      return '유효한 색깔을 입력해주세요';
    }
  }
}

// Validate HEX color (exclude transparent)
function csf_validate_hex_color_transparent( $value ) {
  if( $value && !is_wp_error($value) ){
    if ( !sanitize_hex_color($value) && strpos( $value, 'rgb') === false ) {    
      return '유효한 색깔을 입력해주세요';
    }
  }
}

add_filter( 'csf_fa4', '__return_true' );
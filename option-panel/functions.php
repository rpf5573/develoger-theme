<?php

add_action('admin_enqueue_scripts', 'develoger_option_panel_enqueue_scripts', 20 );  
function develoger_option_panel_enqueue_scripts() {
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
function develoger_validate_hex_color( $value ) {
  if( $value && !is_wp_error($value) ){
    if ( !sanitize_hex_color($value) && $value != 'transparent' && strpos( $value, 'rgb') === false ) {    
      return 'Please write a valid color!', 'csf' );
    }
  }
}

add_filter( 'csf_fa4', '__return_true' );
<?php

if (!class_exists('develoger_theme_setup')) {
  class develoger_theme_setup {
    public function __construct() {
      /* Theme Include */
      add_action('after_setup_theme', array($this, 'includes'), 4);

      /* Add theme supports */
      add_action('after_setup_theme', array($this, 'theme_support'));

      /* Register nav menu */
      add_action('after_setup_theme', array($this, 'register_nav_menu'));
    }
    public function includes() { 
      require_once(DEVELOGER_ABSPATH . '/functions/enqueue-scripts.php');
      require_once(DEVELOGER_ABSPATH . '/functions/color-helper.php');
      require_once(DEVELOGER_ABSPATH . '/functions/theme-functions.php');
      require_once(DEVELOGER_ABSPATH . '/functions/core.php');
    }
    public function theme_support() {
      /* Thumbs */
      add_theme_support('post-thumbnails');
      add_theme_support('automatic-feed-links');
      add_theme_support('html5');
      add_theme_support('title-tag');
      add_theme_support('editor-styles'); // Gutenberg Support
      add_theme_support('align-wide');

      // Gutenberg에서도 front의 디자인을 적용한다
      add_editor_style( epcl_gutenberg_fonts_url() );
      add_editor_style( 'assets/dist/gutenberg.min.css' );

      $prefix = DEVELOGER_THEMEPREFIX.'_';
      add_image_size($prefix.'admin_thumb', 100, 100, false);
      add_image_size($prefix.'post', 950, 500, true);
      add_image_size($prefix.'single_standard', 1200, 500, true);
      add_image_size($prefix.'single_content', 700, 450, false);
      add_image_size($prefix.'page_header', 1950, 600, true);
      add_image_size($prefix.'large', 1600, 1200, false);
    }

    public function register_nav_menu() {
      register_nav_menus(array(
        'develoger_header' => 'Header'
      ));
    }
  }

  new develoger_theme_setup();
}
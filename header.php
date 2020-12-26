<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> <?php
  if (!function_exists('has_site_icon') && has_site_icon()): ?>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() . '/favicon.png'; ?>"/> <?php
  endif;
  wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- start: .mobile.main-nav -->
  <nav class="mobile main-nav hide-on-desktop-lg" role="navigation"> <?php
    $args = array('theme_location' => 'develoger_header', 'container' => false);
    if (has_nav_menu('develoger_header')) wp_nav_menu($args); ?>
  </nav>
  <!-- end: .mobile.main-nav -->

  <div class="menu-overlay hide-on-desktop"></div>

  <!-- start: #wrapper -->
  <div id="wrapper"> <?php
    get_template_part('partials/header'); ?>
</body>
</html>
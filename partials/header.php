<?php
$dt_options = develoger_get_theme_options(); // dv_options = develoger_theme_options
$home = home_url('/');
$header_class = ' enable-sticky'; ?>

<!-- start: #header -->
<header id="header" class="<?php echo $header_class; ?>">
  <div> <?php
    if (has_nav_menu('develoger_header')) : ?>
      <div class="menu-mobile">
        <svg class="icon ularge open"><use xlink:href="#menu-icon"></use></svg>
        <svg class="icon ularge close"><use xlink:href="#close-icon"></use></svg>
      </div> <?php
    endif; ?>

    <!-- start: .menu-wrapper -->
    <div class="menu-wrapper">
      <!-- start: .grid-container -->
      <div class="grid-container"> <?php
        
        // logo
        if (develoger_get_option('logo_type') == '1' && !empty($dt_options['logo_image']['url'])) {
          echo get_template_part('partials/logo', 'image', array('url' => $dt_options['logo_image']['url']));
        } else {
          echo get_template_part('partials/logo', 'text', array('icon' => $dt_options['logo_icon']));
        }
        
        // search button
        echo get_template_part('partials/search-btn', 'header'); ?>
        
        <!-- start: .main-nav -->
        <nav class="main-nav"> <?php
          $args = array(
            'theme_location' => 'develoger_header',
            'container' => false
          );
          if (has_nav_menu('develoger_header')) wp_nav_menu($args); ?>
        </nav>
        <!-- end: .main-nav -->
        
        <div class="clear"></div>
      </div>
      <!-- end: .grid-container --> 

      <div class="clear"></div>
    </div>

    <div class="clear"></div>
  </div>
</header>
<!-- end: #header -->

<div class="clear"></div> <?php

get_template_part('partials/search', 'screen');
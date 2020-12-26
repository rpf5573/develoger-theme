<?php

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
      <div class="grid-container">
        
      </div>
    </div>

  </div>
</header>
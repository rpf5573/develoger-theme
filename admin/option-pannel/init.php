<?php

if (!class_exists('CSF')) {
  require_once(DEVELOGER_ABSPATH . '/frameworks/codestar-framework.php');
}

$opt_name = DEVELOGER_OPTIONSLUG;
CSF::createOptions( $opt_name, array(
  // menu setting
  'menu_title' => 'Theme Options',
  'menu_slug' => 'develoger-theme-options',

  // menu extras
  'show_in_customizer' => true,

  // footer
  'footer_text' => '문의사항은 rpf5573@kakao.com 으로 연락주세요',

  // typography options
  'enqueue_webfont' => false,
  'async_webfont' => false,

  'theme' => 'light'
) );

require_once('sections/header.php');
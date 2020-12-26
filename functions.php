<?php
/*
* Variable usages:
*
* DEVELOGER_ABSPATH: template folder, includes files inside the theme
* DEVELOGER_THEMEPATH: includes relative file by http prottocol (url)
* DEVELOGER_THEMEPREFIX: Used for metaboxes and theme options panel. Must be equal to text domain.
*
*/

if( !defined('DEVELOGER_ABSPATH') ) define('DEVELOGER_ABSPATH', get_template_directory() );
if( !defined('DEVELOGER_THEMEPATH') ) define('DEVELOGER_THEMEPATH', get_template_directory_uri() );
if( !defined('DEVELOGER_THEMEPREFIX') ) define('DEVELOGER_THEMEPREFIX', 'develoger');
if( !defined('DEVELOGER_THEMENAME') ) define('DEVELOGER_THEMENAME', 'Develoger' );
if( !defined('DEVELOGER_THEMESLUG') ) define('DEVELOGER_THEMESLUG', 'develoger' ); // Do not change
if( !defined('DEVELOGER_OPTIONSLUG') ) define('DEVELOGER_THEMESLUG', 'develoger_option' ); // Do not change
if( !isset($content_width) ) $content_width = 668; // oembed width ?? 이게 뭐지?

require_once(DEVELOGER_ABSPATH . '/functions/theme-setup.php');
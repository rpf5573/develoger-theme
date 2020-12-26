<?php

$opt_name = DEVELOGER_OPTIONSLUG;
$primary_color = '#FF486A';
$secondary_color = '#7169FE';
$text_color = '#596172';
$border_color = '#eee';
$input_bg_color = '#f9f9f9';
$black = '#242323';
$white = '#ffffff';

/* Header */
CSF::createSection( $opt_name, array(
	'title' => 'Header',
	'icon' => 'fa fa-columns',
	'fields' => array(
		array(
			'id' => 'title_header',
      'type' => 'subheading',
			'title' => 'Headers'
		),
		array(
			'id' => 'title_logo',
      'type' => 'subheading',
			'title' => 'Logo'
		),
		array(
			'id' => 'logo_type',
			'type' => 'button_set',
			'title' => 'Logo Type',
			'subtitle' => '',
      'desc' => 'Custom Logo를 사용하기 위해서는 Image 버튼을 클릭해주세요',
			'options' => array('1' => 'Image', '2' => 'Text'),
			'default' => '2'
		),
		array(
			'id' => 'logo_icon',
			'type' => 'icon',
			'dependency' => array('logo_type', '==', '2'),
			'title' => 'Logo icon (optional)',
			'desc' => 'e.g. fa-shield',
		),
		array(
			'id' => 'logo_icon_color',
			'type' => 'color',
			'dependency' => array('logo_type', '==', '2'),
			'title' => 'Logo Icon Color',
			'default' => $black,
			'transparent' => false
		),
		array(
			'id' => 'logo_text_color',
			'type' => 'color',
			'dependency' => array('logo_type', '==', '2'),
			'title' => 'Logo Text Color',
			'default' => $black,
			'transparent' => false
    ),
    array(
			'id' => 'logo_font_size_desktop',
      'type' => 'slider',
      'dependency' => array('logo_type', '==', '2'),
			'title' => 'Desktop Logo Font Size',
			'desc' => 'Default: 60 pixels.',
			'default' => '60',
			'min' => '9',
			'step' => '1',
        'max' => '100',
        'unit' => 'px',
      ),
    array(
		  'id' => 'logo_font_size_mobile',
      'type' => 'slider',
      'dependency' => array('logo_type', '==', '2'),
			'title' => 'Mobile Logo Font Size',
			'desc' => 'Default: 40 pixels.',
			'default' => '40',
			'min' => '9',
			'step' => '1',
      'max' => '100',
      'unit' => 'px',
		),
    // Image logo
		array(
			'id' => 'logo_image',
			'type' => 'media',
			'dependency' => array('logo_type', '==', '1'),
			'url' => true,
			'preview'=> true,
			'title' => 'Logo Uploader',
			'desc' => 'Recommended sizes - width: 320px, height: 120px.',
		),
	)
) );

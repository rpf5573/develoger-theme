<?php

$opt_name = DEVELOGER_OPTIONSLUG;

/* Footer */
CSF::createSection( $opt_name, array(
	'title' => 'Footer',
	'icon' => 'fa fa-columns',
	'fields' => array(
    array(
			'id' => 'copyright_text',
			'type' => 'wp_editor',
			'title' => esc_html__('Footer copyright text (optional)', 'epcl_framework'),
			'subtitle' => esc_html__('HTML and Shortcodes are allowed', 'epcl_framework'),
      'desc' => '',
      'media_buttons' => false,
		),
	)
));

<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'id' => 'single_page_setting',
		'title' => esc_html__( 'Settings of single page', RMBT_TEXT_DOMAIN_THEME ),
		'desc' => esc_html__( 'general', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'fields' => array(

			array(
				'id' => 'rmbt-single-sidebar-switch',
				'type' => 'switch',
				'title' => esc_html__( 'Sidebar displaying', RMBT_TEXT_DOMAIN_THEME ),
				'default' => true,
			),

			array(
				'id' => 'rmbt-single-sidebar-radio',
				'type' => 'radio',
				'title' => esc_html__( 'Sidebar location', RMBT_TEXT_DOMAIN_THEME ),
				'data' => array(
					'1' => 'Sidebar left',
					'2' => 'Sidebar right',
				),
				'default' => '2',
			),

		),
	)
);
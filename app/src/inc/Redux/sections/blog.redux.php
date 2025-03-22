<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'id' => 'blog_page_setting',
		'title' => esc_html__( 'Settings of blog page', RMBT_TEXT_DOMAIN_THEME ),
		'desc' => esc_html__( 'general', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'fields' => array(



			array(
				'id' => 'rmbt-blog_page-title',
				'type' => 'text',
				'title' => esc_html__( 'Title of blog page', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-blog_page-subtitle',
				'type' => 'textarea',
				'title' => esc_html__( 'Subtitle of blog page', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'rmbt-sidebar-switch',
				'type' => 'switch',
				'title' => esc_html__( 'Sidebar displaying', RMBT_TEXT_DOMAIN_THEME ),
				'default' => true,
			),

			array(
				'id' => 'rmbt-sidebar-radio',
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
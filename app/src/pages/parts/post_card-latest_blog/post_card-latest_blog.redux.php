<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Latest posts from our blog', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_latest-blog-posts',
		'desc' => esc_html__( 'Settings header site', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-latest-blog-posts_section-title',
				'type' => 'text',
				'title' => __( 'Title of cards block', RMBT_TEXT_DOMAIN_THEME ),
				'default' => __( 'Latest Blog Posts', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-latest-blog-posts_section-subtitle',
				'type' => 'text',
				'title' => __( 'Subtitle of cards block', RMBT_TEXT_DOMAIN_THEME ),
			),

		),
	)
);
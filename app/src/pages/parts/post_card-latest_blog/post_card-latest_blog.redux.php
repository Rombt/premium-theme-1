<?php

defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Latest posts from our blog', 'premium-theme-1' ),
		'id'               => 'settings_latest-blog-posts',
		'desc'             => esc_html__( 'Settings header site', 'premium-theme-1' ),
		'customizer_width' => '450',
		'subsections'      => true,
		// 'icon'             => 'el el-home',
		'fields'           => array(

			array(
				'id'      => 'rmbt-latest-blog-posts_section-title',
				'type'    => 'text',
				'title'   => __( 'Title of cards block', 'premium-theme-1' ),
				'default' => __( 'Latest Blog Posts', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-latest-blog-posts_section-subtitle',
				'type'  => 'text',
				'title' => __( 'Subtitle of cards block', 'premium-theme-1' ),
			),

		),
	)
);

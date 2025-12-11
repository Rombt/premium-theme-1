<?php

defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Featured Projects Block', 'premium-theme-1' ),
		'id'               => 'settings_featured-projects',
		'desc'             => esc_html__( 'Settings of Featured Projects Block', 'premium-theme-1' ),
		'customizer_width' => '450',
		'subsections'      => true,
		// 'icon'             => 'el el-home',
		'fields'           => array(

			array(
				'id'    => 'rmbt-featured-projects_section-title',
				'type'  => 'text',
				'title' => __( 'Title of Featured Projects Block', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-featured-projects_section-subtitle',
				'type'  => 'textarea',
				'title' => __( 'Subtitle of Featured Projects Block', 'premium-theme-1' ),
			),

		),
	)
);

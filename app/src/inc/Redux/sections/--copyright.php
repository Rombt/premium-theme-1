<?php
defined( 'ABSPATH' ) || exit;


// Copyright settings start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Copyright settings', RMBT_TEXT_DOMAIN_THEME ),
		'desc' => esc_html__( 'Add a description of your copyright ownership here', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_copyright',
		'customizer_width' => '400px',
		// 'icon'             => 'el el-network',
		'fields' => array(
			array(
				'id' => 'copyright',
				'type' => 'editor',
				'args' => array(
					'media_buttons' => false,
					// 'textarea_rows' => 5,
				),
				'title' => esc_html__( 'Copyright', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( '2024 Cool RestaurantWebsite based for Luxury RestaurAnt' ),
			),

		),
	)

);
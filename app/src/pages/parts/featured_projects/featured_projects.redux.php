<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => __( 'featured-projects_section', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_featured-projects',
		'desc' => __( 'Settings \'Featured Projects\' block', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'featured-projects_slider',
				'type' => 'slides',
				'title' => __( 'Slider of the  \'Featured Projects\' block ', RMBT_TEXT_DOMAIN_THEME ),
				'placeholder' => array(
					'title' => __( 'This is a title', RMBT_TEXT_DOMAIN_THEME ),
					'description' => __( 'Description Here', RMBT_TEXT_DOMAIN_THEME ),
					'url' => __( 'Give us a link!', RMBT_TEXT_DOMAIN_THEME ),
				),
			),


		),
	)
);
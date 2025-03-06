<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Testimonials of our clients block', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_testimonials-block',
		'desc' => esc_html__( 'Settings of testimonials block', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-testimonials-block_section-title',
				'type' => 'text',
				'title' => __( 'Title of testimonials block', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-testimonials-block_section-subtitle',
				'type' => 'textarea',
				'title' => __( 'Subtitle of testimonials block', RMBT_TEXT_DOMAIN_THEME ),
			),

		),
	)
);
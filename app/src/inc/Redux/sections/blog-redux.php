<?php
/**
 * Blog Redux options.
 *
 * @package RMBT_Theme
 */

defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'id'               => 'blog_page_setting',
		'title'            => esc_html__( 'Settings of blog page', 'premium-theme-1' ),
		'desc'             => esc_html__( 'general', 'premium-theme-1' ),
		'customizer_width' => '450',
		'fields'           => array(
			array(
				'id'    => 'rmbt-blog_page-title',
				'type'  => 'text',
				'title' => esc_html__( 'Title of blog page', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-blog_page-subtitle',
				'type'  => 'textarea',
				'title' => esc_html__( 'Subtitle of blog page', 'premium-theme-1' ),
			),
			array(
				'id'      => 'rmbt-sidebar-switch',
				'type'    => 'switch',
				'title'   => esc_html__( 'Sidebar displaying', 'premium-theme-1' ),
				'default' => true,
			),
			array(
				'id'      => 'rmbt-sidebar-radio',
				'type'    => 'radio',
				'title'   => esc_html__( 'Sidebar location', 'premium-theme-1' ),
				'data'    => array(
					'1' => 'Sidebar left',
					'2' => 'Sidebar right',
				),
				'default' => '2',
			),
		),
	)
);

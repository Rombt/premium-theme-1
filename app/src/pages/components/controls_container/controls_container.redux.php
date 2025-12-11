<?php

defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Social networks', 'premium-theme-1' ),
		'id'               => 'settings_social-networks',
		'desc'             => esc_html__( 'Settings Social networks', 'premium-theme-1' ),
		'customizer_width' => '450',
		'subsections'      => true,
		// 'icon'             => 'el el-home',
		'fields'           => array(

			array(
				'id'           => 'rmbt-social-networks-icon_1',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'It is the first icon for the social networks block', 'premium-theme-1' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'remove'       => true,
			),
			array(
				'id'    => 'rmbt-social-networks-icon_1_alt',
				'type'  => 'text',
				'title' => esc_html__( 'Description the first icon for the social networks block', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-social-networks-link_1',
				'type'  => 'text',
				'title' => esc_html__( 'The link of the first icon of the social networks block', 'premium-theme-1' ),
			),

			array(
				'id'           => 'rmbt-social-networks-icon_2',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'It is the second icon for the social networks block', 'premium-theme-1' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'remove'       => true,
			),
			array(
				'id'    => 'rmbt-social-networks-icon_2_alt',
				'type'  => 'text',
				'title' => esc_html__( 'Description the second icon for the social networks block', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-social-networks-link_2',
				'type'  => 'text',
				'title' => esc_html__( 'The link of the second icon of the social networks block', 'premium-theme-1' ),
			),

			array(
				'id'           => 'rmbt-social-networks-icon_3',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'It is the third icon for the social networks block', 'premium-theme-1' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'remove'       => true,
			),
			array(
				'id'    => 'rmbt-social-networks-icon_3_alt',
				'type'  => 'text',
				'title' => esc_html__( 'Description the third icon for the social networks block', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-social-networks-link_3',
				'type'  => 'text',
				'title' => esc_html__( 'The link of the third icon of the social networks block', 'premium-theme-1' ),
			),

			array(
				'id'           => 'rmbt-social-networks-icon_4',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'It is the fourth icon for the social networks block', 'premium-theme-1' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'remove'       => true,
			),
			array(
				'id'    => 'rmbt-social-networks-icon_4_alt',
				'type'  => 'text',
				'title' => esc_html__( 'Description the fourth icon for the social networks block', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-social-networks-link_4',
				'type'  => 'text',
				'title' => esc_html__( 'The link of the fourth icon of the social networks block', 'premium-theme-1' ),
			),



		),
	)
);

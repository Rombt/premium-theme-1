<?php

defined( 'ABSPATH' ) || exit;


// Front page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Search block', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_search-block',
		'desc' => esc_html__( 'Search block settings', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-front',
		'fields' => array(

			array(
				'id' => 'search-card-1_title',
				'type' => 'text',
				'title' => esc_html__( 'Title of Search first card', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Пошук по обладнанню', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'search-card-1_text',
				'type' => 'text',
				'title' => esc_html__( 'Title of Search first card', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Дивитися', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'search-card-1_link',
				'type' => 'text',
				'title' => esc_html__( 'Link for Search first card', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-search-card_img-id-1',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture for search-card article', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/search-card-1.jpg'
				),
			),
			array(
				'id' => 'rmbt-search-card_img-alt-1',
				'type' => 'text',
				'title' => esc_html__( 'Image description for search-card', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'search-card-1', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'search-card-2_title',
				'type' => 'text',
				'title' => esc_html__( 'Title of Search second card', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Пошук по виробам', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'search-card-2_text',
				'type' => 'text',
				'title' => esc_html__( 'Title of Search first card', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Дивитися', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'rmbt-search-card_img-id-2',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture for search-card article', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/search-card-2.jpg'
				),
			),
			array(
				'id' => 'rmbt-search-card_img-alt-2',
				'type' => 'text',
				'title' => esc_html__( 'Image description for search-card', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'search-card-2', RMBT_TEXT_DOMAIN_THEME ),
			),

		),
	),
);
<?php

defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Benefits Slide Block', 'premium-theme-1' ),
		'id'               => 'settings_benefits-slide-block',
		'desc'             => esc_html__( 'Settings Benefits Slide Block', 'premium-theme-1' ),
		'customizer_width' => '450',
		'subsections'      => true,
		// 'icon'             => 'el el-home',
		'fields'           => array(

			array(
				'id'       => 'rmbt-benefits-slide-block-1-start',
				'type'     => 'accordion',
				'title'    => esc_html__( 'First Slide Section', 'premium-theme-1' ),
				'indent'   => true,
				'position' => 'start',
			),

			array(
				'id'    => 'rmbt-benefits-slide-block_title_1',
				'type'  => 'text',
				'title' => esc_html__( 'Title of first slide', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-benefits-slide-block_text_1',
				'type'  => 'textarea',
				'title' => esc_html__( 'Text of first slide', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-benefits-slide-block_button-title_1',
				'type'  => 'text',
				'title' => esc_html__( 'Title of first slide button', 'premium-theme-1' ),
			),
			array(
				'id'      => 'rmbt-benefits-slide-block_button-link_1',
				'type'    => 'text',
				'title'   => esc_html__( 'Link of first slide button', 'premium-theme-1' ),
				'default' => '#',
			),

			array(
				'id'       => 'rmbt-benefits-slide-block-1-end',
				'type'     => 'accordion',
				'indent'   => false,
				'position' => 'end',
			),

			array(
				'id'       => 'rmbt-benefits-slide-block-2-start',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Second Slide Section', 'premium-theme-1' ),
				'indent'   => true,
				'position' => 'start',
			),

			array(
				'id'    => 'rmbt-benefits-slide-block_title_2',
				'type'  => 'text',
				'title' => esc_html__( 'Title of second slide', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-benefits-slide-block_text_2',
				'type'  => 'textarea',
				'title' => esc_html__( 'Text of second slide', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-benefits-slide-block_button-title_2',
				'type'  => 'text',
				'title' => esc_html__( 'Title of second slide button', 'premium-theme-1' ),
			),

			array(
				'id'      => 'rmbt-benefits-slide-block_button-link_2',
				'type'    => 'text',
				'title'   => esc_html__( 'Link of second slide button', 'premium-theme-1' ),
				'default' => '#',
			),

			array(
				'id'       => 'rmbt-benefits-slide-block-2-end',
				'type'     => 'accordion',
				'indent'   => false,
				'position' => 'end',
			),

			array(
				'id'       => 'rmbt-benefits-slide-block-3-start',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Third Slide Section', 'premium-theme-1' ),
				'indent'   => true,
				'position' => 'start',
			),

			array(
				'id'    => 'rmbt-benefits-slide-block_title_3',
				'type'  => 'text',
				'title' => esc_html__( 'Title of third slide', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-benefits-slide-block_text_3',
				'type'  => 'textarea',
				'title' => esc_html__( 'Text of third slide', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-benefits-slide-block_button-title_3',
				'type'  => 'text',
				'title' => esc_html__( 'Title of third slide button', 'premium-theme-1' ),
			),

			array(
				'id'      => 'rmbt-benefits-slide-block_button-link_3',
				'type'    => 'text',
				'title'   => esc_html__( 'Link of third slide button', 'premium-theme-1' ),
				'default' => '#',
			),

			array(
				'id'       => 'rmbt-benefits-slide-block-3-end',
				'type'     => 'accordion',
				'indent'   => false,
				'position' => 'end',
			),

			array(
				'id'       => 'rmbt-benefits-slide-block-4-start',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Fourth Slide Section', 'premium-theme-1' ),
				'indent'   => true,
				'position' => 'start',
			),

			array(
				'id'    => 'rmbt-benefits-slide-block_title_4',
				'type'  => 'text',
				'title' => esc_html__( 'Title of fourth slide', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-benefits-slide-block_text_4',
				'type'  => 'textarea',
				'title' => esc_html__( 'Text of fourth slide', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-benefits-slide-block_button-title_4',
				'type'  => 'text',
				'title' => esc_html__( 'Title of fourth slide button', 'premium-theme-1' ),
			),

			array(
				'id'      => 'rmbt-benefits-slide-block_button-link_4',
				'type'    => 'text',
				'title'   => esc_html__( 'Link of fourth slide button', 'premium-theme-1' ),
				'default' => '#',
			),

			array(
				'id'       => 'rmbt-benefits-slide-block-4-end',
				'type'     => 'accordion',
				'indent'   => false,
				'position' => 'end',
			),


		),
	)
);

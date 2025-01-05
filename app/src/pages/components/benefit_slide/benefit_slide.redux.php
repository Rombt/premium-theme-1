<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Benefits Slide Block', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_benefits-slide-block',
		'desc' => esc_html__( 'Settings Benefits Slide Block', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(



			array(
				'id' => 'rmbt-benefits-slide-block-1-start',
				'type' => 'accordion',
				'title' => esc_html__( 'First Slide Section', RMBT_TEXT_DOMAIN_THEME ),
				'indent' => true,
				'position' => 'start',
			),

			array(
				'id' => 'rmbt-benefits-slide-block_title_1',
				'type' => 'text',
				'title' => esc_html__( 'Title of first slide', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-slide-block_text_1',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of first slide', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-slide-block_button-title_1',
				'type' => 'text',
				'title' => esc_html__( 'Title of first slide button', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'rmbt-benefits-slide-block-1-end',
				'type' => 'accordion',
				'indent' => false,
				'position' => 'end',
			),

			array(
				'id' => 'rmbt-benefits-slide-block-2-start',
				'type' => 'accordion',
				'title' => esc_html__( 'Second Slide Section', RMBT_TEXT_DOMAIN_THEME ),
				'indent' => true,
				'position' => 'start',
			),

			array(
				'id' => 'rmbt-benefits-slide-block_title_2',
				'type' => 'text',
				'title' => esc_html__( 'Title of second slide', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-slide-block_text_2',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of second slide', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-slide-block_button-title_2',
				'type' => 'text',
				'title' => esc_html__( 'Title of second slide button', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'rmbt-benefits-slide-block-2-end',
				'type' => 'accordion',
				'indent' => false,
				'position' => 'end',
			),

			array(
				'id' => 'rmbt-benefits-slide-block-3-start',
				'type' => 'accordion',
				'title' => esc_html__( 'Third Slide Section', RMBT_TEXT_DOMAIN_THEME ),
				'indent' => true,
				'position' => 'start',
			),

			array(
				'id' => 'rmbt-benefits-slide-block_title_3',
				'type' => 'text',
				'title' => esc_html__( 'Title of third slide', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-slide-block_text_3',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of third slide', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-slide-block_button-title_3',
				'type' => 'text',
				'title' => esc_html__( 'Title of third slide button', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'rmbt-benefits-slide-block-3-end',
				'type' => 'accordion',
				'indent' => false,
				'position' => 'end',
			),

			array(
				'id' => 'rmbt-benefits-slide-block-4-start',
				'type' => 'accordion',
				'title' => esc_html__( 'Fourth Slide Section', RMBT_TEXT_DOMAIN_THEME ),
				'indent' => true,
				'position' => 'start',
			),

			array(
				'id' => 'rmbt-benefits-slide-block_title_4',
				'type' => 'text',
				'title' => esc_html__( 'Title of fourth slide', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-slide-block_text_4',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of fourth slide', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-slide-block_button-title_4',
				'type' => 'text',
				'title' => esc_html__( 'Title of fourth slide button', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'rmbt-benefits-slide-block-4-end',
				'type' => 'accordion',
				'indent' => false,
				'position' => 'end',
			),


		),
	)
);
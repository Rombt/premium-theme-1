<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Call to Action Block', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_call-to-action-card',
		'desc' => esc_html__( 'Settings call to action block site', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-call-to-action-card_section-title',
				'type' => 'text',
				'title' => __( 'Title of cards block', RMBT_TEXT_DOMAIN_THEME ),
				'default' => __( 'Let\'s discuss your project!', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-call-to-action-card_section-subtitle',
				'type' => 'text',
				'title' => __( 'Subtitle of cards block', RMBT_TEXT_DOMAIN_THEME ),
			),


			array(
				'id' => 'rmbt-call-to-action-bg-img',
				'type' => 'media',
				'url' => true,
				'title' => __( 'Image for first card', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'remove' => true,
			),

			array(
				'id' => 'rmbt-call-to-action-bg-img-alt',
				'type' => 'text',
				'title' => __( 'Image description of first card', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'rmbt-call-to-action-button-cta',
				'type' => 'text',
				'title' => __( 'Text of button', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-call-to-action-modal-content',
				'type' => 'text',
				'title' => __( 'Text of modal window after send form', RMBT_TEXT_DOMAIN_THEME ),
				'default' => wp_kses( '<span>Thank you!</span> Your request has been successfully sent.', 'post' ),
			),

		),
	)
);
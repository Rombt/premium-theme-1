<?php
/**
 * Call to action Redux options.
 *
 * @package RMBT_Theme
 */

defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Call to Action Block', 'premium-theme-1' ),
		'id'               => 'settings_call-to-action-card',
		'desc'             => esc_html__( 'Settings call to action block site', 'premium-theme-1' ),
		'customizer_width' => '450',
		'subsections'      => true,
		'fields'           => array(
			array(
				'id'      => 'rmbt-call-to-action-card_section-title',
				'type'    => 'text',
				'title'   => __( 'Title of cards block', 'premium-theme-1' ),
				'default' => __( 'Let\'s discuss your project!', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-call-to-action-card_section-subtitle',
				'type'  => 'text',
				'title' => __( 'Subtitle of cards block', 'premium-theme-1' ),
			),
			array(
				'id'           => 'rmbt-call-to-action-bg-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => __( 'Image for first card', 'premium-theme-1' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'remove'       => true,
			),
			array(
				'id'    => 'rmbt-call-to-action-bg-img-alt',
				'type'  => 'text',
				'title' => __( 'Image description of first card', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-call-to-action-button-cta',
				'type'  => 'text',
				'title' => __( 'Text of button', 'premium-theme-1' ),
			),
			array(
				'id'      => 'rmbt-call-to-action-modal-content',
				'type'    => 'text',
				'title'   => __( 'Text of modal window after send form', 'premium-theme-1' ),
				'default' => wp_kses( '<span>Thank you!</span> Your request has been successfully sent.', 'post' ),
			),
		),
	)
);

<?php
/**
 * Footer Layout 1 Redux Template.
 *
 * @package premium-theme-1
 */

defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Settings of footer', 'premium-theme-1' ),
		'id'               => 'settings_footer',
		'desc'             => esc_html__( 'Settings footer site', 'premium-theme-1' ),
		'customizer_width' => '450',
		'subsections'      => true,
		'fields'           => array(
			array(
				'id'           => 'rmbt-bg_footer-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'This picture will use for background section', 'premium-theme-1' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'default'      => array(
					'url' => '/assets/img/no-image.jpg',
				),
			),
			array(
				'id'      => 'rmbt-bg_footer-img_alt',
				'type'    => 'text',
				'title'   => esc_html__( 'Description for background section picture', 'premium-theme-1' ),
				'default' => esc_html__( 'background section picture', 'premium-theme-1' ),
			),

			array(
				'id'    => 'rmbt-footer_footer-title',
				'type'  => 'text',
				'title' => esc_html__( 'Title of footer', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-footer_footer-text',
				'type'  => 'text',
				'title' => esc_html__( 'Text of footer', 'premium-theme-1' ),
			),
			/*------------------ /rmbt-footer accordion ------------------*/
		),
	)
);

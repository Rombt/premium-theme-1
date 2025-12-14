<?php
/**
 * Section Tabs Redux Template.
 *
 * @package rmbt
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'simple-section', 'premium-theme-1' ),
		'id'               => 'settings_simple-section',
		'desc'             => esc_html__( 'Settings header site', 'premium-theme-1' ),
		'customizer_width' => '450',
		'subsections'      => true,
		'fields'           => array(

			array(
				'id'           => 'rmbt-bg_section-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'This picture will use for background section', 'premium-theme-1' ),
				'compiler'     => true,
				'preview_size' => 'full',
				'default'      => array(
					'url' => '/assets/img/no-image.jpg',
				),
			),

			array(
				'id'      => 'rmbt-bg_section-img_alt',
				'type'    => 'text',
				'title'   => esc_html__( 'Description for background section picture', 'premium-theme-1' ),
				'default' => esc_html__( 'background section picture', 'premium-theme-1' ),
			),

			array(
				'id'    => 'rmbt-simple-section_section-title',
				'type'  => 'text',
				'title' => esc_html__( 'Title of Simple-Section', 'premium-theme-1' ),
			),

			array(
				'id'    => 'rmbt-simple-section_section-text',
				'type'  => 'text',
				'title' => esc_html__( 'Text of Simple-Section', 'premium-theme-1' ),
			),

			/*------------------ rmbt-simple-section accordion ------------------*/
			array(
				'id'       => 'rmbt-simple-section-start',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Title of Simple-Section', 'premium-theme-1' ),
				'subtitle' => esc_html__( 'Add your content to the section "Title"', 'premium-theme-1' ),
				'position' => 'start',
			),

			array(
				'id'       => 'rmbt-simple-section-end',
				'type'     => 'accordion',
				'position' => 'end',
			),
			/*------------------ /rmbt-simple-section accordion ------------------*/

		),
	)
);

<?php

defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'our-services-tabs', 'premium-theme-1' ),
		'id'               => 'settings_our-services-tabs',
		'desc'             => esc_html__( 'Settings header site', 'premium-theme-1' ),
		'customizer_width' => '450',
		'subsections'      => true,
		// 'icon'             => 'el el-home',
		'fields'           => array(

			array(
				'id'      => 'rmbt-our-services-tabs_section-title',
				'type'    => 'text',
				'title'   => __( 'Title of tabs block', 'premium-theme-1' ),
				'default' => __( 'Our Services', 'premium-theme-1' ),
			),
			array(
				'id'    => 'rmbt-our-services-tabs_section-subtitle',
				'type'  => 'text',
				'title' => __( 'Subtitle of tabs block', 'premium-theme-1' ),
			),


			/*------------------ rmbt-our-services-tabs-1 accordion ------------------*/
			array(
				'id'       => 'rmbt-our-services-tabs-1-start',
				'type'     => 'accordion',
				'title'    => __( 'Settings of first tab', 'premium-theme-1' ),
				'subtitle' => __( 'Add your content to first tab', 'premium-theme-1' ),
				'position' => 'start',
			),


			array(
				'id'    => 'our-services-tabs-1_title',
				'type'  => 'text',
				'title' => __( 'Title of first tab', 'premium-theme-1' ),
			),

			array(
				'id'    => 'our-services-tabs-1_subtitle',
				'type'  => 'text',
				'title' => __( 'Subtitle of first tab', 'premium-theme-1' ),
			),

			array(
				'id'    => 'our-services-tabs-1_text',
				'type'  => 'textarea',
				'title' => __( 'Text of first tab', 'premium-theme-1' ),
			),

			array(
				'id'           => 'rmbt-our-services-tabs-1-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => __( 'Image for first tab', 'premium-theme-1' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'remove'       => true,
			),

			array(
				'id'    => 'rmbt-our-services-tabs-1-img-alt',
				'type'  => 'text',
				'title' => __( 'Image description of first tab', 'premium-theme-1' ),
			),


			array(
				'id'       => 'rmbt-our-services-tabs-1-end',
				'type'     => 'accordion',
				'position' => 'end',
			),
			/*------------------ /rmbt-our-services-tabs-1 accordion ------------------*/


			/*------------------ rmbt-our-services-tabs-2 accordion ------------------*/
			array(
				'id'       => 'rmbt-our-services-tabs-2-start',
				'type'     => 'accordion',
				'title'    => __( 'Settings of second tab', 'premium-theme-1' ),
				'subtitle' => 'Add your content to second tab',
				'position' => 'start',
			),


			array(
				'id'    => 'our-services-tabs-2_title',
				'type'  => 'text',
				'title' => __( 'Title of second tab', 'premium-theme-1' ),
			),

			array(
				'id'    => 'our-services-tabs-2_subtitle',
				'type'  => 'text',
				'title' => __( 'Subtitle of second tab', 'premium-theme-1' ),
			),

			array(
				'id'    => 'our-services-tabs-2_text',
				'type'  => 'textarea',
				'title' => __( 'Text of second tab', 'premium-theme-1' ),
			),

			array(
				'id'           => 'rmbt-our-services-tabs-2-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => __( 'Image for second tab', 'premium-theme-1' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'remove'       => true,
			),

			array(
				'id'    => 'rmbt-our-services-tabs-2-img-alt',
				'type'  => 'text',
				'title' => __( 'Image description of second tab', 'premium-theme-1' ),
			),


			array(
				'id'       => 'rmbt-our-services-tabs-2-end',
				'type'     => 'accordion',
				'position' => 'end',
			),
			/*------------------ /rmbt-our-services-tabs-2 accordion ------------------*/


			/*------------------ rmbt-our-services-tabs-3 accordion ------------------*/
			array(
				'id'       => 'rmbt-our-services-tabs-3-start',
				'type'     => 'accordion',
				'title'    => __( 'Settings of third tab', 'premium-theme-1' ),
				'subtitle' => 'Add your content to third tab',
				'position' => 'start',
			),


			array(
				'id'    => 'our-services-tabs-3_title',
				'type'  => 'text',
				'title' => __( 'Title of third tab', 'premium-theme-1' ),
			),

			array(
				'id'    => 'our-services-tabs-3_subtitle',
				'type'  => 'text',
				'title' => __( 'Subtitle of third tab', 'premium-theme-1' ),
			),

			array(
				'id'    => 'our-services-tabs-3_text',
				'type'  => 'textarea',
				'title' => __( 'Text of third tab', 'premium-theme-1' ),
			),

			array(
				'id'           => 'rmbt-our-services-tabs-3-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => __( 'Image for first tab', 'premium-theme-1' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'remove'       => true,
			),

			array(
				'id'    => 'rmbt-our-services-tabs-3-img-alt',
				'type'  => 'text',
				'title' => __( 'Subtitle of third tab', 'premium-theme-1' ),
			),


			array(
				'id'       => 'rmbt-our-services-tabs-3-end',
				'type'     => 'accordion',
				'position' => 'end',
			),
			/*------------------ /rmbt-our-services-tabs-3 accordion ------------------*/



		),
	)
);

<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'our-services-tabs', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_our-services-tabs',
		'desc' => esc_html__( 'Settings header site', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-our-services-tabs_section-title',
				'type' => 'text',
				'title' => esc_html__( 'Title of tabs block', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Our Services', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-our-services-tabs_section-subtitle',
				'type' => 'textarea',
				'title' => esc_html__( 'Subtitle of tabs block', RMBT_TEXT_DOMAIN_THEME ),
			),

			/*------------------ rmbt-our-services-tabs accordion ------------------*/
			array(
				'id' => 'rmbt-our-services-tabs-1-start',
				'type' => 'accordion',
				'title' => esc_html__( 'Title of Our-services-tabs', RMBT_TEXT_DOMAIN_THEME ),
				'subtitle' => 'Add your content to the section \'Title\'',
				'position' => 'start',
			),


			array(
				'id' => 'our-services-tabs-1_title',
				'type' => 'text',
				'title' => esc_html__( 'Title of first tab', RMBT_TEXT_DOMAIN_THEME ),
				// 'default' => __( wp_kses( 'Український виробник', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'our-services-tabs-1_subtitle',
				'type' => 'textarea',
				'title' => esc_html__( 'Subtitle of first tab', RMBT_TEXT_DOMAIN_THEME ),
				// 'default' => __( wp_kses( 'хлібопекарського і кондитерського обладнання', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'rmbt-our-services-tabs-1-img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Image for first tab', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'remove' => true,
			),

			array(
				'id' => 'rmbt-our-services-tabs-1-img-alt',
				'type' => 'text',
				'title' => esc_html__( 'Subtitle of first tab', RMBT_TEXT_DOMAIN_THEME ),
				// 'default' => __( wp_kses( 'хлібопекарського і кондитерського обладнання', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
			),


			array(
				'id' => 'rmbt-our-services-tabs-1-end',
				'type' => 'accordion',
				'position' => 'end',
			),
			/*------------------ /rmbt-our-services-tabs accordion ------------------*/


		),
	)
);
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
			// array(
			// 	'id' => 'rmbt-our-services-tabs_section-text',
			// 	'type' => 'text',
			// 	'title' => esc_html__( 'Text of Our-services-tabs', RMBT_TEXT_DOMAIN_THEME ),
			// 	// 'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			// ),



			/*------------------ rmbt-our-services-tabs accordion ------------------*/
			array(
				'id' => 'rmbt-our-services-tabs-start',
				'type' => 'accordion',
				'title' => esc_html__( 'Title of Our-services-tabs', RMBT_TEXT_DOMAIN_THEME ),
				'subtitle' => 'Add your content to the section \'Title\'',
				'position' => 'start',
			),


			// array(
			// 	'id' => 'rmbt-our-services-tabs-gallery',
			// 	'type' => 'gallery',
			// 	'title' => esc_html__( 'Add/Edit Gallery on the main screen ', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'our-services-tabs_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
			// 	'default' => __( wp_kses( 'Український виробник', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'our-services-tabs_subtitle',
			// 	'type' => 'text',
			// 	'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
			// 	'default' => __( wp_kses( 'хлібопекарського і кондитерського обладнання', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
			// ),


			array(
				'id' => 'rmbt-our-services-tabs-end',
				'type' => 'accordion',
				'position' => 'end',
			),
			/*------------------ /rmbt-our-services-tabs accordion ------------------*/


		),
	)
);
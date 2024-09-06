<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'header', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_header',
		'desc' => esc_html__( 'Settings header site', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-header_section-title',
				'type' => 'text',
				'title' => esc_html__( 'Title of header', RMBT_TEXT_DOMAIN_THEME ),
				// 'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-header_section-text',
				'type' => 'text',
				'title' => esc_html__( 'Text of header', RMBT_TEXT_DOMAIN_THEME ),
				// 'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),



			/*------------------ rmbt-header accordion ------------------*/
			array(
				'id' => 'rmbt-header-start',
				'type' => 'accordion',
				'title' => esc_html__( 'Title of header', RMBT_TEXT_DOMAIN_THEME ),
				'subtitle' => 'Add your content to the section \'Title\'',
				'position' => 'start',
			),


			// array(
			// 	'id' => 'rmbt-header-gallery',
			// 	'type' => 'gallery',
			// 	'title' => esc_html__( 'Add/Edit Gallery on the main screen ', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'header_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
			// 	'default' => __( wp_kses( 'Український виробник', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'header_subtitle',
			// 	'type' => 'text',
			// 	'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
			// 	'default' => __( wp_kses( 'хлібопекарського і кондитерського обладнання', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
			// ),


			array(
				'id' => 'rmbt-header-end',
				'type' => 'accordion',
				'position' => 'end',
			),
			/*------------------ /rmbt-header accordion ------------------*/


		),
	)
);
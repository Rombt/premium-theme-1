<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'id' => 'general_settings',
		'title' => esc_html__( 'General Settings', RMBT_TEXT_DOMAIN_THEME ),
		'desc' => esc_html__( 'general', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'fields' => array(


			array(
				'id' => 'rmbt-coming_soon_img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'This image will be shown if the main image isn`t available', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'remove' => true,
			),


			array(
				'id' => 'rmbt-coming_soon_img-alt',
				'type' => 'text',
				'title' => esc_html__( 'The description of the \'Coming Soon\' image.', RMBT_TEXT_DOMAIN_THEME ),
			),


			array(
				'id' => 'rmbt-default_avatar_img',
				'type' => 'text',
				'title' => esc_html__( 'The description of the \'user avatar\' image.', RMBT_TEXT_DOMAIN_THEME ),
				'description' => 'You can choose WordPress\'s standard avatars',
				'default' => 'mystery',
			),



			// array(
			// 	'id' => 'rmbt-title-section-1-start',
			// 	'type' => 'section',
			// 	'title' => esc_html__( 'First Title Section', RMBT_TEXT_DOMAIN_THEME ),
			// 	'indent' => true,
			// ),
			// array(
			// 	'id' => 'rmbt-title-section-1',
			// 	'type' => 'text',
			// 	'title' => esc_html__( 'The title of the first section', RMBT_TEXT_DOMAIN_THEME ),
			// ),
			// array(
			// 	'id' => 'rmbt-title-section-1-end',
			// 	'type' => 'section',
			// 	'indent' => false,
			// ),


			// array(
			// 	'id' => 'rmbt-title-section-2-start',
			// 	'type' => 'section',
			// 	'title' => esc_html__( 'Second Title Section', RMBT_TEXT_DOMAIN_THEME ),
			// 	'indent' => true,
			// ),
			// array(
			// 	'id' => 'rmbt-title-section-2',
			// 	'type' => 'text',
			// 	'title' => esc_html__( 'The title of the second section', RMBT_TEXT_DOMAIN_THEME ),
			// ),
			// array(
			// 	'id' => 'rmbt-title-section-2-end',
			// 	'type' => 'section',
			// 	'indent' => false,
			// ),



			// array(
			// 	'id' => 'rmbt-address_en',
			// 	'type' => 'textarea',
			// 	'title' => esc_html__( 'Enter Your Address', RMBT_TEXT_DOMAIN_THEME ),
			// ),


			// //First Manager section start -----------------------------------
			// array(
			// 	'id' => 'rmbt-manager-1-section-start',
			// 	'type' => 'section',
			// 	'title' => esc_html__( 'First Manager general', RMBT_TEXT_DOMAIN_THEME ),
			// 	'indent' => true,
			// ),

			// array(
			// 	'id' => 'rmbt-manager-1-name',
			// 	'type' => 'text',
			// 	'title' => esc_html__( 'Add first manager name ', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'rmbt-manager-1-phone',
			// 	'type' => 'text',
			// 	'title' => esc_html__( 'Add first manager phone number', RMBT_TEXT_DOMAIN_THEME ),
			// ),
			// array(
			// 	'id' => 'rmbt-manager-1-email',
			// 	'type' => 'text',
			// 	'title' => esc_html__( 'Add first manager email', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'rmbt-manager-1-section-end',
			// 	'type' => 'section',
			// 	'indent' => false,
			// ),
			//First Manager section end	-----------------------------------




		),
	)
);
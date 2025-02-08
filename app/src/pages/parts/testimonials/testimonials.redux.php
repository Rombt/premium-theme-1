<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Testimonials Block', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_testimonials-card',
		'desc' => esc_html__( 'Settings testimonials block', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-testimonials-card_section-title',
				'type' => 'text',
				'title' => __( 'Title of cards block', RMBT_TEXT_DOMAIN_THEME ),
				'default' => __( 'Testimonials', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-testimonials-card_section-subtitle',
				'type' => 'text',
				'title' => __( 'Subtitle of cards block', RMBT_TEXT_DOMAIN_THEME ),
			),


			// /*------------------ rmbt-testimonials-card-1 accordion ------------------*/
			// array(
			// 	'id' => 'rmbt-testimonials-card-1-start',
			// 	'type' => 'accordion',
			// 	'title' => __( 'Settings of first card', RMBT_TEXT_DOMAIN_THEME ),
			// 	'subtitle' => __( 'Add your content to first card', RMBT_TEXT_DOMAIN_THEME ),
			// 	'position' => 'start',
			// ),


			// array(
			// 	'id' => 'testimonials-card-1_title',
			// 	'type' => 'text',
			// 	'title' => __( 'Title of first card', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'testimonials-card-1_subtitle',
			// 	'type' => 'text',
			// 	'title' => __( 'Subtitle of first card', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'testimonials-card-1_text',
			// 	'type' => 'textarea',
			// 	'title' => __( 'Text of first card', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'rmbt-testimonials-card-1-img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => __( 'Image for first card', RMBT_TEXT_DOMAIN_THEME ),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'remove' => true,
			// ),

			// array(
			// 	'id' => 'rmbt-testimonials-card-1-img-alt',
			// 	'type' => 'text',
			// 	'title' => __( 'Image description of first card', RMBT_TEXT_DOMAIN_THEME ),
			// ),


			// array(
			// 	'id' => 'rmbt-testimonials-card-1-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end',
			// ),
			// /*------------------ /rmbt-testimonials-card-1 accordion ------------------*/


			// /*------------------ rmbt-testimonials-card-2 accordion ------------------*/
			// array(
			// 	'id' => 'rmbt-testimonials-card-2-start',
			// 	'type' => 'accordion',
			// 	'title' => __( 'Settings of second card', RMBT_TEXT_DOMAIN_THEME ),
			// 	'subtitle' => 'Add your content to second card',
			// 	'position' => 'start',
			// ),


			// array(
			// 	'id' => 'testimonials-card-2_title',
			// 	'type' => 'text',
			// 	'title' => __( 'Title of second card', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'testimonials-card-2_subtitle',
			// 	'type' => 'text',
			// 	'title' => __( 'Subtitle of second card', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'testimonials-card-2_text',
			// 	'type' => 'textarea',
			// 	'title' => __( 'Text of second card', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'rmbt-testimonials-card-2-img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => __( 'Image for second card', RMBT_TEXT_DOMAIN_THEME ),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'remove' => true,
			// ),

			// array(
			// 	'id' => 'rmbt-testimonials-card-2-img-alt',
			// 	'type' => 'text',
			// 	'title' => __( 'Image description of second card', RMBT_TEXT_DOMAIN_THEME ),
			// ),


			// array(
			// 	'id' => 'rmbt-testimonials-card-2-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end',
			// ),
			// /*------------------ /rmbt-testimonials-card-2 accordion ------------------*/


			// /*------------------ rmbt-testimonials-card-3 accordion ------------------*/
			// array(
			// 	'id' => 'rmbt-testimonials-card-3-start',
			// 	'type' => 'accordion',
			// 	'title' => __( 'Settings of third card', RMBT_TEXT_DOMAIN_THEME ),
			// 	'subtitle' => 'Add your content to third card',
			// 	'position' => 'start',
			// ),


			// array(
			// 	'id' => 'testimonials-card-3_title',
			// 	'type' => 'text',
			// 	'title' => __( 'Title of third card', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'testimonials-card-3_subtitle',
			// 	'type' => 'text',
			// 	'title' => __( 'Subtitle of third card', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'testimonials-card-3_text',
			// 	'type' => 'textarea',
			// 	'title' => __( 'Text of third card', RMBT_TEXT_DOMAIN_THEME ),
			// ),

			// array(
			// 	'id' => 'rmbt-testimonials-card-3-img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => __( 'Image for first card', RMBT_TEXT_DOMAIN_THEME ),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'remove' => true,
			// ),

			// array(
			// 	'id' => 'rmbt-testimonials-card-3-img-alt',
			// 	'type' => 'text',
			// 	'title' => __( 'Subtitle of third card', RMBT_TEXT_DOMAIN_THEME ),
			// ),


			// array(
			// 	'id' => 'rmbt-testimonials-card-3-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end',
			// ),
			// /*------------------ /rmbt-testimonials-card-3 accordion ------------------*/



		),
	)
);
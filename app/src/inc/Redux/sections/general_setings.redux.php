<?php

defined('ABSPATH') || exit;


Redux::set_section(
    $opt_name,
    array(
        'id' => 'general_settings',
        'title' => esc_html__('General Settings', 'premium-theme-1'),
        'desc' => esc_html__('general', 'premium-theme-1'),
        'customizer_width' => '450',
        'fields' => array(


            array(
                'id' => 'rmbt-coming_soon_img',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('This image will be shown if the main image isn`t available', 'premium-theme-1'),
                'compiler' => 'true',
                'preview_size' => 'full',
                'remove' => true,
            ),


            array(
                'id' => 'rmbt-coming_soon_img-alt',
                'type' => 'text',
                'title' => esc_html__('The description of the \'Coming Soon\' image.', 'premium-theme-1'),
            ),


            array(
                'id' => 'rmbt-default_avatar_img',
                'type' => 'text',
                'title' => esc_html__('The description of the \'user avatar\' image.', 'premium-theme-1'),
                'description' => 'You can choose WordPress\'s standard avatars',
                'default' => 'mystery',
            ),


            array(
                'id' => 'rmbt-404_text',
                'type' => 'text',
                'title' => esc_html__('Text for 404 page', 'premium-theme-1'),
                'default' => 'Page Not Found',
            ),

            array(
                'id' => 'rmbt-404_button-title',
                'type' => 'text',
                'title' => esc_html__('Text for button 404 page', 'premium-theme-1'),
                'default' => 'Visit Homepage',
            ),


            array(
                'id' => 'rmbt-404-bg_img',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('Background image for 404 page', 'premium-theme-1'),
                'compiler' => 'true',
                'preview_size' => 'full',
                'remove' => true,
            ),

            array(
                'id' => 'rmbt-404-bg_img-alt',
                'type' => 'text',
                'title' => esc_html__('The description of the \'404 background \' image.', 'premium-theme-1'),
            ),

            // array(
            // 	'id' => 'rmbt-title-section-1-start',
            // 	'type' => 'section',
            // 	'title' => esc_html__( 'First Title Section', 'premium-theme-1' ),
            // 	'indent' => true,
            // ),
            // array(
            // 	'id' => 'rmbt-title-section-1',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'The title of the first section', 'premium-theme-1' ),
            // ),
            // array(
            // 	'id' => 'rmbt-title-section-1-end',
            // 	'type' => 'section',
            // 	'indent' => false,
            // ),


            // array(
            // 	'id' => 'rmbt-title-section-2-start',
            // 	'type' => 'section',
            // 	'title' => esc_html__( 'Second Title Section', 'premium-theme-1' ),
            // 	'indent' => true,
            // ),
            // array(
            // 	'id' => 'rmbt-title-section-2',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'The title of the second section', 'premium-theme-1' ),
            // ),
            // array(
            // 	'id' => 'rmbt-title-section-2-end',
            // 	'type' => 'section',
            // 	'indent' => false,
            // ),



            // array(
            // 	'id' => 'rmbt-address_en',
            // 	'type' => 'textarea',
            // 	'title' => esc_html__( 'Enter Your Address', 'premium-theme-1' ),
            // ),


            // //First Manager section start -----------------------------------
            // array(
            // 	'id' => 'rmbt-manager-1-section-start',
            // 	'type' => 'section',
            // 	'title' => esc_html__( 'First Manager general', 'premium-theme-1' ),
            // 	'indent' => true,
            // ),

            // array(
            // 	'id' => 'rmbt-manager-1-name',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'Add first manager name ', 'premium-theme-1' ),
            // ),

            // array(
            // 	'id' => 'rmbt-manager-1-phone',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'Add first manager phone number', 'premium-theme-1' ),
            // ),
            // array(
            // 	'id' => 'rmbt-manager-1-email',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'Add first manager email', 'premium-theme-1' ),
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

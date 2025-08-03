<?php

defined('ABSPATH') || exit;


Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Settings of footer', RMBT_TEXT_DOMAIN_THEME),
        'id' => 'settings_footer',
        'desc' => esc_html__('Settings footer site', RMBT_TEXT_DOMAIN_THEME),
        'customizer_width' => '450',
        'subsections' => true,
        // 'icon'             => 'el el-home',
        'fields' => array(

            array(
                'id' => 'rmbt-bg_footer-img',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('This picture will use for background section', RMBT_TEXT_DOMAIN_THEME),
                'compiler' => 'true',
                'preview_size' => 'full',
                'default' => array(
                    'url' => '/assets/img/no-image.jpg',
                ),
            ),
            array(
                'id' => 'rmbt-bg_footer-img_alt',
                'type' => 'text',
                'title' => esc_html__('Description for background section picture', RMBT_TEXT_DOMAIN_THEME),
                'default' => esc_html__('background section picture', RMBT_TEXT_DOMAIN_THEME),
            ),

            array(
                'id' => 'rmbt-footer_footer-title',
                'type' => 'text',
                'title' => esc_html__('Title of footer', RMBT_TEXT_DOMAIN_THEME),
                // 'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
            ),
            array(
                'id' => 'rmbt-footer_footer-text',
                'type' => 'text',
                'title' => esc_html__('Text of footer', RMBT_TEXT_DOMAIN_THEME),
                // 'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
            ),



            /*------------------ rmbt-footer accordion ------------------*/
            // array(
            // 	'id' => 'rmbt-footer-start',
            // 	'type' => 'accordion',
            // 	'title' => esc_html__( 'Title of footer', RMBT_TEXT_DOMAIN_THEME ),
            // 	'subtitle' => 'Add your content to the section \'Title\'',
            // 	'position' => 'start',
            // ),


            // array(
            // 	'id' => 'rmbt-footer-gallery',
            // 	'type' => 'gallery',
            // 	'title' => esc_html__( 'Add/Edit Gallery on the main screen ', RMBT_TEXT_DOMAIN_THEME ),
            // ),

            // array(
            // 	'id' => 'footer_title',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
            // 	'default' => __( wp_kses( 'Український виробник', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
            // ),

            // array(
            // 	'id' => 'footer_subtitle',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
            // 	'default' => __( wp_kses( 'хлібопекарського і кондитерського обладнання', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
            // ),


            // array(
            // 	'id' => 'rmbt-footer-end',
            // 	'type' => 'accordion',
            // 	'position' => 'end',
            // ),
            /*------------------ /rmbt-footer accordion ------------------*/


        ),
    )
);

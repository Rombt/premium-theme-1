<?php

defined('ABSPATH') || exit;


Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('simple-section', RMBT_TEXT_DOMAIN_THEME),
        'id' => 'settings_simple-section',
        'desc' => esc_html__('Settings header site', RMBT_TEXT_DOMAIN_THEME),
        'customizer_width' => '450',
        'subsections' => true,
        // 'icon'             => 'el el-home',
        'fields' => array(

            array(
                'id' => 'rmbt-bg_section-img',
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
                'id' => 'rmbt-bg_section-img_alt',
                'type' => 'text',
                'title' => esc_html__('Description for background section picture', RMBT_TEXT_DOMAIN_THEME),
                'default' => esc_html__('background section picture', RMBT_TEXT_DOMAIN_THEME),
            ),

            array(
                'id' => 'rmbt-simple-section_section-title',
                'type' => 'text',
                'title' => esc_html__('Title of Simple-Section', RMBT_TEXT_DOMAIN_THEME),
                // 'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
            ),
            array(
                'id' => 'rmbt-simple-section_section-text',
                'type' => 'text',
                'title' => esc_html__('Text of Simple-Section', RMBT_TEXT_DOMAIN_THEME),
                // 'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
            ),



            /*------------------ rmbt-simple-section accordion ------------------*/
            array(
                'id' => 'rmbt-simple-section-start',
                'type' => 'accordion',
                'title' => esc_html__('Title of Simple-Section', RMBT_TEXT_DOMAIN_THEME),
                'subtitle' => 'Add your content to the section \'Title\'',
                'position' => 'start',
            ),


            // array(
            // 	'id' => 'rmbt-simple-section-gallery',
            // 	'type' => 'gallery',
            // 	'title' => esc_html__( 'Add/Edit Gallery on the main screen ', RMBT_TEXT_DOMAIN_THEME ),
            // ),

            // array(
            // 	'id' => 'simple-section_title',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
            // 	'default' => __( wp_kses( 'Український виробник', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
            // ),

            // array(
            // 	'id' => 'simple-section_subtitle',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
            // 	'default' => __( wp_kses( 'хлібопекарського і кондитерського обладнання', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
            // ),


            array(
                'id' => 'rmbt-simple-section-end',
                'type' => 'accordion',
                'position' => 'end',
            ),
            /*------------------ /rmbt-simple-section accordion ------------------*/


        ),
    )
);

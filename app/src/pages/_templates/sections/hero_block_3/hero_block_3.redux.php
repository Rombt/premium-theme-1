<?php

defined('ABSPATH') || exit;


Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('simple-section', 'premium-theme-1'),
        'id' => 'settings_simple-section',
        'desc' => esc_html__('Settings header site', 'premium-theme-1'),
        'customizer_width' => '450',
        'subsections' => true,
        // 'icon'             => 'el el-home',
        'fields' => array(

            array(
                'id' => 'rmbt-bg_section-img',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('This picture will use for background section', 'premium-theme-1'),
                'compiler' => 'true',
                'preview_size' => 'full',
                'default' => array(
                    'url' => '/assets/img/no-image.jpg',
                ),
            ),
            array(
                'id' => 'rmbt-bg_section-img_alt',
                'type' => 'text',
                'title' => esc_html__('Description for background section picture', 'premium-theme-1'),
                'default' => esc_html__('background section picture', 'premium-theme-1'),
            ),

            array(
                'id' => 'rmbt-simple-section_section-title',
                'type' => 'text',
                'title' => esc_html__('Title of Simple-Section', 'premium-theme-1'),
                // 'default' => esc_html__( '', 'premium-theme-1' ),
            ),
            array(
                'id' => 'rmbt-simple-section_section-text',
                'type' => 'text',
                'title' => esc_html__('Text of Simple-Section', 'premium-theme-1'),
                // 'default' => esc_html__( '', 'premium-theme-1' ),
            ),



            /*------------------ rmbt-simple-section accordion ------------------*/
            array(
                'id' => 'rmbt-simple-section-start',
                'type' => 'accordion',
                'title' => esc_html__('Title of Simple-Section', 'premium-theme-1'),
                'subtitle' => 'Add your content to the section \'Title\'',
                'position' => 'start',
            ),


            // array(
            // 	'id' => 'rmbt-simple-section-gallery',
            // 	'type' => 'gallery',
            // 	'title' => esc_html__( 'Add/Edit Gallery on the main screen ', 'premium-theme-1' ),
            // ),

            // array(
            // 	'id' => 'simple-section_title',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'Front page title', 'premium-theme-1' ),
            // 	'default' => __( wp_kses( 'Український виробник', 'post' ), 'premium-theme-1' ),
            // ),

            // array(
            // 	'id' => 'simple-section_subtitle',
            // 	'type' => 'text',
            // 	'title' => esc_html__( 'Front page title', 'premium-theme-1' ),
            // 	'default' => __( wp_kses( 'хлібопекарського і кондитерського обладнання', 'post' ), 'premium-theme-1' ),
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

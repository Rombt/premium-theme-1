<?php

defined('ABSPATH') || exit;


Redux::set_section(
    $opt_name,
    array(
        'id' => 'single_page_setting',
        'title' => esc_html__('Settings of single page', 'premium-theme-1'),
        'desc' => esc_html__('general', 'premium-theme-1'),
        'customizer_width' => '450',
        'fields' => array(

            array(
                'id' => 'rmbt-single-sidebar-switch',
                'type' => 'switch',
                'title' => esc_html__('Sidebar displaying', 'premium-theme-1'),
                'default' => true,
            ),

            array(
                'id' => 'rmbt-single-sidebar-radio',
                'type' => 'radio',
                'title' => esc_html__('Sidebar location', 'premium-theme-1'),
                'data' => array(
                    '1' => 'Sidebar left',
                    '2' => 'Sidebar right',
                ),
                'default' => '2',
            ),

        ),
    )
);

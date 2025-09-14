<?php

defined('ABSPATH') || exit;


Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Hero block-1', 'premium-theme-1'),
        'id' => 'settings_hero-block-1',
        'desc' => esc_html__('Settings Hero block-1', 'premium-theme-1'),
        'customizer_width' => '450',
        'subsections' => true,
        // 'icon'             => 'el el-home',
        'fields' => array(

            array(
                'id' => 'rmbt-hero-block-1-bg_img',
                'type' => 'media',
                'url' => true,
                'title' => esc_html__('It is the first icon for the hero block-1 block', 'premium-theme-1'),
                'compiler' => 'true',
                'preview_size' => 'full',
                'remove' => true,
            ),
            array(
                'id' => 'rmbt-hero-block-1-bg_img_alt',
                'type' => 'text',
                'title' => esc_html__('Description the background image for the hero block-1 block', 'premium-theme-1'),
            ),

            array(
                'id' => 'rmbt-call_to_action_button-text',
                'type' => 'text',
                'title' => esc_html__('The text to display on the call-to-action button', 'premium-theme-1'),
            ),

            array(
                'id' => 'rmbt-call_to_action_button-link',
                'type' => 'text',
                'title' => esc_html__('The link for the call-to-action button', 'premium-theme-1'),
                'default' => '#',
            ),



        ),
    )
);

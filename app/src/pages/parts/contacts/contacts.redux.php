<?php

defined('ABSPATH') || exit;


Redux::set_section(
    $opt_name,
    array(
        'title' => esc_html__('Contacts Page', 'premium-theme-1'),
        'id' => 'settings_contacts_page',
        'desc' => esc_html__('Settings of Contacts Page', 'premium-theme-1'),
        'customizer_width' => '450',
        'subsections' => true,
        // 'icon'             => 'el el-home',
        'fields' => array(

            array(
                'id' => 'rmbt-contacts-page_section-title',
                'type' => 'text',
                'title' => __('Title of Contacts Page', 'premium-theme-1'),
            ),
            array(
                'id' => 'rmbt-contacts-page_section-subtitle',
                'type' => 'textarea',
                'title' => __('Subtitle of Contacts Page', 'premium-theme-1'),
            ),



            array(
                'id'     => 'contact_map_section',
                'type'   => 'section',
                'title'  => __('Map Settings', 'premium-theme-1'),
                'indent' => true,
            ),

            array(
                'id'       => 'contact_address',
                'type'     => 'textarea',
                'title'    => __('Formatted Address', 'premium-theme-1'),
                'subtitle' => __('Displayed on the Contact page.', 'premium-theme-1'),
                'desc'     => __('Post\'s tags are available.', 'premium-theme-1'),
            ),

            array(
                'id'       => 'contact_map_address',
                'type'     => 'text',
                'title'    => __('Google Map Address', 'premium-theme-1'),
                'subtitle' => __('Enter full address — the map will be generated automatically.', 'premium-theme-1'),
                'placeholder' => '1600 Amphitheatre Parkway, Mountain View, CA',
            ),

            array(
                'id'       => 'contact_map_zoom',
                'type'     => 'slider',
                'title'    => __('Map Zoom Level', 'premium-theme-1'),
                'min'      => 1,
                'max'      => 20,
                'default'  => 14,
            ),

            array(
                'type' => 'section',
                'indent' => false,
            ),









            array(
                'id'       => 'rmbt-managers',
                'type'     => 'repeater',
                'title'    => esc_html__('Managers', 'premium-theme-1'),
                'collapsed'   => true,
                'fields'   => array(
                    array(
                        'id'    => 'rmbt-managers_id',
                        'type'  => 'text',
                        'title' => esc_html__('Unique ID', 'premium-theme-1'),
                    ),
                    array(
                        'id'    => 'rmbt-managers_name',
                        'type'  => 'text',
                        'title' => esc_html__('Manager name', 'premium-theme-1'),
                    ),
                    array(
                        'id'    => 'rmbt-managers_position',
                        'type'  => 'text',
                        'title' => esc_html__('Manager position', 'premium-theme-1'),
                    ),
                    array(
                        'id'    => 'rmbt-managers_phone',
                        'type'  => 'text',
                        'title' => esc_html__('Phone number', 'premium-theme-1'),
                    ),
                    array(
                        'id'    => 'rmbt-managers_email',
                        'type'  => 'text',
                        'title' => esc_html__('Email', 'premium-theme-1'),
                    ),
                    array(
                        'id'       => 'rmbt-managers-show',
                        'type'     => 'checkbox',
                        'title'    => __('Select places for display this manager', 'premium-theme-1'),
                        'options'  => array(
                            'header' => 'on the header',
                            'footer' => 'on the footer',
                            'contact_page' => 'on the contact page',
                        ),
                        'default'  => array(
                            'header' => 1,
                            'footer' => 1,
                            'contact_page' => 1,
                        ),
                    )
                ),
            ),


            array(
                'id' => 'rmbt-contacts-page_poster-1',
                'type' => 'media',
                'url' => true,
                'title' => __('First poster for contact page', 'premium-theme-1'),
                'compiler' => 'true',
                'preview_size' => 'full',
                'remove' => true,
            ),
            array(
                'id' => 'rmbt-contacts-page_poster-1-alt',
                'type' => 'text',
                'title' => __('Image description of first poster', 'premium-theme-1'),
            ),

            array(
                'id' => 'rmbt-contacts-page_poster-2',
                'type' => 'media',
                'url' => true,
                'title' => __('Second poster for contact page', 'premium-theme-1'),
                'compiler' => 'true',
                'preview_size' => 'full',
                'remove' => true,
            ),
            array(
                'id' => 'rmbt-contacts-page_poster-2-alt',
                'type' => 'text',
                'title' => __('Image description of second poster', 'premium-theme-2'),
            ),

            array(
                'id' => 'rmbt-contacts-page_poster-3',
                'type' => 'media',
                'url' => true,
                'title' => __('Third poster for contact page', 'premium-theme-1'),
                'compiler' => 'true',
                'preview_size' => 'full',
                'remove' => true,
            ),
            array(
                'id' => 'rmbt-contacts-page_poster-3-alt',
                'type' => 'text',
                'title' => __('Image description of third poster', 'premium-theme-1'),
            ),


            // array(
            //     'id' => 'rmbt-contacts_section-title',
            //     'type' => 'text',
            //     'title' => __('Title of Contacts Block', 'premium-theme-1'),
            // ),
            // array(
            //     'id' => 'rmbt-contacts_section-subtitle',
            //     'type' => 'textarea',
            //     'title' => __('Subtitle of Contacts Block', 'premium-theme-1'),
            // ),

        ),
    )
);

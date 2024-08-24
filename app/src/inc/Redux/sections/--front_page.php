<?php

defined( 'ABSPATH' ) || exit;


// Front page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Front page', RMBT_TEXT_DOMAIN_THEME ),
		'id' => 'settings_front-page',
		'desc' => esc_html__( 'Front page settings', RMBT_TEXT_DOMAIN_THEME ),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-front',
		'fields' => array(

			array(
				'id' => 'rmbt-no-img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'This picture will show if main picture is absent', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'rmbt-no-img_alt',
				'type' => 'text',
				'title' => esc_html__( 'Description for picture than is absent', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'rmbt-news-block_section-title',
				'type' => 'text',
				'title' => esc_html__( 'Title of News Block', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Останні новини', RMBT_TEXT_DOMAIN_THEME ),
			),

			/*------------------ main_slider_screen accordion ------------------*/
			array(
				'id' => 'main_slider_screen-start',
				'type' => 'accordion',
				'title' => esc_html__( 'Title Section', RMBT_TEXT_DOMAIN_THEME ),
				'subtitle' => 'Add your content to the section \'Title\'',
				'position' => 'start',
			),
			array(
				'id' => 'main_slider_screen-gallery',
				'type' => 'gallery',
				'title' => esc_html__( 'Add/Edit Gallery on the main screen ', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'front_page_title',
				'type' => 'text',
				'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
				'default' => __( wp_kses( 'Український виробник', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'front_page_subtitle',
				'type' => 'text',
				'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
				'default' => __( wp_kses( 'хлібопекарського і кондитерського обладнання', 'post' ), RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'front_page_slogan',
				'type' => 'text',
				'title' => esc_html__( 'Front page subtitle', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Завжди надійний постачальник!', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'button_title',
				'type' => 'text',
				'title' => esc_html__( 'Title of Main Screen Button', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Зв`язатись з нами', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'button_href',
				'type' => 'text',
				'title' => esc_html__( 'Link for button', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( '#', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'background_picture',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture for Background', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/prapor-ukrainy.jpg'
				),
			),
			array(
				'id' => 'main_slider_screen-end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ /main_slider_screen accordion ------------------*/

			/*------------------ Introduction accordion ------------------*/
			array(
				'id' => 'introduction-start',
				'type' => 'accordion',
				'title' => esc_html__( 'Introduction Section', RMBT_TEXT_DOMAIN_THEME ),
				'subtitle' => 'Add your content to the section \'Introduction\'',
				'position' => 'start',
			),
			array(
				'id' => 'introduction_section-title',
				'type' => 'text',
				'title' => esc_html__( 'Introduction Section title', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Запрошуємо до нас', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'introduction_section-text',
				'type' => 'textarea',
				'title' => esc_html__( 'Introduction Section Text', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'introduction_first_block-title',
				'type' => 'text',
				'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Виробляємо', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'introduction_first_block-text',
				'type' => 'textarea',
				'title' => esc_html__( 'Introduction First Block Text', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'introduction_second_block-title',
				'type' => 'text',
				'title' => esc_html__( 'Front page title', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'Ремонтуємо', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'introduction_second_block-text',
				'type' => 'textarea',
				'title' => esc_html__( 'Introduction Second Block Text', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'introduction_image',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture for Introduction Block', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'introduction_image_alt',
				'type' => 'text',
				'title' => esc_html__( 'Description of introduction image', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'introduction-end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ /Introduction accordion ------------------*/


			/*------------------ Best Sellers accordion ------------------*/
			array(
				'id' => 'best-sellers_start',
				'type' => 'accordion',
				'title' => esc_html__( 'Best Sellers', RMBT_TEXT_DOMAIN_THEME ),
				'subtitle' => 'Add your content to the section \'Best Sellers\'',
				'position' => 'start',
			),
			array(
				'id' => 'best-sellers_section-title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers Section title',
					RMBT_TEXT_DOMAIN_THEME
				),
				'default' => esc_html__( 'Хіти продажу', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'best-sellers_section_text',
				'type' => 'textarea',
				'title' => esc_html__( 'best-sellers Section Text', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the start of image block -----------------*/
			array(
				'id' => 'best-sellers-goods-one_title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers of Goods number one',
					RMBT_TEXT_DOMAIN_THEME
				),
				'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'best-sellers_image-one',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture of Best Sellers of Goods number one', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'best-sellers_image-one_alt',
				'type' => 'text',
				'title' => esc_html__( 'Description of image', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'best-sellers_href-one',
				'type' => 'text',
				'title' => esc_html__( 'Link To Page Goods', RMBT_TEXT_DOMAIN_THEME ),
			),

			/*------------------  the end of image block -----------------*/
			/*------------------  the start of image block -----------------*/

			array(
				'id' => 'best-sellers-goods-two_title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers of Goods number two',
					RMBT_TEXT_DOMAIN_THEME
				),
				'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'best-sellers_image-two',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture of Best Sellers of Goods number two', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),

			array(
				'id' => 'best-sellers_image-two_alt',
				'type' => 'text',
				'title' => esc_html__( 'Description of image', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'best-sellers_href-two',
				'type' => 'text',
				'title' => esc_html__( 'Link To Page Goods', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the end of image block -----------------*/
			/*------------------  the start of image block -----------------*/

			array(
				'id' => 'best-sellers-goods-three_title',
				'type' => 'text',
				'title' => esc_html__(
					'Best Sellers of Goods number three',
					RMBT_TEXT_DOMAIN_THEME
				),
				'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'best-sellers_image-three',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture of Best Sellers of Goods number three', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'best-sellers_image-three_alt',
				'type' => 'text',
				'title' => esc_html__( 'Description of image', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'best-sellers_href-three',
				'type' => 'text',
				'title' => esc_html__( 'Link To Page Goods', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the end of image block -----------------*/

			array(
				'id' => 'best-sellers_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ /Best Sellers accordion ------------------*/


			/*------------------ the start benefits-block accordion ------------------*/
			array(
				'id' => 'benefits-block_start',
				'type' => 'accordion',
				'title' => esc_html__( 'Benefit section', RMBT_TEXT_DOMAIN_THEME ),
				'subtitle' => 'Add your content to the section \'benefits-block\'',
				'position' => 'start',
			),
			array(
				'id' => 'rmbt-benefits-block_section-title',
				'type' => 'text',
				'title' => esc_html__( 'benefits-block Section Title', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-1',
				'type' => 'text',
				'title' => esc_html__( 'Title of first article', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-1',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of first article', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the end of first article block -----------------*/
			/*------------------  the start of second article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-2',
				'type' => 'text',
				'title' => esc_html__( 'Title of second article', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-2',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of second article', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the end of second article block -----------------*/
			/*------------------  the start of third article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-3',
				'type' => 'text',
				'title' => esc_html__( 'Title of third article', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-3',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of third article', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the end of third article block -----------------*/
			/*------------------  the start of fourth article block-----------------*/
			array(
				'id' => 'rmbt-benefits-block_article-title-4',
				'type' => 'text',
				'title' => esc_html__( 'Title of fourth article', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-benefits-block_article-text-4',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of fourth article', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the end of fourth article block -----------------*/
			array(
				'id' => 'rmbt-benefits-bg-picture_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture for benefits-bg-picture article', RMBT_TEXT_DOMAIN_THEME ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/no-image.jpg'
				),
			),
			array(
				'id' => 'rmbt-benefits-bg-picture_img-alt',
				'type' => 'text',
				'title' => esc_html__( 'Image description for benefits-bg-picture', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( '', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'benefits-block_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ the end benefits-block accordion ------------------*/


			/*------------------ the start facts-block accordion ------------------*/
			array(
				'id' => 'facts-block_start',
				'type' => 'accordion',
				'title' => esc_html__( 'Facts Block Section', RMBT_TEXT_DOMAIN_THEME ),
				'subtitle' => 'Add your content to the section \'Facts Block\'',
				'position' => 'start',
			),
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-facts-block_article-title-1',
				'type' => 'text',
				'title' => esc_html__( 'Title of first article', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'партнерів', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-facts-block_article-text-1',
				'type' => 'text',
				'title' => esc_html__( 'Text of first article', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the end of first article block -----------------*/
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-facts-block_article-title-2',
				'type' => 'text',
				'title' => esc_html__( 'Title of first article', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'проектів', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-facts-block_article-text-2',
				'type' => 'text',
				'title' => esc_html__( 'Text of first article', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the end of first article block -----------------*/
			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-facts-block_article-title-3',
				'type' => 'text',
				'title' => esc_html__( 'Title of first article', RMBT_TEXT_DOMAIN_THEME ),
				'default' => esc_html__( 'співробітників', RMBT_TEXT_DOMAIN_THEME ),
			),
			array(
				'id' => 'rmbt-facts-block_article-text-3',
				'type' => 'text',
				'title' => esc_html__( 'Text of first article', RMBT_TEXT_DOMAIN_THEME ),
			),
			/*------------------  the end of first article block -----------------*/
			array(
				'id' => 'facts-block_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ the end facts-block accordion ------------------*/


			/*------------------ the start  accordion ------------------*/
			array(
				'id' => 'clients-portfolio_start',
				'type' => 'accordion',
				'title' => esc_html__( 'Clients Portfolio Section', RMBT_TEXT_DOMAIN_THEME ),
				'subtitle' => 'Add your content to the section \'Clients Portfolio\'',
				'position' => 'start',
			),

			array(
				'id' => 'clients-portfolio_gallery',
				'type' => 'gallery',
				'title' => esc_html__( 'Add/Edit Gallery on the main screen ', RMBT_TEXT_DOMAIN_THEME ),
			),

			array(
				'id' => 'clients-portfolio_end',
				'type' => 'accordion',
				'position' => 'end'
			),
			/*------------------ the end  accordion ------------------*/














			// /*------------------ the start benefits-block accordion ------------------*/
			// array(
			// 	'id' => 'benefits-block_start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('benefits-block section', RMBT_TEXT_DOMAIN_THEME),
			// 	'subtitle' => 'Add your content to the section \'benefits-block\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'rmbt-benefits-block_section-title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('benefits-block Section Title', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// /*------------------  the start of first article block-----------------*/
			// array(
			// 	'id' => 'rmbt-benefits-block_article-title-1',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Title of first article', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'rmbt-benefits-block_article-text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Text of first article', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// /*------------------  the end of first article block -----------------*/
			// array(
			// 	'id' => 'benefits-block_end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),
			// /*------------------ the end benefits-block accordion ------------------*/








			// array(
			// 	'id' => 'front_page_slogan',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front page slogan', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('Explore food Menu'),
			// ),
			// array(
			// 	'id' => 'front_page_slogan_label',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Front Page label', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/exlore-food-menu.png'
			// 	),
			// ),



			// array(
			// 	'id' => 'about-section-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('About Section', RMBT_TEXT_DOMAIN_THEME),
			// 	'subtitle' => 'Add your content to the section \'About\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'about_section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Section Title', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('About Restaurant ', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'about_section_text',
			// 	'type' => 'textarea',
			// 	'title' => esc_html__('About Section Text', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'about_section_button_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Button Title', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('READ MORE', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'about_section_button_href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Button link', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => get_front_url() . "/about/",
			// ),
			// array(
			// 	'id' => 'about_section_img_1',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 1', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_2',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 2', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_3',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 3', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_4',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 4', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_button',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Read Revie Button', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/orang-sercle.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_icon',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Read Revie Icon', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_reviews.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Read Revie Text', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => __(wp_kses('READ <p>REVIEWS</p>', array('p' => array())), RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'front_delivery_icon',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Front Delivery Icon', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_phone.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'front_delivery_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front Delivery Text', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => __(wp_kses('CALL US NOW FOR <p>FRONT DELIVERY</p>', array('p' => array())), RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'about-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'today-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Today Section', RMBT_TEXT_DOMAIN_THEME),
			// 	'subtitle' => 'Add your content to the section \'Today\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'today_section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front page title', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('Today Special', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'today-gallery',
			// 	'type' => 'gallery',
			// 	'title' => esc_html__('Add/Edit Today Gallery', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'today_section_footer_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Footer Text', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => __(wp_kses('front <p> delivery </p>', array('p' => array())), RMBT_TEXT_DOMAIN_THEME),
			// ),

			// array(
			// 	'id' => 'today-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'restaurant_menu-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Restaurant Menu', RMBT_TEXT_DOMAIN_THEME),
			// 	'subtitle' => 'Add your content to the section \'Restaurant Menu\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Section Title', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('Food Menu', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_button_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Button Title', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('Explor food menu', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_button_href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Button link', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => get_front_url() . "/food-menu-items/",
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_1',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag right', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_311x311.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_2',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag left', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_267x414.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_3',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag down', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_241x241.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_icon_first_item_menu',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Icon of the first menu item', RMBT_TEXT_DOMAIN_THEME),
			// 	'subtitle' => esc_html__('Set if this item is for all food categories', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_all.png'
			// 	),
			// ),

			// array(
			// 	'id' => 'restaurant_menu-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),


			// array(
			// 	'id' => 'clients-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Clients section', RMBT_TEXT_DOMAIN_THEME),
			// 	'subtitle' => 'Add your content to the section \'Clients Menu\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'clients-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Clients menu section title', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('Happy Clients', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'clients-section_background_img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Background Img', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/background-clients-block.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'clients-section_avatar_default',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Default avatar of client', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'thumbnail',
			// 	'default' => array(
			// 		'url' => '/assets/img/icons/sprite.svg#avatar_default'
			// 	),
			// ),

			// array(
			// 	'id' => 'clients-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'reserve-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Reserve section', RMBT_TEXT_DOMAIN_THEME),
			// 	'subtitle' => 'Add your content to the section \'Reserve Menu\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'reserve-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section title', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('Reserve your table', RMBT_TEXT_DOMAIN_THEME),
			// ),

			// array(
			// 	'id' => 'reserve-section_background_img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Reserve Section Img', RMBT_TEXT_DOMAIN_THEME),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_559x334.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'reserve-section_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section title', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__(wp_kses('<span>for a reservation</span>', RMBT_TEXT_DOMAIN_THEME)),
			// ),
			// array(
			// 	'id' => 'reserve-section_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section text', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__(wp_kses('You can also call <span>for a reservation</span>', RMBT_TEXT_DOMAIN_THEME)),
			// ),
			// array(
			// 	'id' => 'reserve-section_button-title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section button title', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_html__('Make reservation', RMBT_TEXT_DOMAIN_THEME),
			// ),
			// array(
			// 	'id' => 'reserve-section_button-href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section button href', RMBT_TEXT_DOMAIN_THEME),
			// 	'default' => esc_url('#'),
			// ),

			// array(
			// 	'id' => 'reserve-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),
		),
	),
);
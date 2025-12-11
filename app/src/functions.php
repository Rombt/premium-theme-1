<?php

// define(RMBT_TEXT_DOMAIN_THEME, 'premium-theme-1');       //! you must use only chars those allow for url
define( 'rmbt_PATH_THEME', get_template_directory() );
define( 'rmbt_URL_THEME', esc_url( get_template_directory_uri() ) );
define( 'rmbt_DIR_TEMPLATE_PARTS', 'pages' );

require_once get_template_directory() . '/inc/functions/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/functions/general-front.php';
// require_once get_template_directory() . '/inc/functions/comment_default.php';
// require_once get_template_directory() . '/inc/functions/ajax.php';

if ( file_exists( get_template_directory() . DIRECTORY_SEPARATOR . rmbt_DIR_TEMPLATE_PARTS . DIRECTORY_SEPARATOR . '_templates' ) ) {
	require_once get_template_directory() . '/inc/functions/templates_page.php';
}



if ( class_exists( 'ReduxFramework' ) ) {
	define(
		'RMBT_PATH_REDUX_SECTIONS',
		array(
			rmbt_PATH_THEME . '/inc/Redux/sections',
			rmbt_PATH_THEME . '/pages',
		)
	);
	require_once rmbt_PATH_THEME . '/inc/Redux/redux-options.php';
}

if ( class_exists( 'WooCommerce' ) ) {
	require_once get_template_directory() . '/woocommerce/wc-functions.php';
	require_once get_template_directory() . '/woocommerce/wc-functions-remove.php';
}

function rmbt_theme_scripts() {

	wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/styles/libs/swiper-bundle.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'premium-theme-1' . '-main', get_template_directory_uri() . '/assets/styles/main-style.min.css', array(), '1.0', 'all' );

	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/libs/swiper-bundle.min.js', array(), '', true );
	wp_enqueue_script( 'anime_js', get_template_directory_uri() . '/assets/js/libs/anime.min.js', array(), 'v3.2.2', true );
	wp_enqueue_script( 'premium-theme-1' . '-app', get_template_directory_uri() . '/assets/js/app.main.min.js', array( 'jquery' ), '1.0', true );

	wp_add_inline_script(
		'rmbt_theme-app',
		'const rmbt_theme_App = ' . json_encode(
			array(
			// 'ajaxUrl' => admin_url('ajax.php'),      // ????
			// 'rmbtArrCategories' => $categories,      // your data if you need it
			)
		),
		'before'
	);
}
add_action( 'wp_enqueue_scripts', 'rmbt_theme_scripts', 20 );

function rmbt_site_setup() {

	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'header_nav'          => esc_html__( 'rmbt_Header Navigation', 'premium-theme-1' ),
			'footer_nav'          => esc_html__( 'rmbt_Footer Navigation', 'premium-theme-1' ),
			'rmbt-vertical-nav-0' => esc_html__( 'rmbt Vertical Navigation 0', 'premium-theme-1' ),
		)
	);

	load_theme_textdomain( 'premium-theme-1', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'rmbt_site_setup' );

function simple_rmbt_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'simple_' . 'premium-theme-1' . '_content_width', 640 );
}
add_action( 'after_setup_theme', 'simple_rmbt_theme_content_width', 0 );

function rmbt_theme_register_required_plugins() {
	$plugins = array(
		array(
			'name'               => 'premium-theme-1' . ' core',
			// The plugin name.
			'slug'               => 'premium-theme-1' . '-core',
			// The plugin slug (typically the folder name).
			'source'             => WP_PLUGIN_DIR . '/' . 'premium-theme-1' . '-core',
			// The plugin source.
			'required'           => true,
			// If false, the plugin is only 'recommended' instead of required.
			'version'            => '1.0',
			// E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false,
			// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false,
			// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		),

		// array(
		// 'name' => 'Advanced Custom Fields',
		// 'slug' => 'advanced-custom-fields',
		// 'required' => true,
		// ),

		array(
			'name'     => 'Redux Framework',
			'slug'     => 'redux-framework',
			'required' => true,
		),

	);

	$config = array(
		'id'           => 'rombt-tgmpa-plugin',
		// Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',
		// Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins',
		// Menu slug.
		'has_notices'  => true,
		// Show admin notices or not.
		'dismissable'  => true,
		// If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',
		// If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,
		// Automatically activate plugins after installation or not.
		'message'      => '', // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'rmbt_theme_register_required_plugins' );

function rmbt_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar For Blog page', 'premium-theme-1' ),
			'id'            => 'rmbt_blog_sidebar',
			'description'   => esc_html__( 'Add widgets here', 'premium-theme-1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar For Shop page', 'premium-theme-1' ),
			'id'            => 'rmbt_shop_sidebar',
			'description'   => esc_html__( 'Add widgets here', 'premium-theme-1' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rmbt_widgets_init' );


function theme_customize_register( $wp_customize ) {
	$wp_customize->add_setting(
		'custom_footer_logo',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'custom_footer_logo',
			array(
				'label'    => __( 'Footer Logo', 'premium-theme-1' ),
				'section'  => 'title_tagline',
				'settings' => 'custom_footer_logo',
			)
		)
	);
}
add_action( 'customize_register', 'theme_customize_register' );


function premium_theme_1_register_block_styles() {
	// Кастомный стиль для блока кнопки
	register_block_style(
		'core/button',
		array(
			'name'  => 'rmbt-solid-button',
			'label' => __( 'RMBT Solid', 'premium-theme-1' ),
		)
	);

	// Кастомный стиль для блока заголовка
	register_block_style(
		'core/heading',
		array(
			'name'  => 'rmbt-fancy-heading',
			'label' => __( 'RMBT Fancy', 'premium-theme-1' ),
		)
	);
}
add_action( 'init', 'premium_theme_1_register_block_styles' );



function premium_theme_1_block_support() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );

	// Пример блока: кнопка
	register_block_style(
		'core/button',
		array(
			'name'  => 'rmbt-solid',
			'label' => __( 'RMBT Solid', 'premium-theme-1' ),
		)
	);

	// Пример шаблона блока
	register_block_pattern(
		'premium-theme-1/hero-section',
		array(
			'title'       => __( 'Hero Section', 'premium-theme-1' ),
			'description' => __( 'Hero section with background and title', 'premium-theme-1' ),
			'content'     => '<!-- wp:cover {"url":"example.jpg"} /-->',
		)
	);
}
add_action( 'after_setup_theme', 'premium_theme_1_block_support' );



add_theme_support(
	'custom-header',
	array(
		'width'       => 1920,
		'height'      => 400,
		'flex-width'  => true,
		'flex-height' => true,
	)
);

add_theme_support(
	'custom-background',
	array(
		'default-color' => 'ffffff',
		'default-image' => '',
	)
);



add_action(
	'after_setup_theme',
	function () {
		add_editor_style( 'assets/css/editor-style.css' );
	}
);



function premium_theme_1_enqueue_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'premium_theme_1_enqueue_scripts' );



/**
 * Автоматическая очистка устаревших опций Redux.
 * Удаляет значения полей, которых больше нет в конфигурации Redux.
 */
// function rmbt_redux_clean($options)      //!!! не работает !!!
// {
// $opt_name = 'rmbt_theme_options';
// $redux = Redux::instance($opt_name);

// $valid_keys = [];
// foreach ((array) $redux->sections as $section) {
// foreach ((array) $section['fields'] as $field) {
// $valid_keys[] = $field['id'];
// }
// }

// $original = get_option($opt_name, []);

// $removed = [];
// foreach ($original as $key => $value) {
// if (!in_array($key, $valid_keys, true)) {
// $removed[$key] = $value;
// unset($original[$key]);
// }
// }

// if (!empty($removed)) {

// $backup_path = get_template_directory() . '/app/src/inc/_backups/redux-diff-backup-' . date('Y-m-d_H.i.s') . '.json';
// if (!file_exists(dirname($backup_path))) {
// mkdir(dirname($backup_path), 0755, true); // ✅ создаём все недостающие папки рекурсивно
// }
// file_put_contents($backup_path, wp_json_encode($removed, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
// update_option($opt_name, $original);
// }

// }
// add_action("redux/options/rmbt_theme_options/saved", 'rmbt_redux_clean');


// //todo сделать соответствующую кнопку в админ панели с выбором файла из которого подымать backup, а пока вручную
// function rmbt_redux_restore_backup()
// {

// $backup_file = '';  //**

// $backup = json_decode(file_get_contents($backup_file), true);
// $options = get_option('rmbt_theme_options', []);
// $options = array_merge($options, $backup); // добавляем только отсутствующие ключи
// update_option('rmbt_theme_options', $options);
// }










// add_action('redux/options/rmbt_theme_options/saved', function ($options) {

// $opt_name = 'rmbt_theme_options';
// $redux = Redux::instance($opt_name);

// $valid_keys = [];
// foreach ((array) $redux->sections as $section) {
// foreach ((array) $section['fields'] as $field) {
// $valid_keys[] = $field['id'];
// }
// }

// $original = get_option($opt_name, []);
// $removed = [];

// foreach ($original as $key => $value) {
// if (!in_array($key, $valid_keys, true)) {
// $removed[$key] = $value;
// unset($original[$key]);
// }
// }

// if (!empty($removed)) {

// $backup_path = get_template_directory() . '/app/src/inc/_backups/redux-diff-backup-' . date('Y-m-d-His') . '.json';
// if (!file_exists(dirname($backup_path))) {
// mkdir(dirname($backup_path), 0755, true); // ✅ создаём все недостающие папки рекурсивно
// }
// file_put_contents($backup_path, wp_json_encode($removed, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// update_option($opt_name, $original);
// }

// });



// ===========================================================================
// ===========================================================================

// function menu_item_css_classes( $classes, $item, $args, $depth ) {
// if ( isset( $args->add_li_class ) ) {
// $classes[] = $args->add_li_class;
// }

// return $classes;
// }
// add_filter( 'nav_menu_css_class', 'menu_item_css_classes', 10, 4 );

// function rmbt_add_class_menus_links( $atts, $item, $args ) {
// if ( isset( $args->add_link_class ) ) {
// $atts['class'] = $args->add_link_class;
// }

// return $atts;
// }
// add_filter( 'nav_menu_link_attributes', 'rmbt_add_class_menus_links', 10, 3 );

// function rmbt_change_menus_items( $args, $item ) {
// global $rmbt_theme_options;

// if ( $args->theme_location === 'food_menu' ) {
// if ( class_exists( 'ReduxFramework' ) && in_array( 'menu-item-type-post_type_archive', $item->classes ) ) {
// $args->before = '<img src="' . $rmbt_theme_options['restaurant_menu-section_icon_first_item_menu']['url'] . '" alt="">';
// } else {
// if ( class_exists( 'ACF' ) ) {
// $args->before = '<img src="' . get_field( 'food-categories-icon', 'term_' . $item->object_id ) . '" alt="">';
// }
// }
// } elseif ( $args->theme_location === 'brows_recipes' ) {
// if ( class_exists( 'ACF' ) ) {
// $args->before = '<img src="' . get_field( 'food-recepes-icon', 'term_' . $item->object_id ) . '" alt="">';
// }
// }

// return $args;
// }
// add_filter( 'nav_menu_item_args', 'rmbt_change_menus_items', 10, 2 );


// function enqueue_comment_reply() {
// if ( is_singular() )
// wp_enqueue_script( 'comment-reply' );
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_comment_reply' );

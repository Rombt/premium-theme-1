<?php
/**
 * Theme functions.
 *
 * @package rmbt
 */

defined( 'ABSPATH' ) || exit;


define( 'RMBT_PATH_THEME', get_template_directory() );
define( 'RMBT_URL_THEME', esc_url( get_template_directory_uri() ) );
define( 'RMBT_DIR_TEMPLATE_PARTS', 'pages' );

require_once get_template_directory() . '/inc/functions/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/functions/helpers.php';

if ( file_exists( get_template_directory() . DIRECTORY_SEPARATOR . RMBT_DIR_TEMPLATE_PARTS . DIRECTORY_SEPARATOR . '_templates' ) ) {
	require_once get_template_directory() . '/inc/functions/templates-page.php';
}



if ( class_exists( 'ReduxFramework' ) ) {
	define(
		'RMBT_PATH_REDUX_SECTIONS',
		array(
			RMBT_PATH_THEME . '/inc/Redux/sections',
			RMBT_PATH_THEME . '/pages',
		)
	);
	require_once RMBT_PATH_THEME . '/inc/Redux/redux-options.php';
}

if ( class_exists( 'WooCommerce' ) ) {
	require_once get_template_directory() . '/woocommerce/wc-functions.php';
	require_once get_template_directory() . '/woocommerce/wc-functions-remove.php';
}

/**
 * Enqueue theme styles and scripts.
 *
 * @return void
 */
function rmbt_theme_scripts() {

	wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/styles/libs/swiper-bundle.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'premium-theme-1-main', get_template_directory_uri() . '/assets/styles/main-style.min.css', array(), '1.0', 'all' );

	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/libs/swiper-bundle.min.js', array(), '12.0.3', true );
	wp_enqueue_script( 'anime_js', get_template_directory_uri() . '/assets/js/libs/anime.min.js', array(), 'v3.2.2', true );
	wp_enqueue_script( 'premium-theme-1-app', get_template_directory_uri() . '/assets/js/app.main.min.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'rmbt_theme_scripts', 20 );

/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * @return void
 */
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

/**
 * Set the content width in pixels, based on the theme's design.
 *
 * @return void
 */
function rmbt_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'premium_theme_1_content_width', 640 );
}
add_action( 'after_setup_theme', 'rmbt_theme_content_width', 0 );

/**
 * Register required and recommended plugins using TGMPA.
 *
 * @return void
 */
function rmbt_theme_register_required_plugins() {
	$plugins = array(
		array(
			'name'               => 'premium-theme-1-core',
			// The plugin name.
			'slug'               => 'premium-theme-1-core',
			// The plugin slug (typically the folder name).
			'source'             => WP_PLUGIN_DIR . '/premium-theme-1-core',
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

/**
 * Register widget areas.
 *
 * @return void
 */
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

/**
 * Register Customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @return void
 */
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

/**
 * Register custom block styles.
 *
 * @return void
 */
function premium_theme_1_register_block_styles() {
	// Кастомный стиль для блока кнопки.
	register_block_style(
		'core/button',
		array(
			'name'  => 'rmbt-solid-button',
			'label' => __( 'RMBT Solid', 'premium-theme-1' ),
		)
	);

	// Кастомный стиль для блока заголовка.
	register_block_style(
		'core/heading',
		array(
			'name'  => 'rmbt-fancy-heading',
			'label' => __( 'RMBT Fancy', 'premium-theme-1' ),
		)
	);
}
add_action( 'init', 'premium_theme_1_register_block_styles' );

/**
 * Enable block editor features and register custom block assets.
 *
 * @return void
 */
function premium_theme_1_block_support() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );

	// Пример блока: кнопка.
	register_block_style(
		'core/button',
		array(
			'name'  => 'rmbt-solid',
			'label' => __( 'RMBT Solid', 'premium-theme-1' ),
		)
	);

	// Пример шаблона блока.
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


/**
 * Enqueue comment-reply script when needed.
 *
 * @return void
 */
function premium_theme_1_enqueue_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'premium_theme_1_enqueue_scripts' );

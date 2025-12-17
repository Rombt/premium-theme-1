<?php
/**
 *
 * Plugin Name: premium-theme-1 core
 * Plugin URI: #
 * Description:
 * Version: 1.0
 * Author: Rombt
 * Author URI: #
 * License: Proprietary
 * Text Domain: premium-theme-1
 *
 * @package premium-theme-1
 **/

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

require_once plugin_dir_path( __FILE__ ) . 'inc/general-admin.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/project_post_type/project_post_type.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/application_processing_form/application_processing_form.php';

/**
 * Enqueue admin styles and scripts for the theme core.
 *
 * @return void
 */
function rmbt_theme_scripts_admin() {
	wp_enqueue_style( 'premium-theme-1-admin_main', plugins_url() . '/premium-theme-1-core/assets/styles/main-style.min.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'premium-theme-1-admin_core', plugins_url() . '/premium-theme-1-core/assets/js/admin.main.min.js', array( 'jquery' ), '1.0', true );
}
add_action( 'admin_enqueue_scripts', 'rmbt_theme_scripts_admin' );

/**
 * Return custom image sizes used in the theme.
 *
 * @return array List of image sizes with width, height, and crop settings.
 */
function rmbt_get_images_sizes() {

	return array(
		'post' => array(
			array(
				'name'   => 'rmbt_post-img',
				'width'  => 845,
				'height' => 400,
				'crop'   => true,
			),
			array(
				'name'   => 'rmbt_small-img',
				'width'  => 70,
				'height' => 70,
				'crop'   => true,
			),
			array(
				'name'   => 'rmbt_largest-img',
				'width'  => 1970,
				'height' => 570,
				'crop'   => true,
			),
			array(
				'name'   => 'rmbt_header-img',
				'width'  => 1970,
				'height' => 250,
				'crop'   => true,
			),
		),
	);
}
add_action( 'plugins_loaded', 'rmbt_register_image_size' );

/**
 * Register custom image sizes defined by the theme.
 *
 * @return void
 */
function rmbt_register_image_size() {

	if ( function_exists( 'rmbt_get_images_sizes' ) ) {
		foreach ( rmbt_get_images_sizes() as $post_type => $sizes ) {
			foreach ( $sizes as $config ) {
				add_image_size( $config['name'], $config['width'], $config['height'], $config['crop'] );
			}
		}
	}
}

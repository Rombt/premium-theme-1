<?php
/**
 * WooCommerce Theme Functions.
 *
 * @package rmbt
 */

if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ), true ) ) {
	exit;
}

/**
 * Setup WooCommerce features for the theme.
 *
 * @return void
 */
function rmbt_wc_site_setup() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'rmbt_wc_site_setup' );

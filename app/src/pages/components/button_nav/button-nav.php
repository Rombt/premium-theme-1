<?php
/**
 * Button navigation.
 *
 * @package RMBT_Theme
 */

defined( 'ABSPATH' ) || exit;
?>


<a href="<?php echo esc_html( $args['href'] ); ?>" class="rmbt-button-nav <?php echo ! empty( $args['classes'] ) ? esc_html( $args['classes'] ) : ''; ?>" <?php echo ! empty( $args['data'] ) ? esc_html( $args['data'] ) : ''; ?>>
	<span><?php echo esc_html( $args['title'] ); ?></span>
</a>

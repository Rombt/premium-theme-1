<?php
/**
 * Button template.
 *
 * @package Premium_Theme_1
 */

defined( 'ABSPATH' ) || exit;
?>

<a href="<?php echo esc_html( $args['href'] ); ?>" class='rmbt-button <?php echo esc_html( $class['class'] ); ?>'>
	<?php echo ! empty( $args['text'] ) ? esc_html( $args['text'] ) : 'simple button'; ?>
</a>

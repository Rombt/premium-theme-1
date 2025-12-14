<?php
/**
 * Search Form Template.
 *
 * @package rmbt
 */

defined( 'ABSPATH' ) || exit;
?>

<form class="rmbt-search-modal__form" method="get"
			action="<?php echo esc_url( home_url() ); ?>">
			<input type="search" value="<?php echo get_search_query(); ?>" name="s" id="s"
				placeholder="<?php esc_attr_e( 'Введіть текст...', 'premium-theme-1' ); ?>" />
			<input type="submit" class="rmbt-button"
				value="<?php esc_attr_e( 'пошук', 'premium-theme-1' ); ?>" />
</form>

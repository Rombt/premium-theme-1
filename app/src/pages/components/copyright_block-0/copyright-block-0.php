<?php
/**
 * Copyright block 0 section.
 *
 * @package RMBT_Theme
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="rmbt-copyright-block">
	<div class='rmbt-copyright-block__body'>
		2024 Rombt Net Studio
		<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo get_icon_svg( 'copyright_1', false, 'rmbt-copyright-block__body' );
		?>
		All rights reserved
	</div>
</div>

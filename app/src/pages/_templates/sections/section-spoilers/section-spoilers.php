<?php
/**
 * Section Spoilers template.
 *
 * @package Premium_Theme_1
 */

defined( 'ABSPATH' ) || exit;
?>


<div class="rmbt-full-width rmbt-section-spoilers-full-width">
	<section class="rmbt-container rmbt-section-spoilers">
		<div class="rmbt-section-spoilers-head">
			<h2 class='rmbt-section-spoilers-head__title'>
				<div class="block-details"> title </div>
			</h2>
			<p class='rmbt-section-spoilers-head__subtitle block-details'>
				subtitle
			</p>
		</div>
		<div class="rmbt-section-spoilers__row">
			<div class='rmbt-section-spoilers__left-col'>
				<?php get_template_part( 'pages\_templates\components\spoilers-block\spoilers-block', 'block' ); ?>
			</div>
			<div class='rmbt-section-spoilers__right-col '>
				<div class="wrap-img">
				</div>
			</div>
		</div>
	</section>
</div>

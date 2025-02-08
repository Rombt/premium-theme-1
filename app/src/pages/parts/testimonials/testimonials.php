<?php global $rmbt_theme_options; ?>

<div class="rmbt-full-width rmbt-testimonials-full-width">
	<section class="rmbt-container rmbt-testimonials" <?php if ( isset( $rmbt_theme_options['rmbt-testimonials-card_section-title'] ) && $rmbt_theme_options['rmbt-testimonials-card_section-title'] == "" ) :
		echo 'style="padding-top: 15px; padding-bottom: 15px;"';
	endif ?>>

		<?php if ( $rmbt_theme_options['rmbt-testimonials-card_section-title'] ) : ?>
			<h2 class='title-section'> <?php echo rmbt_get_redux_field( 'rmbt-testimonials-card_section-title', 1 ) ?>
			</h2>
		<?php endif ?>
		<?php if ( isset( $rmbt_theme_options['rmbt-testimonials-card_section-subtitle'] ) && $rmbt_theme_options['rmbt-testimonials-card_section-subtitle'] !== "" ) : ?>
			<p class='subtitle-section'>
				<?php echo rmbt_get_redux_field( 'rmbt-testimonials-card_section-subtitle', 1 ) ?>
			</p>
		<?php endif ?>


	</section>
</div>
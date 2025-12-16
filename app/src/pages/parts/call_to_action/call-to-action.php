<?php
/**
 * Call to action section.
 *
 * @package RMBT_Theme
 */

defined( 'ABSPATH' ) || exit;


global $rmbt_theme_options; ?>


<div class="wrapper-section call-to-action-wrapper-section">
	<div class="rmbt-full-width rmbt-call-to-action-full-width">
		<div class="rmbt-call-to-action-full-width__bg">
			<div class="wrap-img">
				<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo rmbt_redux_img( 'rmbt-call-to-action-bg-img', 'rmbt-call-to-action-bg-img-alt' );
				?>
			</div>
		</div>
		<section class="rmbt-container rmbt-call-to-action"
			<?php
			if ( isset( $rmbt_theme_options['rmbt-call-to-action-card_section-title'] ) && '' === $rmbt_theme_options['rmbt-call-to-action-card_section-title'] ) :
				echo 'style="padding-top: 15px; padding-bottom: 15px;"';
			endif
			?>
			<?php if ( $rmbt_theme_options['rmbt-call-to-action-card_section-title'] ) : ?>
				<h2 class='title-section'> <?php echo esc_html( rmbt_get_redux_field( 'rmbt-call-to-action-card_section-title', 1 ) ); ?>
				</h2>
			<?php endif ?>
			<?php if ( isset( $rmbt_theme_options['rmbt-call-to-action-card_section-subtitle'] ) && '' !== $rmbt_theme_options['rmbt-call-to-action-card_section-subtitle'] ) : ?>
				<p class='subtitle-section'>
					<?php echo esc_html( rmbt_get_redux_field( 'rmbt-call-to-action-card_section-subtitle', 1 ) ); ?>
				</p>
			<?php endif ?>
			<div class="rmbt-call-to-action__row">
				<form id="rmbt-call-to-action-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
					method="post" class="rmbt-call-to-action__left-col">
					<?php wp_nonce_field( 'rmbt_call_to_action_form', 'rmbt_call_to_action_form_nonce' ); ?>
					<input type="hidden" name="action" value="rmbt_call_to_action_form">
					<div class="form-field-group rmbt-call-to-action__name">
						<label for="name" class="subtitle-block">Name *</label>
						<input type="text" id="name" name="name" class='shadow-box' required>
					</div>
					<div class="form-field-group rmbt-call-to-action__phone">
						<label for="phone" class="subtitle-block">Phone *</label>
						<input type="tel" id="phone" name="phone" class='shadow-box' required pattern="\+?[0-9\-\s]+">
					</div>
					<div class="form-field-group rmbt-call-to-action__email">
						<label for="email" class="subtitle-block">Email</label>
						<input type="email" id="email" name="email" class='shadow-box'>
					</div>
					<div class="form-field-group rmbt-call-to-action__message">
						<label for="message" class="subtitle-block">Message</label>
						<textarea id="message" name="message" class='shadow-box'></textarea>
					</div>
					<button type="submit" class='rmbt-button-cta'>
						<span>
							<?php echo esc_html( rmbt_get_redux_field( 'rmbt-call-to-action-button-cta', 1 ) ); ?>
						</span>
					</button>
				</form>
				<div id="thank-you-modal" class="modal">
					<div class="modal-content">
						<p>
							<?php echo esc_html( rmbt_get_redux_field( 'rmbt-call-to-action-modal-content', 1 ) ); ?>
						</p>
						<button id="close-modal-btn">Close</button>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<?php
/**
 * Contacts Template.
 *
 * @package premium-theme-1
 */

defined( 'ABSPATH' ) || exit;


global $rmbt_theme_options; ?>

<div class="wrapper-section contacts-page-wrapper-section">
		<div class="rmbt-full-width rmbt-contacts-page-full-width">
			<div class="rmbt-we-do-block-full-width__bg">
				<div class="wrap-img">
				</div>
			</div>
			<section class="rmbt-container rmbt-contacts-page">
				<h2 class="title-section"><?php echo esc_html( rmbt_get_redux_field( 'rmbt-contacts-page_section-title' ) ); ?></h2>
				<p class="subtitle-section"><?php echo esc_html( rmbt_get_redux_field( 'rmbt-contacts-page_section-subtitle' ) ); ?></p>
				<div class="rmbt-contacts-page__row">
					<div class="rmbt-contacts-page__col-left">
						<div class="wrap-img shadow-box rmbt-contacts-page__poster">
							<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							echo rmbt_redux_img( 'rmbt-contacts-page_poster-1', 'rmbt-contacts-page_poster-1-alt' );
							?>
						</div>
						<div class="wrap-img shadow-box rmbt-contacts-page__poster">
							<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							echo rmbt_redux_img( 'rmbt-contacts-page_poster-2', 'rmbt-contacts-page_poster-2-alt' );
							?>
							</div>
						<div class="wrap-img shadow-box rmbt-contacts-page__poster">
							<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							echo rmbt_redux_img( 'rmbt-contacts-page_poster-3', 'rmbt-contacts-page_poster-3-alt' );
							?>
						</div>
					</div>
					<div class="rmbt-contacts-page__col-right rmbt-contacts">
						<div class="rmbt-contacts__location"><?php echo esc_html( rmbt_get_redux_field( 'contact_address', 1 ) ); ?></div>
						<div class="rmbt-slide-in-tabs" data-rmbt-tabs-container="rmbt-contacts-tabs">
							<?php $qty = count( $rmbt_theme_options['rmbt-managers_id'] ); ?>
							<?php if ( $qty > 0 ) { ?>
								<div class="rmbt-slide-in-tabs-content">
									<?php for ( $i = 0; $i < $qty; $i++ ) { ?>
										<div class="rmbt-slide-in-tabs-content__item <?php echo ( 0 === $i ) ? 'active' : ''; ?>" data-rmbt-tab-content-item="tab_<?php echo esc_html( $i ); ?>">
											<p class="rmbt-contacts__name title-block"><?php echo esc_html( $rmbt_theme_options['rmbt-managers_name'][ $i ] ); ?></p>
											<!-- <p class="rmbt-contacts__position">(<?php echo esc_html( $rmbt_theme_options['rmbt-managers_position'][ $i ] ); ?>)</p> -->
											<a href="tel:<?php echo esc_html( rmbt_phone_number_clear_redux( $rmbt_theme_options['rmbt-managers_phone'][ $i ] ) ); ?>" class="rmbt-contacts__phone subtitle-block"><?php echo esc_html( $rmbt_theme_options['rmbt-managers_phone'][ $i ] ); ?></a>
											<a href="mailto:<?php echo esc_html( $rmbt_theme_options['rmbt-managers_email'][ $i ] ); ?>" class="rmbt-contacts__email subtitle-block"><?php echo esc_html( $rmbt_theme_options['rmbt-managers_email'][ $i ] ); ?></a>
										</div>
									<?php } ?>
								</div>
								<div class="rmbt-slide-in-tabs-nav">
									<?php for ( $i = 0; $i < $qty; $i++ ) { ?>
										<div class="rmbt-slide-in-tabs-nav__item shadow-box <?php echo ( 0 === $i ) ? 'active' : ''; ?>" data-rmbt-tab-nav-item="tab_<?php echo esc_html( $i ); ?>">
											<?php echo esc_html( $rmbt_theme_options['rmbt-managers_position'][ $i ] ); ?>
										</div>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="rmbt-contacts-page__map">
						<?php
						$address     = rmbt_get_redux_field( 'contact_map_address' );
							$zoom    = intval( rmbt_get_redux_field( 'contact_map_zoom' ) );
							$map_url = 'https://www.google.com/maps?q=' . rawurlencode( $address ) . '&z=' . $zoom . '&output=embed';
						?>
						<?php if ( ! empty( $address ) ) : ?>
						<iframe class="rmbt-map-iframe"
							loading="lazy"
							allowfullscreen
							src="<?php echo esc_url( $map_url ); ?>">
						</iframe>
						<?php endif; ?>
					</div>
				</div>
			</section>
		</div>
	</div>

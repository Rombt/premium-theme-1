<?php
/**
 * Footer Layout 0 Template.
 *
 * @package premium-theme-1
 */

defined( 'ABSPATH' ) || exit;
?>


<div class="rmbt-full-width rmbt-footer-0-full-width">


	<div class="rmbt-footer-0-full-width__bg">
		<div class="wrap-img">
			<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo rmbt_redux_img( 'rmbt-bg_footer-img', 'rmbt-bg_footer-img_alt' );
			?>
		</div>
	</div>
	<section class="rmbt-container rmbt-footer-0">
		<div class="rmbt-footer-0__row rmbt-footer-0-row-content">
			<div class="rmbt-footer-0__col rmbt-footer-0-row-content__left-col">
				<div class="rmbt-site-logo">
					<?php
					$footer_logo = get_theme_mod( 'custom_footer_logo' );
					if ( $footer_logo ) {
						echo '<img src="' . esc_url( $footer_logo ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
					} elseif ( has_custom_logo() ) {
						the_custom_logo();
					}
					?>
				</div>
				<?php
				$description = get_bloginfo( 'description' );
				if ( ! empty( $description ) ) {
					?>
					<p class="subtitle-block rmbt-site-description"><?php echo esc_html( $description ); ?></p>
					<?php } ?>
				<?php
				get_template_part(
					'pages/components/social_networks/social_networks',
					null,
					array(
						'data' => 'data-da=".rmbt-footer-0-row-content__right-col, 1024, last"',
					)
				);
				?>
			</div>
			<div class="rmbt-footer-0__col rmbt-footer-0-row-content__center-col">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer_nav',
						'container'      => 'nav',
						'depth'          => 1,
					)
				);
				?>
			</div>
			<div class="rmbt-footer-0__col rmbt-footer-0-row-content__right-col">
				<ul>
					<li class="rmbt-footer-phone">
						<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						echo get_icon_svg( 'phone_2' );
						?>
						<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						echo rmbt_redux_repeater_to_ul( 'rmbt-managers_phone', 'tel', 'rmbt-managers-show', 'footers' );
						?>
						<div class="ul-toggle-wrap">
							<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							echo get_icon_svg( 'triangle' );
							?>
						</div>
					</li>
					<li class="rmbt-footer-email">
						<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						echo get_icon_svg( 'email_2' );
						?>
						<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						echo rmbt_redux_repeater_to_ul( 'rmbt-managers_email', 'mailto', 'rmbt-managers-show', 'footers' );
						?>
						<div class="ul-toggle-wrap">
							<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							echo get_icon_svg( 'triangle' );
							?>
						</div>
					</li>
					<li class="rmbt-footer-address">
						<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						echo get_icon_svg( 'address_2' );
						?>
						<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						echo rmbt_get_redux_field( 'contact_address', 1 );
						?>
					</li>
				</ul>
			</div>
		</div>
		<div class="rmbt-footer-0__row rmbt-footer-0-row-copyright">
			<?php get_template_part( 'pages/components/copyright_block-0/copyright_block-0', '0' ); ?>

		</div>
	</section>
</div>

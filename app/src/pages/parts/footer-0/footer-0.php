<div class="rmbt-full-width rmbt-footer-0-full-width">


	<div class="rmbt-footer-0-full-width__bg">
		<div class="wrap-img">
			<?php echo rmbt_redux_img( 'rmbt-bg_footer-img', 'rmbt-bg_footer-img_alt' ) ?>
		</div>
	</div>





	<section class="rmbt-container rmbt-footer-0">
		<div class="rmbt-footer-0__row rmbt-footer-0-row-content">
			<div class="rmbt-footer-0__col rmbt-footer-0-row-content__left-col">
				<div class="rmbt-site-logo">
					<?php
					$footer_logo = get_theme_mod( 'custom_footer_logo' );
					if ( $footer_logo ) {
						echo '<img src="' . esc_url( $footer_logo ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} elseif ( has_custom_logo() ) {
						the_custom_logo();
					}
					?>
				</div>

				<?php $description = get_bloginfo( 'description' );
				if ( ! empty( $description ) ) { ?>
					<p class="subtitle-block rmbt-site-description"><?= esc_html( $description ) ?></p>
				<?php } ?>

				<?php get_template_part( 'pages/components/social_networks/social_networks', null, [ 
					'data' => 'data-da=".rmbt-footer-0-row-content__right-col, 1024, last"',
				] ); ?>

			</div>
			<div class="rmbt-footer-0__col rmbt-footer-0-row-content__center-col">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'footer_nav',
						'container' => 'nav',
						'depth' => 1,
					)
				); ?>
			</div>
			<div class="rmbt-footer-0__col rmbt-footer-0-row-content__right-col">

				<ul>
					<li>
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_2">
							</use>
						</svg>
						<?php echo rmbt_get_redux_field( 'rmbt-manager-6-phone', 1 ) ?>
					</li>
					<li>
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#email_2">
							</use>
						</svg>
						<?php echo rmbt_get_redux_field( 'rmbt-email-1', 1 ) ?>
					</li>
					<li>
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#address_2">
							</use>
						</svg>
						<?php echo rmbt_get_redux_field( 'rmbt-address', 1 ) ?>
					</li>
				</ul>
			</div>
		</div>


		<div class="rmbt-footer-0__row rmbt-footer-0-row-copyright">
			<?php // get_template_part( 'pages\parts\copyright_block\copyright_block', '0' ); ?>
			<?php get_template_part( 'pages/components/copyright_block-0/copyright_block-0', '0' ); ?>

		</div>

	</section>
</div>
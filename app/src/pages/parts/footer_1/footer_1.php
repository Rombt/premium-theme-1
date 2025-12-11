<div class="rmbt-full-width rmbt-footer-full-width">

	<div class="rmbt-footer-full-width__bg">
		<div class="wrap-img">
			<?php echo rmbt_redux_img( 'rmbt-bg_footer-img', 'rmbt-bg_footer-img_alt' ); ?>
		</div>
	</div>

	<section class="rmbt-container rmbt-footer">
		<div class="rmbt-footer__row rmbt-footer-row-content">
			<div class="rmbt-footer__col rmbt-footer-row-content__left-col">
				<div class="site-logo">
					<?php
						$footer_logo = get_theme_mod( 'custom_footer_logo' );
					if ( $footer_logo ) {
						echo '<img src="' . esc_url( $footer_logo ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} elseif ( has_custom_logo() ) {
						the_custom_logo();
					}
					?>

				</div>
				<!-- <?php // get_template_part('pages\_templates\blocks\social_media_icon_block-0\social_media_icon_block-0', '0'); ?> -->
				<?php get_template_part( 'pages\components\social_networks\social_networks', '0' ); ?>

			</div>
			<div class="rmbt-footer__col rmbt-footer-row-content__center-col">
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
			<div class="rmbt-footer__col rmbt-footer-row-content__right-col">
				<div class="block-details"> footer content</div>
				<div class="rmbt-footer-copyright">
					<?php get_template_part( 'pages\components\copyright_block\copyright_block', null ); ?>
				</div>
			</div>
		</div>



	</section>
</div>

<div class="rmbt-full-width rmbt-header-full-width">
	<section class="rmbt-container rmbt-header">
		<div class="rmbt-header__row row-top-header">
			<div class="rmbt-header__col row-top-header__contacts">
				<?php echo rmbt_redux_field_to_ul( 'rmbt-manager-1-phone' ); ?>
				<?php echo rmbt_redux_field_to_ul( 'rmbt-manager-1-email', 'mailto' ); ?>
			</div>
			<div class="rmbt-header__col row-top-header__controls">
				<ul class="rmbt-login-block">
					<li><a href="#">login</a></li>
					<li><a href="#">register</a></li>
				</ul>
				<?php get_template_part( 'template-parts/components/search_form' ); ?>

				<div class="wrap-img rmbt-cart-icon-wrap">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#cart_1"></use>
					</svg>
				</div>

				<div class="lang-switcher">

				</div>
			</div>
		</div>
		<div class="rmbt-header__row row-bottom-header">
			<div class="rmbt-header__col">



				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php endif ?>
				<?php if ( has_nav_menu( 'header_nav' ) ) { ?>
					<div class="cont-horizont-menu">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'header_nav',
								'container' => 'nav',
							)
						); ?>
					</div>
					<a href="#" class="call-to-action-button">Buy premium-theme-1</a>
				<?php } ?>





			</div>
		</div>
	</section>
</div>
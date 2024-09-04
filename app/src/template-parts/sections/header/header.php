<div class="rmbt-full-width rmbt-header-full-width">
	<section class="rmbt-container rmbt-header">
		<div class="rmbt-header__row row-top-header">
			<div class="rmbt-header__col">


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
				<?php } ?>





			</div>
		</div>
	</section>
</div>
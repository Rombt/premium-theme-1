<div class="rmbt-full-width rmbt-hero-block-1-full-width">

	<div class="rmbt-hero-block-1-full-width__bg">
		<div class="wrap-img">
			<?php echo rmbt_redux_img( 'rmbt-hero-block-1-bg_img', 'rmbt-hero-block-1-bg_img_alt' ) ?>
		</div>
	</div>

	<section class="rmbt-container rmbt-hero-block-1-top-row">
		<div class="rmbt-hero-block-1-top-row__row rmbt-hero-block-1-top-row">
			<div class="rmbt-hero-block-1-top-row__col rmbt-hero-block-1-top-row-col-left">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php endif ?>
			</div>
			<div class="rmbt-hero-block-1-top-row__col rmbt-hero-block-1-top-row-col-center">
				<?php if ( has_nav_menu( 'header_nav' ) ) { ?>
					<div class="rmbt-menu-horizontal" data-da=".rmbt-hero-block-1-top-row-col-right, 768">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'header_nav',
								'container' => 'nav',
							)
						); ?>
					</div>
				<?php } ?>
			</div>
			<div class="rmbt-hero-block-1-top-row__col rmbt-hero-block-1-top-row-col-right">
				<?php get_template_part( 'pages/components/button_cta/button_cta', 'null', [ 
					'data' => 'data-da=".menu-header-navigation-container, 769"',
					'title' => rmbt_get_redux_field( 'rmbt-call_to_action_button-text', 1 ),
					'href' => rmbt_get_redux_field( 'rmbt-call_to_action_button-link', 1 ),
				] );
				?>
				<?php get_template_part( 'pages/components/social_networks/social_networks', null, [ 
					'data' => 'data-da=".menu-header-navigation-container, 769, last"',
				] ); ?>

			</div>
		</div>
	</section>


	<section class="rmbt-container rmbt-hero-block-1">
		<div class="rmbt-hero-block-1__row">
			<div class='rmbt-hero-block-1__col rmbt-hero-block-1-col-right'>

				<div class="rmbt-hero-block-1-col-right__bg">
				</div>


				<?php
				get_template_part( 'pages/components/benefit_slide/benefit_slide' );
				?>



			</div>
			<div class='rmbt-hero-block-1__col rmbt-hero-block-1-col-left'>
				<div class="rmbt-hero-block-1-col-left__bg">

					<?php for ( $i = 1; $i < 13; $i++ ) { ?>
						<svg>
							<use
								xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#bf_1_<?= $i ?>">
							</use>
						</svg>
					<?php } ?>
				</div>

				<div class="rmbt-hero-block-1-col-left__content">
					<div class="rmbt-hero-block-1-col-left__slogan">
						A Website that Leads to Customers
					</div>
					<div class="rmbt-hero-block-1-col-left__title">
						<span>Winning</span> designs made simple!
					</div>
					<div class="rmbt-hero-block-1-col-left__subtitle">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam suscipit tenetur ratione optio
						deleniti,
						eos eveniet ipsa laudantium iusto. Nulla.
					</div>
				</div>

				<?php get_template_part( 'pages/components/controls_container/controls_container' ); ?>

			</div>
		</div>
	</section>
</div>
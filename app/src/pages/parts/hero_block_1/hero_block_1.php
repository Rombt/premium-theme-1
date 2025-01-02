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
					<!-- <div class="wrap-img">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/bg_transparent.jpg"
						alt="hero-block-bg">
					</div> -->
				</div>


				<div class="rmbt-hero-block-1-col-right__content">
				</div>


			</div>
			<div class='rmbt-hero-block-1__col rmbt-hero-block-1-col-left'>

				<div class="rmbt-hero-block-1-col-left__bg">
				</div>

				<div class="rmbt-hero-block-1-col-left__slogan">
					Websites branding digital marketing
				</div>
				<div class="rmbt-hero-block-1-col-left__title">
					<span>Winning</span> designs made simple!
				</div>
				<div class="rmbt-hero-block-1-col-left__subtitle">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam suscipit tenetur ratione optio deleniti,
					eos eveniet ipsa laudantium iusto. Nulla.
				</div>

				<?php // get_template_part( 'pages/components/controls_container/controls_container' ); ?>

			</div>
			<!-- <div class="rmbt-hero-block-1__title-block rmbt-title-block">

				<div class="rmbt-title-block__decor"></div>
				<div class="rmbt-title-block__icon"></div>
				<div class="rmbt-title-block__subtitle">
					<div class="block-details">
						subtitle
					</div>
				</div>

				<a href="#" class='rmbt-title-block__button'>
					<div class="block-details">
						cal-to-action-bottom
					</div>
				</a>
				<?php // get_template_part( 'template-parts/_templates/components\button-0\button-0' ); ?>


			</div> -->
			<div class="rmbt-hero-block-1__right-text">
				<div class="block-details">
					текстовой нюанс
				</div>
			</div>
		</div>
	</section>
</div>
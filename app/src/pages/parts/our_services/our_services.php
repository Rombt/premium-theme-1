<?php global $rmbt_theme_options; ?>

<div class="rmbt-full-width rmbt-our-services-full-width">
	<section class="rmbt-container rmbt-our-services" <?php if ( isset( $rmbt_theme_options['rmbt-our-services-tabs_section-title'] ) && $rmbt_theme_options['rmbt-our-services-tabs_section-title'] == "" ) :
		echo 'style="padding-top: 15px; padding-bottom: 15px;"';
	endif ?>>

		<?php if ( $rmbt_theme_options['rmbt-our-services-tabs_section-title'] ) : ?>
			<h2 class='title-section'> <?php echo rmbt_get_redux_field( 'rmbt-our-services-tabs_section-title', 1 ) ?> </h2>
		<?php endif ?>
		<?php if ( isset( $rmbt_theme_options['rmbt-our-services-tabs_section-subtitle'] ) && $rmbt_theme_options['rmbt-our-services-tabs_section-subtitle'] !== "" ) : ?>
			<p class='subtitle-section'>
				<?php echo rmbt_get_redux_field( 'rmbt-our-services-tabs_section-subtitle', 1 ) ?>
			</p>
		<?php endif ?>


		<div class="tabs rmbt-our-services-tabs">
			<nav data-tabs-titles class="tabs__nav">
				<div class="tabs__title shadow-box tabs__title-active" data-tab="tab-1">
					<h3 class="title-block">
						<?php echo rmbt_get_redux_field( 'our-services-tabs-1_title', 1 ) ?>
					</h3>
					<p class="subtitle-block">
						<?php echo rmbt_get_redux_field( 'our-services-tabs-1_subtitle', 1 ) ?>
					</p>

					<div class="tabs__arrow">
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#chevron_1">
							</use>
						</svg>
					</div>

				</div>
				<div class="tabs__title shadow-box" data-tab="tab-2">
					<h3 class="title-block">
						<?php echo rmbt_get_redux_field( 'our-services-tabs-2_title', 1 ) ?>
					</h3>
					<p class="subtitle-block">
						<?php echo rmbt_get_redux_field( 'our-services-tabs-2_subtitle', 1 ) ?>
					</p>
					<div class="tabs__arrow">
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#chevron_1">
							</use>
						</svg>
					</div>
				</div>
				<div class="tabs__title shadow-box" data-tab="tab-3">
					<h3 class="title-block">
						<?php echo rmbt_get_redux_field( 'our-services-tabs-3_title', 1 ) ?>
					</h3>
					<p class="subtitle-block">
						<?php echo rmbt_get_redux_field( 'our-services-tabs-3_subtitle', 1 ) ?>
					</p>
					<div class="tabs__arrow">
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#chevron_1">
							</use>
						</svg>
					</div>
				</div>
			</nav>
			<div class="tabs__content shadow-box">
				<div class="tabs__body tabs__body-active" data-tab-name="tab-1">
					<div class="wrap-img">
						<?php echo rmbt_redux_img( 'rmbt-our-services-tabs-1-img', 'rmbt-_img-alt-' ) ?>
					</div>
					<p class="text-block">
						<?php echo rmbt_get_redux_field( 'our-services-tabs-1_text', 1 ) ?>
					</p>
				</div>
				<div class="tabs__body" data-tab-name="tab-2">
					<p class="text-block">
						<?php echo rmbt_get_redux_field( 'our-services-tabs-2_text', 1 ) ?>
					</p>
					<div class="wrap-img">
						<?php echo rmbt_redux_img( 'rmbt-our-services-tabs-2-img', 'rmbt-_img-alt-' ) ?>
					</div>
				</div>
				<div class="tabs__body" data-tab-name="tab-3">
					<p class="text-block">
						<?php echo rmbt_get_redux_field( 'our-services-tabs-3_text', 1 ) ?>
					</p>
					<div class="wrap-img">
						<?php echo rmbt_redux_img( 'rmbt-our-services-tabs-3-img', 'rmbt-_img-alt-' ) ?>
					</div>
				</div>
			</div>
		</div>

	</section>
</div>
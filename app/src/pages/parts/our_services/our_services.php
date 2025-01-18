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
				<div class="tabs__title tabs__title-active" data-tab="tab-1">
					<?php echo rmbt_get_redux_field( 'our-services-tabs-1_title', 1 ) ?>
					<?php echo rmbt_get_redux_field( 'our-services-tabs-1_subtitle', 1 ) ?>
				</div>
				<div class="tabs__title" data-tab="tab-2">
					<?php echo rmbt_get_redux_field( 'our-services-tabs-2_title', 1 ) ?>
					<?php echo rmbt_get_redux_field( 'our-services-tabs-2_subtitle', 1 ) ?>
				</div>
				<div class="tabs__title" data-tab="tab-3">
					<?php echo rmbt_get_redux_field( 'our-services-tabs-3_title', 1 ) ?>
					<?php echo rmbt_get_redux_field( 'our-services-tabs-3_subtitle', 1 ) ?>
				</div>
			</nav>
			<div class="tabs__content">
				<div class="tabs__body tabs__body-active" data-tab-name="tab-1">
					<div class="block-details">

						<div class="wrap-img">
							<?php echo rmbt_redux_img( 'rmbt-our-services-tabs-1-img', 'rmbt-_img-alt-' ) ?>
						</div>

					</div>
				</div>
				<div class="tabs__body" data-tab-name="tab-2">
					<div class="block-details">
						tab-2
					</div>
				</div>
				<div class="tabs__body" data-tab-name="tab-3">
					<div class="block-details">
						tab-3
					</div>
				</div>
			</div>
		</div>

	</section>
</div>
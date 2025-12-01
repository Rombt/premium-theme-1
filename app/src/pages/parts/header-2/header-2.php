<?php
global $rmbt_theme_options;
?>

<div class="rmbt-full-width rmbt-header-2-top-row-full-width">

	<section class="rmbt-container">
		<div class="rmbt-header-2__row rmbt-header-2-top-row">
			<div class="rmbt-header-2__col rmbt-header-2-top-col-left">
				<div class="rmbt-header-2-top-col-left__email">
					<?php echo get_icon_svg('email_1', true, 'rmbt-header-2-top-col-left__email-icon') ?>	
					<?php echo rmbt_redux_repeater_to_ul('rmbt-managers_email', 'mailto', 'rmbt-managers-show', 'header'); ?>
					<div class="ul-toggle-wrap">					
						<?php echo get_icon_svg('triangle') ?>
					</div>
				</div>
				<div class="rmbt-header-2-top-col-left__phones">
					<?php echo get_icon_svg('phone_1', true, 'rmbt-header-2-top-col-left__phones-icon') ?>	
					<?php echo rmbt_redux_repeater_to_ul('rmbt-managers_phone', 'tel', 'rmbt-managers-show', 'header'); ?>
					<div class="ul-toggle-wrap">					
						<?php echo get_icon_svg('triangle') ?>
					</div>
				</div>


			</div>
			<!-- <div class="rmbt-header-2__col rmbt-header-2-top-col-center">

			</div> -->
			<div class="rmbt-header-2__col rmbt-header-2-top-col-right">
				<a href="#rmbt-search_modal" class="rmbt-search-modal__trigger popup-link">
					<?php echo get_icon_svg('search') ?>
				</a>
				<a href="#" class="">
					<?php echo get_icon_svg('cart') ?>
				</a>
				<a href="#" class="">
					<?php echo get_icon_svg('login') ?>
				</a>
				<div id="rmbt-search_modal" class="rmbt-search-modal popup">
					<div class="rmbt-search-modal__body popup__body">
						<div class="rmbt-search-modal__close-window popup__close-window"></div>
						<div class="rmbt-search-modal__content">
							<h2 class="rmbt-search-modal__title popup__title section-title">
								<?php esc_html_e('Пошук по сайту', 'premium-theme-1') ?>
							</h2>
							<div class="rmbt-search-modal__text popup__text">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
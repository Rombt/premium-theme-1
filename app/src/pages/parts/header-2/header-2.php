<div class="rmbt-full-width rmbt-header-2-top-row-full-width">

	<section class="rmbt-container">
		<div class="rmbt-header-2__row rmbt-header-2-top-row">
			<div class="rmbt-header-2__col rmbt-header-2-top-col-left">
				<div class="rmbt-header-2-top-col-left__email">
					<?php echo rmbt_redux_field_to_ul('rmbt-manager-1-email', 'mailto'); ?>
					<div class="ul-toggle-wrap">					
						<?= get_icon_svg('triangle') ?>
					</div>
					<?= get_icon_svg('email_1', true, 'rmbt-header-2-top-col-left__email-icon') ?>	
				</div>
				<div class="rmbt-header-2-top-col-left__phones">
					<?php echo rmbt_redux_field_to_ul('rmbt-manager-1-phone'); ?>
					<?php echo rmbt_redux_field_to_ul('rmbt-manager-2-phone'); ?>
					<div class="ul-toggle-wrap">					
						<?= get_icon_svg('triangle') ?>
					</div>
					<?= get_icon_svg('phone_1', true, 'rmbt-header-2-top-col-left__phones-icon') ?>	
				</div>


			</div>
			<!-- <div class="rmbt-header-2__col rmbt-header-2-top-col-center">

			</div> -->
			<div class="rmbt-header-2__col rmbt-header-2-top-col-right">
				<a href="#rmbt-search_modal" class="rmbt-search-modal__trigger popup-link">
					<?= get_icon_svg('search') ?>
				</a>
				<a href="#" class="">
					<?= get_icon_svg('cart') ?>
				</a>
				<a href="#" class="">
					<?= get_icon_svg('login') ?>
				</a>
				<div id="rmbt-search_modal" class="rmbt-search-modal popup">
					<div class="rmbt-search-modal__body popup__body">
						<div class="rmbt-search-modal__close-window popup__close-window"></div>
						<div class="rmbt-search-modal__content">
							<h2 class="rmbt-search-modal__title popup__title section-title">
								<?php esc_html_e('Пошук по сайту', RMBT_TEXT_DOMAIN_THEME) ?>
							</h2>
							<div class="rmbt-search-modal__text popup__text">
								<form class="rmbt-search-modal__form" role="search" method="get"
									action="<?php echo esc_url(site_url()); ?>">
									<input type="search" value="<?php echo get_search_query(); ?>" name="s" id="s"
										placeholder="<?php esc_html_e('Введіть текст...', RMBT_TEXT_DOMAIN_THEME) ?>" />
									<input type="submit" class="rmbt-button"
										value="<?php esc_html_e('пошук', RMBT_TEXT_DOMAIN_THEME) ?>" />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
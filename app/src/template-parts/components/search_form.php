<a href="#rmbt-search_modal" class="wrap-img rmbt-search-modal__trigger popup-link">
	<svg>
		<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#search_1"></use>
	</svg>
</a>
<div id="rmbt-search_modal" class="rmbt-search-modal popup">
	<div class="rmbt-search-modal__body popup__body">
		<div class="rmbt-search-modal__close-window popup__close-window"></div>
		<div class="rmbt-search-modal__content">
			<h2 class="rmbt-search-modal__title popup__title section-title">
				<?php esc_html_e( 'Site search', RMBT_TEXT_DOMAIN_THEME ) ?>
			</h2>
			<div class="rmbt-search-modal__text popup__text">
				<form class="rmbt-search-modal__form" role="search" method="get"
					action="<?php echo esc_url( site_url() ); ?>">
					<input type="search" value="<?php echo get_search_query(); ?>" name="s" id="s"
						placeholder="<?php esc_html_e( 'Enter the text...', RMBT_TEXT_DOMAIN_THEME ) ?>" />
					<input type="submit" class="rmbt-button"
						value="<?php esc_html_e( 'search', RMBT_TEXT_DOMAIN_THEME ) ?>" />
				</form>
			</div>
		</div>
	</div>
</div>
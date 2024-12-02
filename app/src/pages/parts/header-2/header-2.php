<div class="rmbt-full-width rmbt-header-2-top-row-full-width">

	<section class="rmbt-container rmbt-header-2-top-row">

		<div class="rmbt-header-2__row rmbt-header-2-top-row">

			<div class="rmbt-header-2__col rmbt-header-2-top-col-left">
				<div class="rmbt-header-2-top-col-left__phones">
					<?php echo rmbt_redux_field_to_ul( 'rmbt-manager-1-phone' ); ?>
					<?php echo rmbt_redux_field_to_ul( 'rmbt-manager-2-phone' ); ?>
				</div>
			</div>
			<div class="rmbt-header-2__col rmbt-header-2-top-col-center">
				<div class=rmbt-header-2-top-col-left__email">
					<?php echo rmbt_redux_field_to_ul( 'rmbt-manager-1-email', 'mailto' ); ?>
				</div>
			</div>
			<div class="rmbt-header-2__col rmbt-header-2-top-col-right">
				<a href="#rmbt-search_modal" class="rmbt-search-modal__trigger popup-link">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#search">
						</use>
					</svg>
				</a>
				<a href="#" class="">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#cart">
						</use>
					</svg>
				</a>
				<a href="#" class="">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#login">
						</use>
					</svg>
				</a>
				<div id="rmbt-search_modal" class="rmbt-search-modal popup">
					<div class="rmbt-search-modal__body popup__body">
						<div class="rmbt-search-modal__close-window popup__close-window"></div>
						<div class="rmbt-search-modal__content">
							<h2 class="rmbt-search-modal__title popup__title section-title">
								<?php esc_html_e( 'Пошук по сайту', 'rmbt_impex' ) ?>
							</h2>
							<div class="rmbt-search-modal__text popup__text">
								<form class="rmbt-search-modal__form" role="search" method="get"
									action="<?php echo esc_url( site_url() ); ?>">
									<input type="search" value="<?php echo get_search_query(); ?>" name="s" id="s"
										placeholder="<?php esc_html_e( 'Введіть текст...', 'rmbt_impex' ) ?>" />
									<input type="submit" class="rmbt-impex-button"
										value="<?php esc_html_e( 'пошук', 'rmbt_impex' ) ?>" />
								</form>
							</div>
						</div>
					</div>
				</div>



			</div>
		</div>

	</section>


</div>


<!-- <div class="rmbt-full-width rmbt-header-2-bottom-row-full-width">

	<section class="rmbt-container rmbt-header-2">


		<div class="rmbt-header-2__row rmbt-header-2-bottom-row">

			<div class="rmbt-header-2__col rmbt-header-2-bottom-col-left">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php endif ?>
			</div>
			<div class="rmbt-header-2__col rmbt-header-2-bottom-col-center">
				<div class="block-details block-details-main-header-menu">main header menu</div>
				<div class="block-details block-details-search">search field</div>
			</div>
			<div class="rmbt-header-2__col rmbt-header-2-bottom-col-burger">
				<div class="block-details">burger</div>
			</div>
			<div class="rmbt-header-2__col rmbt-header-2-bottom-col-right">
				<div class="block-details">call-to-action button</div>
			</div>
		</div>
	</section>
</div> -->
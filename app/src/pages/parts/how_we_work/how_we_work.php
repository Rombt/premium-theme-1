<?php global $rmbt_theme_options; ?>

<div class="rmbt-full-width rmbt-how-we-work-full-width">
	<section class="rmbt-container rmbt-how-we-work" <?php if ( isset( $rmbt_theme_options['rmbt-how-we-work-card_section-title'] ) && $rmbt_theme_options['rmbt-how-we-work-card_section-title'] == "" ) :
		echo 'style="padding-top: 15px; padding-bottom: 15px;"';
	endif ?>>
		<?php if ( $rmbt_theme_options['rmbt-how-we-work-card_section-title'] ) : ?>
			<h2 class='title-section'> <?php echo rmbt_get_redux_field( 'rmbt-how-we-work-card_section-title', 1 ) ?> </h2>
		<?php endif ?>
		<?php if ( isset( $rmbt_theme_options['rmbt-how-we-work-card_section-subtitle'] ) && $rmbt_theme_options['rmbt-how-we-work-card_section-subtitle'] !== "" ) : ?>
			<p class='subtitle-section'>
				<?php echo rmbt_get_redux_field( 'rmbt-how-we-work-card_section-subtitle', 1 ) ?>
			</p>
		<?php endif ?>

		<div class="rmbt-how-we-work__row">
			<article class="rmbt-how-we-work__col shadow-box">
				<div class="wrap-img rmbt-how-we-work__img">
					<?php echo rmbt_redux_img( 'rmbt-how-we-work-card-1-img', 'rmbt-how-we-work-card-1-img-alt' ) ?>
				</div>
				<header>
					<h3 class='title-block'><?php echo rmbt_get_redux_field( 'how-we-work-card-1_title' ) ?></h3>
					<p class="subtitle-block"><?php echo rmbt_get_redux_field( 'how-we-work-card-1_subtitle' ) ?></p>
				</header>
				<div class="rmbt-how-we-work__article-body">
					<div class="rmbt-how-we-work__article-text text-block">
						<?php echo wp_trim_words( rmbt_get_redux_field( 'how-we-work-card-1_text' ), 5, '  [...]' ) ?>
						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
					</div>
				</div>
				<!-- <footer>
					<a href="#">
						read more
						<svg>
							<use xlink:href="<?php // echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#"></use>
						</svg>
					</a>
				</footer> -->
			</article>
			<article class="rmbt-how-we-work__col shadow-box">
				<div class="wrap-img rmbt-how-we-work__img">
					<?php echo rmbt_redux_img( 'rmbt-how-we-work-card-2-img', 'rmbt-how-we-work-card-2-img-alt' ) ?>
				</div>
				<header>
					<h3 class='title-block'><?php echo rmbt_get_redux_field( 'how-we-work-card-2_title' ) ?></h3>
					<p class="subtitle-block"><?php echo rmbt_get_redux_field( 'how-we-work-card-2_subtitle' ) ?></p>
				</header>
				<div class="rmbt-how-we-work__article-body">
					<div class="rmbt-how-we-work__article-text text-block">
						<?php echo rmbt_get_redux_field( 'how-we-work-card-2_text' ) ?>
					</div>
				</div>
				<!-- <footer>
					<a href="#">
						read more
						<svg>
							<use xlink:href="<?php // echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#"></use>
						</svg>
					</a>
				</footer> -->
			</article>
			<article class="rmbt-how-we-work__col shadow-box">
				<div class="wrap-img rmbt-how-we-work__img">
					<?php echo rmbt_redux_img( 'rmbt-how-we-work-card-3-img', 'rmbt-how-we-work-card-3-img-alt' ) ?>
				</div>
				<header>
					<h3 class='title-block'><?php echo rmbt_get_redux_field( 'how-we-work-card-3_title' ) ?></h3>
					<p class="subtitle-block"><?php echo rmbt_get_redux_field( 'how-we-work-card-3_subtitle' ) ?></p>
				</header>
				<div class="rmbt-how-we-work__article-body">
					<div class="rmbt-how-we-work__article-text text-block">
						<?php echo rmbt_get_redux_field( 'how-we-work-card-3_text' ) ?>
					</div>
				</div>
				<!-- <footer>
					<a href="#">
						read more
						<svg>
							<use xlink:href="<?php // echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#"></use>
						</svg>
					</a>
				</footer> -->
			</article>
			<article class="rmbt-how-we-work__col shadow-box">
				<div class="wrap-img rmbt-how-we-work__img">
					<?php echo rmbt_redux_img( 'rmbt-how-we-work-card-4-img', 'rmbt-how-we-work-card-4-img-alt' ) ?>
				</div>
				<header>
					<h3 class='title-block'><?php echo rmbt_get_redux_field( 'how-we-work-card-4_title' ) ?></h3>
					<p class="subtitle-block"><?php echo rmbt_get_redux_field( 'how-we-work-card-4_subtitle' ) ?></p>
				</header>
				<div class="rmbt-how-we-work__article-body">
					<div class="rmbt-how-we-work__article-text text-block">
						<?php echo rmbt_get_redux_field( 'how-we-work-card-4_text' ) ?>
					</div>
				</div>
				<!-- <footer>
					<a href="#">
						read more
						<svg>
							<use xlink:href="<?php // echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#"></use>
						</svg>
					</a>
				</footer> -->
			</article>
		</div>



	</section>
</div>
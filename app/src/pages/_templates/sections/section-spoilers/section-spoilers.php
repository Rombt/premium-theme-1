<div class="rmbt-full-width rmbt-section-spoilers-full-width">
	<section class="rmbt-container rmbt-section-spoilers">
		<div class="rmbt-section-spoilers-head">
			<!-- <div class="rmbt-section-spoilers__head"> -->
			<h2 class='rmbt-section-spoilers-head__title'>
				<div class="block-details"> title </div>
				<?php // echo rmbt_get_redux_field( 'rmbt-section-spoilers_section-title' ) ?>
				<?php // get_template_part('template-parts/components/title', 'page', ['title' => rmbt_get_redux_field('rmbt-_section-title')]); ?>
			</h2>
			<p class='rmbt-section-spoilers-head__subtitle block-details'>
				subtitle
				<?php // echo rmbt_get_redux_field( 'rmbt-section-spoilers_section-text' ) ?>
			</p>
		</div>
		<div class="rmbt-section-spoilers__row">

			<div class='rmbt-section-spoilers__left-col'>

				<?php get_template_part( 'pages\_templates\components\spoilers-block\spoilers-block', 'block' ); ?>

			</div>

			<div class='rmbt-section-spoilers__right-col '>
				<div class="wrap-img">
					<!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/" alt=""> -->
				</div>


			</div>
		</div>


	</section>
</div>
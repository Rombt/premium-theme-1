<div class="rmbt-full-width rmbt-simple-section-full-width">
	<div class="simple-section-full-width__bg">
		<div class="wrap-img">
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/simple_bg.png" alt="simple_bg"> -->
		</div>
	</div>
	<section class="rmbt-container rmbt-simple-section">

		<div class="rmbt-simple-section__row rmbt-simple-section-head">
		<h2 class='rmbt-simple-section-head__title'>
			<div class="block-details"> title </div>
			<?php // echo rmbt_get_redux_field( 'rmbt-simple-section_section-title' ) ?>
			<?php // get_template_part('template-parts/components/title', 'page', ['title' => rmbt_get_redux_field('rmbt-_section-title')]); ?>
		</h2>
		<p class='rmbt-simple-section-head__subtitle block-details'>
			subtitle
			<?php // echo rmbt_get_redux_field( 'rmbt-simple-section_section-text' ) ?>
		</p>
		</div>

		<div class="rmbt-simple-section__row rmbt-simple-section-body">
		<div class="block-details"> other content</div>
		</div>
	</section>
</div>

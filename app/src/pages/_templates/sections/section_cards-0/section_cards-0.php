<div class="rmbt-full-width rmbt-section-cards-0-full-width">
	<section class="rmbt-container rmbt-section-cards-0">

		<div class="rmbt-section-cards-0-head">
		<h2 class='rmbt-section-cards-0-head__title'>
			<div class="block-details"> title </div>
			<?php // echo rmbt_get_redux_field( 'rmbt-section-cards-0_section-title' ) ?>
			<?php // get_template_part('template-parts/components/title', 'page', ['title' => rmbt_get_redux_field('rmbt-_section-title')]); ?>
		</h2>
		<p class='rmbt-section-cards-0-head__subtitle block-details'>
			subtitle
			<?php // echo rmbt_get_redux_field( 'rmbt-section-cards-0_section-text' ) ?>
		</p>
		</div>

		<div class="rmbt-section-cards-0__row rmbt-section-cards-0-body">

		<?php
		for ( $i = 1; $i < 9; $i++ ) :
			get_template_part( 'pages\_templates\blocks\card-0\card-0', '0' );

			endfor
		?>


		</div>
	</section>
</div>

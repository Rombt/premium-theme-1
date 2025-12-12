<?php
/**
 * Section Cards Template.
 *
 * @package rmbt
 */
?>

<div class="rmbt-full-width rmbt-section-cards-0-full-width">
	<section class="rmbt-container rmbt-section-cards-0">

		<div class="rmbt-section-cards-0-head">
		<h2 class='rmbt-section-cards-0-head__title'>
			<div class="block-details"> title </div>
		</h2>
		<p class='rmbt-section-cards-0-head__subtitle block-details'>
			subtitle
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

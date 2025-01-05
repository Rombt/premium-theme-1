<div class="benefit-slide">
	<div class="benefit-slide__title">
		<?php echo rmbt_get_redux_field( 'rmbt-benefits-slide-block_title_1', 1 ) ?>
	</div>

	<div class="benefit-slide__text">
		<?php echo rmbt_get_redux_field( 'rmbt-benefits-slide-block_text_1', 1 ) ?>
	</div>
	<?php get_template_part( 'pages/components/button_nav/button_nav', 'null', [ 
		'data' => 'data-da=""',
		'title' => rmbt_get_redux_field( 'rmbt-benefits-slide-block_button-title_1', 1 ),
		'href' => rmbt_get_redux_field( 'rmbt-benefits-slide-block_button-link_1', 1 ),
	] );
	?>




</div>
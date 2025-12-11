<?php get_header(); ?>

<main>
	<?php

	get_template_part( 'pages/parts/our_services/our_services' );
	get_template_part( 'pages/parts/featured_projects/featured_projects' );
	get_template_part( 'pages/parts/how_we_work/how_we_work' );     // block of cards, redux fields
	get_template_part( 'pages/parts/call_to_action/call_to_action' );       // block with title, text and button , redux fields
	get_template_part( 'pages/parts/post_card-latest_blog/post_card-latest_blog' );     // block of cards
	get_template_part( 'pages/parts/testimonials/testimonials' );       // block of cards

	?>
</main>

<?php
get_footer();

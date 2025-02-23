<?php get_header(); ?>



<main>
	<?php
	get_template_part( 'pages\parts\hero_block_1\hero_block_1', null );
	get_template_part( 'pages\parts\our_services\our_services' );
	get_template_part( 'pages\parts\featured_projects\featured_projects' );
	get_template_part( 'pages\parts\how_we_work\how_we_work' );		// block of cards, redux fields
	get_template_part( 'pages\parts\call_to_action\call_to_action' );		// block with title, text and button , redux fields
	get_template_part( 'pages\parts\latest_blog_posts\latest_blog_posts' );		// block of cards
	



	// get_template_part( 'pages\parts\testimonials\testimonials' );	// block of cards, redux fields or from client's area 
	// get_template_part( 'pages\parts\our_team\our_team' );		// slider, redux fields
	// get_template_part( 'pages\parts\our_clients\our_clients' );		// slider, custom post type with a dedicated personal area for each client to manage their account and orders.
	


	// get_template_part( 'pages\_templates\sections\section_cards-0\section_cards-0', '0' );
	?>
</main>


<?php get_footer();
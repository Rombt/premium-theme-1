<?php get_header(); ?>



<main>
	<?php
	get_template_part( 'template-parts/_templates/headers\header-1\header-1', '1' );

	get_template_part( 'template-parts/_templates/sections\hero_block_2\hero_block_2', null );

	get_template_part( 'template-parts/_templates/sections\section-spoilers\section-spoilers', 'spoilers' );

	// get_template_part( 'template-parts/_templates/headers\header-2\header-2', '2' );
	// get_template_part( 'template-parts/_templates/headers\header-3\header-3', '3' );
	?>
</main>


<?php get_footer();
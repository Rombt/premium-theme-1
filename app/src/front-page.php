<?php get_header(); ?>



<main>
	<?php

	get_template_part( 'template-parts/_templates/headers\header-2\header-2', '2' );
	get_template_part( 'template-parts/_templates/sections\hero_block_1\hero_block_1', null );
	get_template_part( 'template-parts/_templates/sections\section-spoilers\section-spoilers', 'spoilers' );
	?>
</main>


<?php get_footer();
<?php
/**
 * Front Page Template.
 *
 * @package rmbt
 */

defined( 'ABSPATH' ) || exit;

get_header(); ?>

<main>
	<?php

	get_template_part( 'pages/parts/our_services/our_services' );
	get_template_part( 'pages/parts/featured_projects/featured_projects' );
	get_template_part( 'pages/parts/how_we_work/how_we_work' );
	get_template_part( 'pages/parts/call_to_action/call_to_action' );
	get_template_part( 'pages/parts/post_card-latest_blog/post_card-latest_blog' );
	get_template_part( 'pages/parts/testimonials/testimonials' );

	?>
</main>

<?php
get_footer();

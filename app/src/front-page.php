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

	get_template_part( 'pages/parts/our_services/our-services' );
	get_template_part( 'pages/parts/featured_projects/featured-projects' );
	get_template_part( 'pages/parts/how_we_work/how-we-work' );
	get_template_part( 'pages/parts/call_to_action/call-to-action' );
	get_template_part( 'pages/parts/post_card-latest_blog/post-card-latest-blog' );
	get_template_part( 'pages/parts/testimonials/testimonials' );

	?>
</main>

<?php
get_footer();

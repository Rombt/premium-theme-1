<?php
/**
 * Page templates.
 *
 * @package RMBT_Theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Create custom page.
 *
 * @return void
 */
function create_custom_page() {

	$page_title    = 'Страница шаблонов';
	$page_content  = '';
	$page_status   = 'publish';
	$page_author   = 1;
	$page_type     = 'page';
	$page_template = RMBT_DIR_TEMPLATE_PARTS . '/_templates/templates-page.php';

	$query = new WP_Query(
		array(
			'post_type'      => $page_type,
			'title'          => $page_title,
			'post_status'    => 'any',
			'posts_per_page' => 1,
		)
	);

	if ( ! $query->have_posts() ) {

		$new_page = array(
			'post_title'   => $page_title,
			'post_content' => $page_content,
			'post_status'  => $page_status,
			'post_author'  => $page_author,
			'post_type'    => $page_type,
		);

		$page_id = wp_insert_post( $new_page );

		if ( is_wp_error( $page_id ) ) {
			// phpcs:ignore WordPress.PHP.DevelopmentFunctions
			error_log( 'Ошибка создания страницы: ' . $page_id->get_error_message() );
		} else {
			// phpcs:ignore WordPress.PHP.DevelopmentFunctions
			error_log( 'Страница успешно создана с ID: ' . $page_id );
			update_post_meta( $page_id, '_wp_page_template', $page_template );
		}
	} else {
		$existing_page = $query->posts[0];
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions
		// error_log( 'Страница с заголовком "' . $page_title . '" уже существует (ID: ' . $existing_page->ID . ')' );
	}
}

create_custom_page();

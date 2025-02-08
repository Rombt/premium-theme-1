<?php

/**
 * 
 */

function rmbt_project_post_type_init() {
	$labels = array(
		'name' => _x( 'Projects', 'Post type general name', RMBT_TEXT_DOMAIN_THEME ),
		'singular_name' => _x( 'Project', 'Post type singular name', RMBT_TEXT_DOMAIN_THEME ),
		'menu_name' => _x( 'Projects', 'Admin Menu text', RMBT_TEXT_DOMAIN_THEME ),
		'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', RMBT_TEXT_DOMAIN_THEME ),
		'add_new' => __( 'Add New', RMBT_TEXT_DOMAIN_THEME ),
		'add_new_item' => __( 'Add New project', RMBT_TEXT_DOMAIN_THEME ),
		'new_item' => __( 'New project', RMBT_TEXT_DOMAIN_THEME ),
		'edit_item' => __( 'Edit project', RMBT_TEXT_DOMAIN_THEME ),
		'view_item' => __( 'View project', RMBT_TEXT_DOMAIN_THEME ),
		'all_items' => __( 'All projects', RMBT_TEXT_DOMAIN_THEME ),
		'search_items' => __( 'Search projects', RMBT_TEXT_DOMAIN_THEME ),
		'parent_item_colon' => __( 'Parent projects:', RMBT_TEXT_DOMAIN_THEME ),
		'not_found' => __( 'No projects found.', RMBT_TEXT_DOMAIN_THEME ),
		'not_found_in_trash' => __( 'No projects found in Trash.', RMBT_TEXT_DOMAIN_THEME ),
		'featured_image' => _x( 'Project Cover Image', RMBT_TEXT_DOMAIN_THEME ),
		'set_featured_image' => _x( 'Set cover image', RMBT_TEXT_DOMAIN_THEME ),
		'remove_featured_image' => _x( 'Remove cover image', RMBT_TEXT_DOMAIN_THEME ),
		'use_featured_image' => _x( 'Use as cover image', RMBT_TEXT_DOMAIN_THEME ),
		'archives' => _x( 'Project archives', RMBT_TEXT_DOMAIN_THEME ),
		'insert_into_item' => _x( 'Insert into project', RMBT_TEXT_DOMAIN_THEME ),
		'uploaded_to_this_item' => _x( 'Uploaded to this project', RMBT_TEXT_DOMAIN_THEME ),
		'filter_items_list' => _x( 'Filter projects list', RMBT_TEXT_DOMAIN_THEME ),
		'items_list_navigation' => _x( 'Projects list navigation', RMBT_TEXT_DOMAIN_THEME ),
		'items_list' => _x( 'Projects list', RMBT_TEXT_DOMAIN_THEME ),
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Project custom post type.',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'project' ),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 20,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		'taxonomies' => array( 'category', 'post_tag' ),
		'show_in_rest' => true,
	);

	register_post_type( 'project', $args );
}
add_action( 'init', 'rmbt_project_post_type_init' );
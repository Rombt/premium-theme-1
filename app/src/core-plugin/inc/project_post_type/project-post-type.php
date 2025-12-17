<?php
/**
 * Register Project custom post type.
 *
 * @package rmbt
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register the "Project" custom post type.
 *
 * @return void
 */
function rmbt_project_post_type_init() {
	$labels = array(
		'name'                  => _x( 'Projects', 'Post type general name', 'premium-theme-1' ),
		'singular_name'         => _x( 'Project', 'Post type singular name', 'premium-theme-1' ),
		'menu_name'             => _x( 'Projects', 'Admin Menu text', 'premium-theme-1' ),
		'name_admin_bar'        => _x( 'Project', 'Add New on Toolbar', 'premium-theme-1' ),
		'add_new'               => __( 'Add New', 'premium-theme-1' ),
		'add_new_item'          => __( 'Add New project', 'premium-theme-1' ),
		'new_item'              => __( 'New project', 'premium-theme-1' ),
		'edit_item'             => __( 'Edit project', 'premium-theme-1' ),
		'view_item'             => __( 'View project', 'premium-theme-1' ),
		'all_items'             => __( 'All projects', 'premium-theme-1' ),
		'search_items'          => __( 'Search projects', 'premium-theme-1' ),
		'parent_item_colon'     => __( 'Parent projects:', 'premium-theme-1' ),
		'not_found'             => __( 'No projects found.', 'premium-theme-1' ),
		'not_found_in_trash'    => __( 'No projects found in Trash.', 'premium-theme-1' ),
		'featured_image'        => _x( 'Project Cover Image', 'Featured Image label', 'premium-theme-1' ),
		'set_featured_image'    => _x( 'Set cover image', 'Featured Image label', 'premium-theme-1' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Featured Image label', 'premium-theme-1' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Featured Image label', 'premium-theme-1' ),
		'archives'              => _x( 'Project archives', 'Post type archive label', 'premium-theme-1' ),
		'insert_into_item'      => _x( 'Insert into project', 'Editor media action', 'premium-theme-1' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Editor media action', 'premium-theme-1' ),
		'filter_items_list'     => _x( 'Filter projects list', 'Screen reader filter', 'premium-theme-1' ),
		'items_list_navigation' => _x( 'Projects list navigation', 'Screen reader navigation', 'premium-theme-1' ),
		'items_list'            => _x( 'Projects list', 'Screen reader navigation', 'premium-theme-1' ),
	);
	$args   = array(
		'labels'             => $labels,
		'description'        => 'Project custom post type.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		'taxonomies'         => array( 'category', 'post_tag' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'project', $args );
}
add_action( 'init', 'rmbt_project_post_type_init' );

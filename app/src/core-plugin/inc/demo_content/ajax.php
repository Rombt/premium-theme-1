<?php

function generate_demo_content() {

	start_comments_generation();

	wp_die();
}

add_action( 'wp_ajax_generate_demo_content', 'generate_demo_content' );

<?php



function add_button_demo_content() {
	$screen = get_current_screen();


	$arr_page_with_demo_content = [ 
		'destination',
		'post',
	];


	foreach ( $arr_page_with_demo_content as $post_type_page ) {
		if ( $screen->post_type == $post_type_page && $screen->base == 'edit' ) {
			?>
			<script type="text/javascript">
				document.addEventListener("DOMContentLoaded", function () {
					var addNewButton = document.querySelector('.page-title-action');
					if (addNewButton) {
						var customButton = document.createElement('a');
						customButton.href = '#';
						customButton.id = 'generate-demo-content';
						customButton.classList.add('page-title-action');
						customButton.innerHTML = 'Generate demo content';
						customButton.setAttribute('data-post-type-page', '<?php echo esc_attr( $screen->post_type ); ?>');

						addNewButton.parentNode.insertBefore(customButton, addNewButton.nextSibling);
					}
				});
			</script> <?php
		}
	}

}
add_action( 'admin_head', 'add_button_demo_content' );
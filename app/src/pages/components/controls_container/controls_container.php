<div class="controls-container">

	<?php get_template_part(
		'pages/components/button_nav/button_nav',
		'null',
		array(
			'data'  => 'data-da=""',
			'title' => rmbt_get_redux_field( 'rmbt-call_to_action_button-text', 1 ),
			'href'  => rmbt_get_redux_field( 'rmbt-call_to_action_button-link', 1 ),
		)
	);
?>

	<?php
	get_template_part(
		'pages/components/button_nav/button_nav',
		'null',
		array(
			'classes' => 'rmbt-surround',
			'data'    => '',
			'title'   => rmbt_get_redux_field( 'rmbt-call_to_action_button-text', 1 ),
			'href'    => rmbt_get_redux_field( 'rmbt-call_to_action_button-link', 1 ),
		)
	);
	?>




</div>

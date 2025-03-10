<?php

get_template_part( 'pages/components/post_card-blog/post_card-blog', null, [ 
	'title' => get_the_title(),
	'text' => wp_trim_words( get_the_excerpt(), 30, '  [...]' ),
	'tag-img' => get_the_post_thumbnail( null, 'medium' ),
	'link_read_more_href' => get_the_permalink(),
	'post_date' => get_the_date(),
	'classes' => 'shadow-box',
] );


?>
<?php

get_template_part( 'pages/components/latest_blog_posts_card/latest_blog_posts_card', null, [ 
	'title' => get_the_title(),
	'text' => wp_trim_words( get_the_excerpt(), 20, '  [...]' ),
	'tag-img' => get_the_post_thumbnail( null, 'thumbnail' ),
	'link_read_more_href' => get_the_permalink(),
	'post_date' => get_the_date(),
	'classes' => 'shadow-box',
] );


?>
<?php


function generate_random_comment( $post_id, $author_name = '', $author_email = '' ) {
	if ( ! function_exists( 'wp_insert_comment' ) ) {
		return 'Ошибка: WordPress функции недоступны.';
	}

	$random_comments = array(
		"Great post! Thanks for the useful information.",
		"I am simply amazed at how useful this information was! Thank you for sharing your knowledge, it is truly valuable.",
		"This post exceeded all my expectations! Thank you so much for such useful and relevant information.",
		"I really enjoyed this article, keep up the good work!",
		"I am delighted with this article! Your writing style and depth of analysis are simply amazing. Please continue to delight us with such quality content!",
		"This article left a lasting impression on me. I look forward to your new publications! Keep up the good work, you are doing an amazing job.",
		"Good content, bookmarked.",
		"This content is so valuable that I immediately bookmarked it so that I can come back to it at any time. Thank you!",
		"The content of your post is so deep and informative that I decided to bookmark it. I am sure I will come back to it often.",
		"Thank you! I've been looking for this kind of information for a long time.",
		"You have no idea how happy I am that I came across this post! I've been looking for this kind of information for a long time, and you provided it in the most accessible form. Thank you so much!",
		"I finally found what I was looking for! Thank you so much for this information, it's simply invaluable to me.",
		"Cool article! You have a wonderful blog.",
		"This article is just the bomb! Your blog is a real find, I am delighted with the quality of the content and your style.",
		"Amazing article! Your blog is a breath of fresh air, it's obvious that you put your heart into your work.",
		"Very interesting post, learned a lot!",
		"This post was incredibly informative! I learned a lot of new and interesting things, thank you for sharing your knowledge.",
		"I was pleasantly surprised by the depth and informational content of this post. I really learned a lot from reading it.",
		"I agree with every word. Thank you for the article!",
		"I completely agree with every point you make! Thank you for expressing your thoughts so clearly and concisely in this article.",
		"You expressed exactly what I felt! Thank you for this article, it was as if it read my mind.",
		"Useful information, especially for beginners.",
		"This information will be especially useful for those who are just starting to understand this topic. Thank you for explaining everything so clearly and understandably.",
		"As a beginner in this field, I want to express my deep gratitude to you for such useful and understandable information.",
		"Respect to the author! Everything is to the point.",
		"Huge respect to the author! No fluff, just facts and useful information. Exactly what is needed!",
		"Respect to the author for clarity and brevity! Everything is to the point, without unnecessary words. This is very valuable.",
		"Top content, thank you!",
		"This is simply top content! Thank you for sharing such high-quality materials, it is very inspiring.",
		"You create truly top content! Thank you for your work and for doing it so well.",
	);

	$comment_content = $random_comments[ array_rand( $random_comments ) ];

	if ( empty( $author_name ) ) {
		$fake_names = array(
			"Alexandra",
			"Sophia",
			"Isabella",
			"Olivia",
			"Amelia",
			"Emma",
			"Ava",
			"Liam",
			"Noah",
			"Oliver",
			"Elijah",
			"William",
			"James",
			"Benjamin",
			"Lucas", );
		$author_name = $fake_names[ array_rand( $fake_names ) ];
	}

	if ( empty( $author_email ) ) {
		$author_email = strtolower( $author_name ) . rand( 100, 999 ) . '@example.com';
	}

	$comment_data = array(
		'comment_post_ID' => $post_id,
		'comment_author' => $author_name,
		'comment_author_email' => $author_email,
		'comment_content' => $comment_content,
		'comment_type' => '',
		'comment_parent' => 0,
		'user_id' => 0,
		'comment_approved' => 1,
		'comment_date' => current_time( 'mysql' ),
		'comment_date_gmt' => current_time( 'mysql', 1 ),
	);

	$comment_id = wp_insert_comment( $comment_data );

	if ( $comment_id ) {
		$avatar = get_avatar( $author_email, 50, 'monsterid' );
		return "<div class='comment-item'>" . $avatar . " <strong>{$author_name}</strong>: {$comment_content}</div>";
	} else {
		return "Ошибка при добавлении комментария.";
	}
}


function start_comments_generation() {

	$all_posts = get_posts( array(
		'numberposts' => 10,
		'post_type' => 'post',
		'post_status' => 'publish',
	) );

	foreach ( $all_posts as $post ) {
		$num_comments = rand( 5, 10 );

		for ( $i = 0; $i < $num_comments; $i++ ) {
			echo generate_random_comment( $post->ID ) . "<br>";
		}
	}


}
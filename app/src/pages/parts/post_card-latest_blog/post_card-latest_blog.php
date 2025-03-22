<?php global $rmbt_theme_options; ?>

<?php

$sticky = get_option( 'sticky_posts' );
$sticky_posts = [];
$post_query = new WP_Query( array(
	'post_type' => 'post',
	'orderby' => 'date',
	'order' => 'DESC',
	'post__not_in' => $sticky,
	'posts_per_page' => 3,
) );

if ( ! empty( $sticky ) && count( $sticky ) !== 0 ) {
	$args = array(
		'post_type' => 'post',
		'post__in' => $sticky,
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => 1,
	);
	$sticky_posts = get_posts( $args );

}
if ( $post_query->post_count !== 0 ) {
	?>

			<div class="rmbt-full-width rmbt-latest-blog-posts-full-width">
				<section class="rmbt-container rmbt-latest-blog-posts" <?php if ( isset( $rmbt_theme_options['rmbt-latest-blog-posts_section-title'] ) && $rmbt_theme_options['rmbt-latest-blog-posts_section-title'] == "" ) :
					echo 'style="padding-top: 15px; padding-bottom: 15px;"';
				endif ?>>

					<?php if ( $rmbt_theme_options['rmbt-latest-blog-posts_section-title'] ) : ?>
								<h2 class='title-section'> <?php echo rmbt_get_redux_field( 'rmbt-latest-blog-posts_section-title', 1 ) ?>
								</h2>
					<?php endif ?>
					<?php if ( isset( $rmbt_theme_options['rmbt-latest-blog-posts_section-subtitle'] ) && $rmbt_theme_options['rmbt-latest-blog-posts_section-subtitle'] !== "" ) : ?>
								<p class='subtitle-section'>
									<?php echo rmbt_get_redux_field( 'rmbt-latest-blog-posts_section-subtitle', 1 ) ?>
								</p>
					<?php endif ?>

					<div class="rmbt-latest-blog-posts__row">
						<div class="rmbt-latest-blog-posts__col rmbt-latest-blog-posts-left-col">

							<?php
							if ( count( $sticky_posts ) > 0 ) {
								// все закреплённые посты (или только один?)
								foreach ( $sticky_posts as $post ) {
									setup_postdata( $post );
									get_template_part( 'pages/components/post_card-latest_blog/post_card-latest_blog', null, [ 
										'title' => get_the_title(),
										'text' => wp_trim_words( get_the_excerpt(), 20, '  [...]' ),
										'tag-img' => get_the_post_thumbnail(),
										'link_read_more_href' => get_the_permalink(),
										'post_date' => get_the_date(),
										'classes' => 'shadow-box sticky-posts',
									] );

								}
								wp_reset_postdata();


							} else {
								// самый молодой пост
								$first_post = $post_query->posts[0];
								setup_postdata( $first_post );
								get_template_part( 'pages/components/post_card-latest_blog/post_card-latest_blog', null, [ 
									'title' => get_the_title(),
									'text' => wp_trim_words( get_the_excerpt(), 20, '  [...]' ),
									'tag-img' => get_the_post_thumbnail(),
									'link_read_more_href' => get_the_permalink(),
									'post_date' => get_the_date(),
									'classes' => 'shadow-box sticky-posts',
								] );
								wp_reset_postdata();
							}

							?>


						</div>
						<div class="rmbt-latest-blog-posts__col rmbt-latest-blog-posts-right-col">

							<?php
							if ( $post_query->have_posts() ) :
								while ( $post_query->have_posts() ) :
									$post_query->the_post();

									get_template_part( 'pages/components/post_card-latest_blog/post_card-latest_blog', null, [ 
										'title' => get_the_title(),
										'text' => wp_trim_words( get_the_excerpt(), 20, '  [...]' ),
										'tag-img' => get_the_post_thumbnail( null, 'thumbnail' ),
										'link_read_more_href' => get_the_permalink(),
										'post_date' => get_the_date(),
										'classes' => 'shadow-box',
									] );
								endwhile;
								wp_reset_postdata();
							endif;


							?>



						</div>
					</div>
				</section>
			</div>

			<?php
}
?>
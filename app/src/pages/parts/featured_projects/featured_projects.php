<?php
$args = [ 
	'post_type' => 'project', // Ваш кастомный тип записи
	'posts_per_page' => 5,                // Все записи
];

$posts = get_posts( $args );
?>

<?php if ( ! empty( $posts ) ) : ?>

	<div class="wrapper-section featured-projects-wrapper-section">
		<div class="rmbt-full-width rmbt-featured-projects-full-width">
			<!-- by container width -->
			<!-- <section class="rmbt-container rmbt-featured-projects"> -->
			<!-- by full width -->
			<section class="rmbt-featured-projects">
				<h2 class="title-section"><?php echo 'Featured Projects'; ?></h2>
				<p class="subtitle-section">
					<?php echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, obcaecati voluptas dolor laborum a accusamus quos iusto fugit excepturi ea?' ?>
				</p>
				<div class="rmbt-featured-projects__row">
					<div class="rmbt-featured-projects-slide-swiper swiper">
						<div class="swiper-wrapper">

							<?php foreach ( $posts as $post ) :
								setup_postdata( $post ); ?>

								<div class="swiper-slide rmbt-featured-projects-slide  shadow-box">
									<div class="wrap-img rmbt-featured-projects-slide__img">

										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail( 'medium' );
										} else {
											echo rmbt_redux_img( 'rmbt-coming_soon_img', 'rmbt-coming_soon_img-alt' );
										} ?>

									</div>
									<h2 class="title-block"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class='subtitle-block'><?php echo wp_trim_words( get_the_excerpt(), 10, '  [...]' ); ?></div>

									<?php
									get_template_part( 'pages/components/button_read_more/button_read_more', null, [ 
										'data' => '',
										'title' => 'read more',
										'href' => get_permalink(),
										'classes' => 'shadow-box',
									] );
									?>




								</div>

							<?php endforeach;
							wp_reset_postdata();
							?>

						</div>
						<!-- <div class="rmbt--swiper__pagination"></div> -->
					</div>
					<div class="rmbt-featured-projects-slide-swiper__button-next">
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#chevron_1">
							</use>
						</svg>
					</div>
					<div class="rmbt-featured-projects-slide-swiper__button-prev">
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#chevron_1">
							</use>
						</svg>
					</div>
				</div>
			</section>
		</div>
	</div>

<?php endif; ?>
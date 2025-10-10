<?php get_header(); ?>


<main>

	<div class="wrapper-section rmbt-404-wrapper-section">
		<div class="rmbt-full-width rmbt-404-full-width">
			<div class="rmbt-404-full-width__bg">
				<div class="wrap-img">
					<?php echo rmbt_redux_img('rmbt-404-bg_img', 'rmbt-call-to-action-bg-img-alt') ?>
				</div>
			</div>
			<section class="rmbt-container rmbt-404">
				<div class="rmbt-404__row">
					<div class="rmbt-404__col ">
						<h1 class='title-section'>4<span>0</span>4 </h1>
						<p class='subtitle-section'><?php echo rmbt_get_redux_field('rmbt-404_text', 1) ?></p>
						<?php
                        get_template_part('pages/components/button_cta/button_cta', null, [
                            'title' => rmbt_get_redux_field('rmbt-404_button-title', 1),
                            'href' => get_home_url(),
                            'data' => '',
                        ]);
?>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>


<?php get_footer();

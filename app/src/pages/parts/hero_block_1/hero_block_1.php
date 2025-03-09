<div class="rmbt-full-width rmbt-hero-block-1-full-width">

	<div class="rmbt-hero-block-1-full-width__bg">
		<div class="wrap-img">
			<?php echo rmbt_redux_img( 'rmbt-hero-block-1-bg_img', 'rmbt-hero-block-1-bg_img_alt' ) ?>
		</div>
	</div>

	<?php get_template_part( 'pages/components/hero-block-1-top-row/hero-block-1-top-row' ); ?>

	<section class="rmbt-container rmbt-hero-block-1">
		<div class="rmbt-hero-block-1__row">
			<div class='rmbt-hero-block-1__col rmbt-hero-block-1-col-right'>

				<div class="rmbt-hero-block-1-col-right__bg">
				</div>

				<?php
				get_template_part( 'pages/components/benefit_slide/benefit_slide' );
				?>

			</div>
			<div class='rmbt-hero-block-1__col rmbt-hero-block-1-col-left'>
				<div class="rmbt-hero-block-1-col-left__bg">
				</div>

				<div class="rmbt-hero-block-1-col-left__content">
					<div class="rmbt-hero-block-1-col-left__slogan">
						A Website that Leads to Customers
					</div>
					<div class="rmbt-hero-block-1-col-left__title">
						<span>Winning</span> designs made simple!
					</div>
					<div class="rmbt-hero-block-1-col-left__subtitle">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam suscipit tenetur ratione optio
						deleniti,
						eos eveniet ipsa laudantium iusto. Nulla.
					</div>
				</div>

				<?php get_template_part( 'pages/components/controls_container/controls_container' ); ?>

			</div>
		</div>
	</section>
</div>
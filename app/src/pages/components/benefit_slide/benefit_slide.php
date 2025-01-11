<div class="rmbt-benefit-slide-swiper swiper">
   <div class="swiper-wrapper">
      <div class="swiper-slide benefit-slide">
         <h3 class="benefit-slide__title">
            <?php echo rmbt_get_redux_field( 'rmbt-benefits-slide-block_title_1', 1 ) ?>
         </h3>

         <div class="benefit-slide__text">
            <?php echo rmbt_get_redux_field( 'rmbt-benefits-slide-block_text_1', 1 ) ?>
         </div>
         <?php get_template_part( 'pages/components/button_nav/button_nav', 'null', [ 
				'data' => 'data-da=""',
				'title' => rmbt_get_redux_field( 'rmbt-benefits-slide-block_button-title_1', 1 ),
				'href' => rmbt_get_redux_field( 'rmbt-benefits-slide-block_button-link_1', 1 ),
			] );
			?>



      </div>
      <div class="swiper-slide benefit-slide">
         <h3 class="benefit-slide__title">
            <?php echo rmbt_get_redux_field( 'rmbt-benefits-slide-block_title_2', 1 ) ?>
         </h3>

         <div class="benefit-slide__text">
            <?php echo rmbt_get_redux_field( 'rmbt-benefits-slide-block_text_2', 1 ) ?>
         </div>
         <?php get_template_part( 'pages/components/button_nav/button_nav', 'null', [ 
				'data' => 'data-da=""',
				'title' => rmbt_get_redux_field( 'rmbt-benefits-slide-block_button-title_2', 1 ),
				'href' => rmbt_get_redux_field( 'rmbt-benefits-slide-block_button-link_2', 1 ),
			] );
			?>
      </div>
      <div class="swiper-slide benefit-slide">
         <h3 class="benefit-slide__title">
            <?php echo rmbt_get_redux_field( 'rmbt-benefits-slide-block_title_3', 1 ) ?>
         </h3>

         <div class="benefit-slide__text">
            <?php echo rmbt_get_redux_field( 'rmbt-benefits-slide-block_text_3', 1 ) ?>
         </div>
         <?php get_template_part( 'pages/components/button_nav/button_nav', 'null', [ 
				'data' => 'data-da=""',
				'title' => rmbt_get_redux_field( 'rmbt-benefits-slide-block_button-title_3', 1 ),
				'href' => rmbt_get_redux_field( 'rmbt-benefits-slide-block_button-link_3', 1 ),
			] );
			?>
      </div>
      <div class="swiper-slide benefit-slide">
         <h3 class="benefit-slide__title">
            <?php echo rmbt_get_redux_field( 'rmbt-benefits-slide-block_title_4', 1 ) ?>
         </h3>

         <div class="benefit-slide__text">
            <?php echo rmbt_get_redux_field( 'rmbt-benefits-slide-block_text_4', 1 ) ?>
         </div>
         <?php get_template_part( 'pages/components/button_nav/button_nav', 'null', [ 
				'data' => 'data-da=""',
				'title' => rmbt_get_redux_field( 'rmbt-benefits-slide-block_button-title_4', 1 ),
				'href' => rmbt_get_redux_field( 'rmbt-benefits-slide-block_button-link_4', 1 ),
			] );
			?>
      </div>
   </div>
</div>
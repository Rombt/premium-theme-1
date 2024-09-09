<?php get_header(); ?>



<main>
   <style>
   .templates-page-section-title {
      width: 100%;
   }

   .templates-page-section-title h2 {
      margin-top: 0px;
      margin-bottom: 0px;
   }

   .templates-page-section-title h2 span {
      color: blue;
   }
   </style>

   <?php

	$arr_dir = scandir( rmbt_PATH_THEME . '/template-parts/_templates' );

	foreach ( $arr_dir as $dir ) {
		if ( is_dir( rmbt_PATH_THEME . '/template-parts/_templates/' . $dir ) ) {

			if ( file_exists( rmbt_PATH_THEME . '/template-parts/_templates/' . $dir . '/' . $dir . '.php' ) ) { ?>
   <div class="rmbt-container templates-page-section-title"">
		<h2>section name <span style=" width: 100%;"><?php echo $dir; ?> </span> </h2>
      <p>get_template_part( 'template-parts/_templates/<?php echo $dir; ?>/<?php echo $dir; ?>' );</p>
   </div>

   <?php get_template_part( 'template-parts/_templates/' . $dir . '/' . $dir );
			}
		}
	}
	?>



</main>


<?php get_footer();
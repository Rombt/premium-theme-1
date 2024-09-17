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

   .templates-page-section p {
      margin-top: 5px;
      margin-bottom: 5px;
   }

   .templates-page-components {

      width: 100%;
   }

   .templates-page-components p {
      margin-bottom: 30px;

   }

   .templates-page-components__body {

      display: flex;
      row-gap: 15px;

      height: 250px;
      border: 1px solid #9c9c9c;


   }

   .tabs__content {

      /* min-height: 100vh; */
      padding-bottom: 200px;


   }
   </style>


   <?php $arr_dirs = scandir( __DIR__, SCANDIR_SORT_DESCENDING );

	$number_active_tab = 1;
	$templates_types = [];
	foreach ( $arr_dirs as $dir ) {
		if ( $dir !== '.' && $dir !== '..' && is_dir( __DIR__ . DIRECTORY_SEPARATOR . $dir ) ) {
			$templates_types[ $dir ] = [];
			$arr_sub_dirs = scandir( __DIR__ . DIRECTORY_SEPARATOR . $dir );
			foreach ( $arr_sub_dirs as $sub_dir ) {
				if ( is_dir( __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $sub_dir ) ) {
					if ( file_exists( __DIR__ . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $sub_dir . DIRECTORY_SEPARATOR . $sub_dir . '.php' ) ) {
						$templates_types[ $dir ][] = $sub_dir;
					}
				}
			}
		}
	}

	?>



   <div class="tabs rmbt-templates-page-tabs">
      <nav data-tabs-titles class="tabs__nav">
         <?php
			$i = 0;
			foreach ( $templates_types as $template_type_name => $template_type_value ) : ?>
         <?php if ( $i === $number_active_tab ) : ?>
         <button type="button" class="tabs__title tabs__title-active"
            data-tab="<?php echo $template_type_name; ?>"><?php echo $template_type_name; ?>
         </button>
         <?php else : ?>
         <button type="button" class="tabs__title"
            data-tab="<?php echo $template_type_name; ?>"><?php echo $template_type_name; ?></button>
         <?php endif ?>
         <?php $i++; ?>
         <?php endforeach ?>
      </nav>

      <div class="tabs__content">
         <?php $i = 0;
			foreach ( $templates_types as $template_type => $arr_templates ) {
				if ( $i === $number_active_tab ) { ?>
         <div class="tabs__body tabs__body-active" data-tab-name="<?php echo $template_type ?>">
            <?php } else { ?>
            <div class="tabs__body" data-tab-name="<?php echo $template_type ?>">
               <?php } ?>

               <?php foreach ( $arr_templates as $template ) { ?>


               <?php if ( $template_type === 'components' ) : ?>
               <div class="rmbt-container templates-page-components">
                  <h2><?php echo $template; ?></h2>
                  <p>get_template_part('<?php echo 'template-parts/_templates/' . $template_type . DIRECTORY_SEPARATOR . $template . DIRECTORY_SEPARATOR . $template ?>');
                  </p>

                  <div class="templates-page-components__body">

                     <?php get_template_part( 'template-parts/_templates/' . $template_type . DIRECTORY_SEPARATOR . $template . DIRECTORY_SEPARATOR . $template ); ?>
                  </div>
               </div>


               <?php else : ?>


               <div class="rmbt-container templates-page-section-title">
                  <h2><?php echo $template; ?></h2>
                  <p>get_template_part('<?php echo 'template-parts/_templates/' . $template_type . DIRECTORY_SEPARATOR . $template . DIRECTORY_SEPARATOR . $template ?>');
                  </p>
               </div>

               <?php get_template_part( 'template-parts/_templates/' . $template_type . DIRECTORY_SEPARATOR . $template . DIRECTORY_SEPARATOR . $template ); ?>
               <?php endif ?>


               <?php } ?>
            </div>
            <?php $i++;
			} ?>
         </div>
      </div>



</main>

<?php get_footer();
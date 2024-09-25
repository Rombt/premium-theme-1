<?php get_header(); ?>



<main>

   <?php $arr_dirs = scandir( __DIR__, SCANDIR_SORT_DESCENDING );

	$number_active_tab = 0;
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

               <?php
							$content = file_get_contents( get_template_directory() . '/template-parts/_templates/' . $template_type . DIRECTORY_SEPARATOR . $template . DIRECTORY_SEPARATOR . $template . '.php' );
							preg_match_all( '/\$args\[\s*\'([^\']*)\'\s*\]/', $content, $results );
							$arr_args = [];
							$str_args = '';
							if ( count( $results[1] ) > 0 ) {
								$str_args = '[';
								foreach ( $results[1] as $value ) {
									$arr_args[ $value ] = '';
									$str_args .= '\'' . $value . '\' => \' \',';
								}
								$str_args .= ']';
							}
							?>

               <?php
							$specifier = '';
							if ( $pos = strpos( $template, '-' ) ) {
								$specifier = substr( $template, $pos + 1 );
							}
							?>

               <?php $str_get_template_part = 'get_template_part(\'template-parts/_templates/' . $template_type . DIRECTORY_SEPARATOR . $template . DIRECTORY_SEPARATOR . $template . '\',' . ( strlen( $specifier ) > 0 ? '\'' . $specifier . '\'' : 'null' ) . ( strlen( $str_args ) > 0 ? ',' . $str_args : null ) . ');'; ?>

               <?php if ( $template_type === 'components' ) : ?>
               <div class="rmbt-container templates-page-components">
                  <h2><?php echo $template; ?></h2>
                  <div class="get-template-part">
                     <p class='text-to-copy'> <?php echo $str_get_template_part; ?> </p>
                     <button class='copy-button'>copy</button>
                  </div>
                  <div class="templates-page-components__body">
                     <?php get_template_part( 'template-parts/_templates/' . $template_type . DIRECTORY_SEPARATOR . $template . DIRECTORY_SEPARATOR . $template, strlen( $specifier ) > 0 ? '\'' . $specifier . '\'' : 'null', count( $arr_args ) > 0 ? $arr_args : null ); ?>
                  </div>
               </div>


               <?php else : ?>

               <div class="rmbt-container templates-page-section-title">
                  <h2><?php echo $template; ?></h2>
                  <div class="get-template-part">
                     <p class='text-to-copy'> <?php echo $str_get_template_part; ?> </p>
                     <button class='copy-button'>copy</button>
                  </div>
               </div>

               <?php get_template_part( 'template-parts/_templates/' . $template_type . DIRECTORY_SEPARATOR . $template . DIRECTORY_SEPARATOR . $template, strlen( $specifier ) > 0 ? '\'' . $specifier . '\'' : 'null', count( $arr_args ) > 0 ? $arr_args : null ); ?>
               <?php endif ?>

               <?php } ?>
            </div>
            <?php $i++;
			} ?>
         </div>
      </div>
   </div>

   <script>
   const nl_getTemplatePart = document.querySelectorAll('.get-template-part')

   nl_getTemplatePart.forEach(getTemplatePart => {

      getTemplatePart.querySelector('.copy-button').addEventListener('click', function(e) {
         const text = getTemplatePart.querySelector('.text-to-copy').innerText;
         navigator.clipboard.writeText(text).then(() => {
            e.target.classList.add('success-to-copy');
            e.target.innerText = 'copied';
            setTimeout(() => {
               e.target.classList.remove('success-to-copy');
               e.target.innerText = 'Copy';
            }, 2000);
         }).catch(err => {
            e.target.classList.add('error-to-copy');
            e.target.innerText = 'error';
         });
      });
   })
   </script>

</main>

<?php get_footer();
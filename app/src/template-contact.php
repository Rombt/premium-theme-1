<?php

/*
Template Name: Contact Page
Template Post Type: page
*/
get_header();

?>

<main>



  <?php  get_template_part('pages/parts/contacts/contacts'); ?>
  



<?php
// для поддержки Gutenberg
// if (have_posts()) :
//     while (have_posts()) : the_post();
//         echo '<div class="page-content">';
//         the_content();
//         echo '</div>';
//     endwhile;
// endif;

?>

</main>


<?php get_footer();

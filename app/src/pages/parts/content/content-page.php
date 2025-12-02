<article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>



    <header class="entry-header">
        <h1 class="entry-title title-section"><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">

    <?php if (has_post_thumbnail()) : ?>
        <div class="page__thumb">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php endif; ?>

        <?php the_content(); ?>

        <?php
        // пагинация, если контент разбит на страницы
        wp_link_pages([
            'before' => '<div class="page-links">',
            'after'  => '</div>',
        ]);
        ?>
    </div>

</article>
<?php get_header(); ?>

<main id="primary" class="site-main single-post">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="author">By <?php the_author(); ?></span>
                        <span class="date">on <?php the_date(); ?></span>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer">
                    <?php the_tags('<span class="tags">Tags: ', ', ', '</span>'); ?>
                </footer>

            </article>

            <?php comments_template(); ?>

        <?php endwhile;
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

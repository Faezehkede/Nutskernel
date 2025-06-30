<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post-content'); ?>>

    <header class="entry-header container">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-meta">
            <span class="date">on <?php echo get_the_date(); ?></span>
            <span class="categories">
                in <?php the_category(', '); ?>
            </span>
            <span class="comments">
                <?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
            </span>
        </div>
    </header>

    <div class="container single-post">
        <div class="row">

            <!-- Main Content -->
            <div class="col-9">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('single-post-content'); ?>>

                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                                <div class="entry-meta">
                                    <span class="author">By <?php the_author(); ?></span>
                                    <span class="date">on <?php echo get_the_date(); ?></span>
                                </div>
                            </header>

                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                            <?php endif; ?>

                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>

                            <footer class="entry-footer">
                                <?php the_tags('<div class="tags">Tags: ', ', ', '</div>'); ?>
                            </footer>

                        </article>

                        <?php comments_template(); ?>

                <?php endwhile;
                endif;
                ?>
            </div>

            <!-- Sidebar -->
            <div class="col-3">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>

</article>


<?php get_footer(); ?>
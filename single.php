<?php get_header(); ?>


<div class="container single-posts">
    <div class="row">

        <!-- Main Content -->
        <div class="col-9">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('single-post-content'); ?>>

                        <header class="entry-header">
                            
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>

                        </header>

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>


                    </article>

                    <?php comments_template(); ?>

            <?php endwhile;
            endif;
            ?>
        </div>

        <!-- Sidebar -->
        <div class="col-3">
            <div class="post-sidebar">
            <div class="entry-meta">
                                <span class="date">on <?php echo get_the_date(); ?></span>
                                <span class="categories">
                                    in <?php the_category(', '); ?>
                                </span>
                                <span class="comments">
                                    <?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
                                </span>
                            </div>
            
            <?php get_sidebar(); ?>
            </div>
        </div>

    </div>
</div>


<?php get_footer(); ?>
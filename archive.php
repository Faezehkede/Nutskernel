<?php get_header(); ?>

<main id="primary" class="archive-page container">

    <!-- Main content -->
    <div class="content-area">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php the_archive_title(); ?></h1>
                <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
            </header>

            <div class="post-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['style' => 'width:100%; height:auto;']); ?>
                            </a>
                        <?php endif; ?>

                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="entry-meta">
                            <span><?php echo get_the_date(); ?> | <?php the_author(); ?></span>
                        </div>
                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>

            <p>No posts found.</p>

        <?php endif; ?>
    </div>

    <!-- Sidebar -->
    <aside class="sidebar-area">
        <?php get_sidebar(); ?>
    </aside>

</main>

<?php get_footer(); ?>

<?php get_header(); ?>

<header class="page-header">
    <h1 class="page-title"><?php the_archive_title(); ?></h1>
    <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
</header>

<section class="events-archive">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="events-grid">
                <?php while (have_posts()) : the_post(); ?>

                    <div class="event-card">

                        <div class="event-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large'); ?>
                            <?php else : ?>
                                <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/no-image.jpg" alt="No image">
                            <?php endif; ?>
                        </div>

                        <div class="event-content">
                            <h3 class="event-title"><?php the_title(); ?></h3>
                            <div class="event-excerpt"><?php the_excerpt(); ?></div>
                            <div class="event-meta">

                                <?php if (function_exists('get_field')): ?>
                                    <span class="event-date">
                                        <i class="fa fa-calendar"></i> <?php the_field('event-date'); ?>
                                    </span>
                                    <span class="event-location">
                                        <i class="fa fa-map-marker-alt"></i> <?php the_field('event-location'); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="event-action">
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More...</a>
                        </div>

                    </div>

                <?php endwhile; ?>
            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p class="no-events">No upcoming events found.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
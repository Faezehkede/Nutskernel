<?php get_header(); ?>

<section class="events-hero">
    <div class="container">
        <h1 class="section-title">Upcoming Events</h1>
        <p class="section-subtitle">Join us for our latest experiences and networking gatherings</p>
    </div>
</section>

<section class="events-archive">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="events-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="event-card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="event-thumb">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large'); ?>
                                <?php else : ?>
                                    <img src="<?php echo AGRIFOODZ_ASSETS; ?>/images/no-image.jpg" alt="No image">
                                <?php endif; ?>
                            </div>
                            <div class="event-info">
                                <h3 class="event-title"><?php the_title(); ?></h3>
                                
                                <?php if (function_exists('get_field')): ?>
                                    <p class="event-date"><?php the_field('event_date'); ?></p>
                                    <p class="event-location"><?php the_field('event_location'); ?></p>
                                <?php endif; ?>
                                
                                <span class="read-more">Read More →</span>
                            </div>
                        </a>
                    </article>
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

<?php get_header(); ?>

<main class="single-event">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="event container">
                <div class="event-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="event-thumb"><?php the_post_thumbnail(); ?></div>
                    <?php endif; ?>
                </div>
                <div class="event-details">
                    <div>
                        <div class="event-title">
                            <h1><?php the_title(); ?></h1>
                        </div>

                        <div class="event-info">
                            <?php if (function_exists('get_field')): ?>
                                <p><i class="fa fa-calendar-alt"></i> <strong>Date:</strong> <?php the_field('event-date'); ?></p>
                                <p><i class="fa fa-clock"></i> <strong>Time:</strong> <?php the_field('event-time'); ?></p>
                                <p><i class="fa fa-map-marker-alt"></i> <strong>Location:</strong> <?php the_field('event-location'); ?></p>
                                <p><i class="fa fa-ticket-alt"></i> <?php the_field('event_note'); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="event-description">
                            <p><strong>Description:</strong></p>
                            <div class="event-content"><?php the_content(); ?></div>
                        </div>
                    </div>

                    <div class="event-footer">
                        <a href="#" class="cta-button">Request Your Invitation</a>
                    </div>
                </div>
            </div>

    <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>
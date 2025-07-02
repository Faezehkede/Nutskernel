<?php get_header(); ?>

<main class="single-event">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="event-detail">
            <h1><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()) : ?>
                <div class="event-thumb"><?php the_post_thumbnail(); ?></div>
            <?php endif; ?>

            <div class="event-content"><?php the_content(); ?></div>

            <?php if (function_exists('get_field')): ?>
                <p><strong>Date:</strong> <?php the_field('event_date'); ?></p>
                <p><strong>Location:</strong> <?php the_field('event_location'); ?></p>
            <?php endif; ?>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>

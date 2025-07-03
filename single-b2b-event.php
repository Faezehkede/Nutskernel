<?php get_header(); ?>

<main class="single-event">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="event container">

                <div class="top-event-info">
                    <div class="event-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="event-thumb"><?php the_post_thumbnail(); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="event-title">

                        <?php if (function_exists('yoast_breadcrumb')) : ?>
                            <div class="breadcrumb">
                                <?php yoast_breadcrumb('<p id="breadcrumbs">', '</p>'); ?>
                            </div>
                        <?php endif; ?>

                        <h1><?php the_title(); ?></h1>

                        <div class="event-meta">
                            <span class="event-date">
                                <?php echo get_the_date(); ?>
                            </span>
                            <span class="event-categories">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'category');
                                if ($terms && !is_wp_error($terms)) {
                                    $term_links = array_map(function ($term) {
                                        return '<a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a>';
                                    }, $terms);
                                    echo implode(', ', $term_links);
                                }
                                ?>
                            </span>
                        </div>

                    </div>
                </div>


                <div class="event-details">
                    <div>

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
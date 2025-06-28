<aside id="secondary" class="widget-area">
    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    <?php else : ?>
        <!-- Default widgets (if no widgets are added from WP Admin) -->
        <section class="widget">
            <h2 class="widget-title">Recent Posts</h2>
            <ul>
                <?php
                $recent_posts = wp_get_recent_posts(['numberposts' => 5]);
                foreach ( $recent_posts as $post ) {
                    echo '<li><a href="' . get_permalink($post["ID"]) . '">' . esc_html($post["post_title"]) . '</a></li>';
                }
                ?>
            </ul>
        </section>
    <?php endif; ?>
</aside>

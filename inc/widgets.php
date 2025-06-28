<!-- sidebar -->
<?php

function mytheme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'your-theme-textdomain' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets in this area will be shown on the right-hand side.', 'your-theme-textdomain' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );
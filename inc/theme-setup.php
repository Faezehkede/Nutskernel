<?php
function agrifoodz_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('custom-logo');
    register_nav_menus([
        'primary' => __('Primary Menu', 'agrifoodz-theme'),
        'footer' => __('Footer Menu', 'agrifoodz-theme')
    ]);
}
add_action('after_setup_theme', 'agrifoodz_setup');

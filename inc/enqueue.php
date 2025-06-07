<?php
function agrifoodz_enqueue_scripts() {
    wp_enqueue_style('agrifoodz-main', get_template_directory_uri() . '/assets/css/main.css', [], '1.0');
    wp_enqueue_script('agrifoodz-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'agrifoodz_enqueue_scripts');

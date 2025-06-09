<?php 

defined('ABSPATH') || exit;
// بارگذاری استایل و اسکریپت‌ها
function agrifoodz_enqueue_scripts() {
    // استایل اصلی
    wp_enqueue_style('agrifoodz-style', get_stylesheet_uri());

    // Styles
    wp_enqueue_style('agrifoodz-style', AGRIFOODZ_CSS . '/style.css', [], AGRIFOODZ_VERSION);
    wp_enqueue_style('agrifoodz-header-footer', AGRIFOODZ_CSS . '/header-footer.css', [], AGRIFOODZ_VERSION);
    wp_enqueue_style('agrifoodz-swiper', AGRIFOODZ_CSS . '/swiper-bundle.min.css', [], AGRIFOODZ_VERSION);
    wp_enqueue_style('agrifoodz-responsive', AGRIFOODZ_CSS . '/responsive.css', [], AGRIFOODZ_VERSION);

    // Scripts
    wp_enqueue_script('jquery'); // WordPress already has jQuery

    wp_enqueue_script('agrifoodz-swiper', AGRIFOODZ_JS . '/swiper-bundle.min.js', [], AGRIFOODZ_VERSION, true);
    wp_enqueue_script('agrifoodz-script', AGRIFOODZ_JS . '/script.js', ['jquery', 'agrifoodz-swiper'], AGRIFOODZ_VERSION, true);

}
add_action('wp_enqueue_scripts', 'agrifoodz_enqueue_scripts');
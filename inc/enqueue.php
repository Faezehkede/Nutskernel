<?php 

defined('ABSPATH') || exit;
// بارگذاری استایل و اسکریپت‌ها
function agrifoodz_enqueue_scripts() {
    // استایل اصلی
    wp_enqueue_style('agrifoodz-style', get_stylesheet_uri());

    // فایل‌های اضافی CSS
    wp_enqueue_style('agrifoodz-custom',AGRIFOODZ_CSS .'/style.css', array(), AGRIFOODZ_VERSION);

    // فایل‌های JS اختصاصی
    wp_enqueue_script('agrifoodz-scripts', AGRIFOODZ_JS . '/scripts.js', array('jquery'), AGRIFOODZ_VERSION, true);
}
add_action('wp_enqueue_scripts', 'agrifoodz_enqueue_scripts');
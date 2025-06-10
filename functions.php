<?php

// ===========================
// تعریف ثابت‌ها برای مسیرها و اطلاعات پایه قالب
// ===========================
define('AGRIFOODZ_VERSION', '1.0.0');
define('AGRIFOODZ_DIR', get_template_directory());
define('AGRIFOODZ_URI', get_template_directory_uri());

define('AGRIFOODZ_ASSETS', AGRIFOODZ_URI . '/assets');
define('AGRIFOODZ_CSS', AGRIFOODZ_ASSETS . '/css');
define('AGRIFOODZ_JS', AGRIFOODZ_ASSETS . '/js');
define('AGRIFOODZ_INC', AGRIFOODZ_DIR . '/inc');

add_action('after_setup_theme', 'agrifoodz_theme_setup');

// راه‌اندازی قالب
function agrifoodz_theme_setup() {
    // پشتیبانی از ترجمه
    load_theme_textdomain('agrifoodz', get_template_directory() . '/languages');

    // پشتیبانی از تگ title
    add_theme_support('title-tag');

    // پشتیبانی از تصویر شاخص
    add_theme_support('post-thumbnails');

    // ثبت یک منوی اصلی
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'agrifoodz'),
    ));

    // پشتیبانی از ووکامرس
    add_theme_support('woocommerce');
}


// require_once  AGRIFOODZ_INC . '/woo/fun.php'; // شامل فایل scripts.php برای اسکریپت‌ها و استایل‌ها
include AGRIFOODZ_DIR . '/template-tags.php'; // شامل فایل helper.php برای توابع کمکی
include AGRIFOODZ_DIR . '/acf.php'; // شامل فایل acf.php برای تنظیمات ACF   
include AGRIFOODZ_DIR . '/enqueue.php'; // شامل فایل widgets.php برای ویجت‌ها


// فعال کردن ویژگی‌های ووکامرس بیشتر در صورت نیاز
function agrifoodz_woocommerce_support() {
    // فعال کردن پشتیبانی از تصاویر گالری
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'agrifoodz_woocommerce_support');


// Activing style
function agrifoodz_enqueue_styles() {
    wp_enqueue_style('agrifoodz-style', AGRIFOODZ_CSS . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'agrifoodz_enqueue_styles');


remove_action('wp_head', 'yoast_head_json');            // Yoast JSON-LD
remove_action('wp_head', 'wp_generator');               // WP version info
// ... and so on

function dequeue_unwanted_assets() {
    wp_dequeue_style('elementor-icons');
    wp_dequeue_script('emoji');
    // . . .
  }
  add_action('wp_enqueue_scripts', 'dequeue_unwanted_assets', 20);
  
<?php

defined('ABSPATH') || exit;
// بارگذاری استایل و اسکریپت‌ها
function agrifoodz_enqueue_scripts()
{
    // استایل اصلی
    wp_enqueue_style('agrifoodz-style', get_stylesheet_uri());

    // Styles
    wp_enqueue_style('main-style', AGRIFOODZ_CSS . '/style.css', [], AGRIFOODZ_VERSION);
    wp_enqueue_style('agrifoodz-header-footer', AGRIFOODZ_CSS . '/header-footer.css', [], AGRIFOODZ_VERSION);
    wp_enqueue_style('agrifoodz-swiper', AGRIFOODZ_CSS . '/swiper-bundle.min.css', [], AGRIFOODZ_VERSION);
    wp_enqueue_style('agrifoodz-responsive', AGRIFOODZ_CSS . '/responsive.css', [], AGRIFOODZ_VERSION);

    // Conditionally load pages.css on specific pages
    $page_slug = get_post_field('post_name', get_post());

    if (in_array($page_slug, [
        'how-to-work',
        'about-us',
        'contact-us',
        'subscription-plans',
        'marketing-research',
        'logistic-advising',
        'business-partnership',
        'advertising-with-us',
        'terms-of-use',
        'privacy-policy',
    ])) {
        wp_enqueue_style('agrifoodz-pages', AGRIFOODZ_CSS . '/pages.css', [], AGRIFOODZ_VERSION);
    }

    if (in_array($page_slug, ['register', 'register-step-two'])) {
        wp_enqueue_style('agrifoodz-register', AGRIFOODZ_CSS . '/login-form.css', [], AGRIFOODZ_VERSION);
    }

    if (is_page('product-list')) {
        wp_enqueue_style('agrifoodz-product-list', AGRIFOODZ_CSS . '/product-list.css', [], AGRIFOODZ_VERSION);
    }

    if (is_page('buyer-list')) {
        wp_enqueue_style('agrifoodz-buyer-list', AGRIFOODZ_CSS . '/buyer-list.css', [], AGRIFOODZ_VERSION);
    }

    if (is_404()) {
        wp_enqueue_style('agrifoodz-404-style', AGRIFOODZ_CSS . '/404.css');
    }

    if (is_single()) {
        wp_enqueue_style('agrifoodz-single-style', AGRIFOODZ_CSS . '/single-post.css');
    }

    // Events

    if (is_post_type_archive('b2b-event')) {
        wp_enqueue_style('b2b-event-archive-style', AGRIFOODZ_CSS . '/event-archive.css', [], '1.0');
    }

    if (is_singular('b2b-event')) {
        wp_enqueue_style('b2b-event-single-style', AGRIFOODZ_CSS . '/single-event.css', [], '1.0');
    }

    // Single product
    if (is_singular('product')) {
        wp_enqueue_style('product-style', AGRIFOODZ_CSS . '/product.css');
    }

    if (is_singular('product')) {
        wp_enqueue_script('product-single-script', AGRIFOODZ_JS . '/products.js', array('jquery'), null, true);
    }



    // Scripts
    wp_enqueue_script('jquery'); // WordPress already has jQuery

    wp_enqueue_script('agrifoodz-swiper', AGRIFOODZ_JS . '/swiper-bundle.min.js', [], AGRIFOODZ_VERSION, true);
    wp_enqueue_script('agrifoodz-script', AGRIFOODZ_JS . '/script.js', ['jquery', 'agrifoodz-swiper'], AGRIFOODZ_VERSION, true);

    // Live Search Script
    wp_enqueue_script('agrifoodz-live-search', AGRIFOODZ_JS . '/live-search.js', array('jquery'), AGRIFOODZ_VERSION, true);
    wp_localize_script('agrifoodz-live-search', 'my_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'agrifoodz_enqueue_scripts');

<?php
/**
 * Theme setup for Northstar.
 *
 * @package Northstar
 */

if (! defined('ABSPATH')) {
    exit;
}

function northstar_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'northstar'),
    ]);
}
add_action('after_setup_theme', 'northstar_theme_setup');

function northstar_enqueue_assets(): void
{
    wp_enqueue_style('northstar-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_script(
        'northstar-theme',
        get_template_directory_uri() . '/assets/js/theme.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'northstar_enqueue_assets');

function northstar_customize_register(WP_Customize_Manager $wp_customize): void
{
    $wp_customize->add_section('northstar_links', [
        'title'    => __('Northstar External Links', 'northstar'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('northstar_shopify_url', [
        'default'           => 'https://example.myshopify.com',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('northstar_shopify_url', [
        'label'   => __('Shopify URL', 'northstar'),
        'section' => 'northstar_links',
        'type'    => 'url',
    ]);
}
add_action('customize_register', 'northstar_customize_register');

function northstar_seo_meta_description(): void
{
    if (is_front_page()) {
        echo '<meta name="description" content="Northstar helps youth find direction through mentorship, identity development, and career readiness programs that strengthen communities.">';
    }
}
add_action('wp_head', 'northstar_seo_meta_description', 1);

<?php
/**
 * Header template.
 *
 * @package Northstar
 */

if (! defined('ABSPATH')) {
    exit;
}

$shop_url = get_theme_mod('northstar_shopify_url', 'https://example.myshopify.com');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e('Skip to content', 'northstar'); ?></a>
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Northstar Home', 'northstar'); ?>">
            <span class="brand-mark" aria-hidden="true"></span>
            <span><?php bloginfo('name'); ?></span>
        </a>
        <button class="menu-toggle" aria-expanded="false" aria-controls="primary-menu">☰</button>
        <ul id="primary-menu" class="primary-menu">
            <li><a href="#home"><?php esc_html_e('Home', 'northstar'); ?></a></li>
            <li><a href="#mentoring"><?php esc_html_e('Mentoring', 'northstar'); ?></a></li>
            <li><a href="#donate"><?php esc_html_e('Donate', 'northstar'); ?></a></li>
            <li><a href="#contact"><?php esc_html_e('Contact', 'northstar'); ?></a></li>
            <li><a href="<?php echo esc_url($shop_url); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Northstar Store', 'northstar'); ?></a></li>
        </ul>
    </div>
</header>

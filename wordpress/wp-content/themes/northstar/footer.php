<?php
/**
 * Footer template.
 *
 * @package Northstar
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<footer class="footer">
    <div class="container">
        <p><?php echo esc_html(date_i18n('Y')); ?> · <?php bloginfo('name'); ?> · <?php esc_html_e('Guiding youth by example.', 'northstar'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

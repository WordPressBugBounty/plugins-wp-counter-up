<?php
if (! defined('ABSPATH')) {
    exit;
}
?>
<div class="lgx_row">

    <div class="lgx_col_6">
        <div class="lgx_logo_slider_info_box">
            <h3 class="lgx_logo_slider_header">
                <?php esc_html_e('Shortcode', 'wp-counter-up'); ?>
            </h3>
            <p>
                <?php esc_html_e('Copy and paste this shortcode into your posts or pages', 'wp-counter-up'); ?>
            </p>

            <div class="lgx_logo_slider_short_code selectable">
                <?php
                $shortcode = '[lgxcounterup id="' . esc_attr($post->ID) . '"]';
                echo esc_html($shortcode);
                ?>
            </div>

            <div class="lgx_logo_slider_copy_button short_code_copy_button">
                <i class="lgxicon lgx-icon-copy"></i>
                <?php esc_html_e('Copy', 'wp-counter-up'); ?>
            </div>
        </div>
    </div>

    <div class="lgx_col_6">
        <div class="lgx_logo_slider_info_box">
            <h3 class="lgx_logo_slider_header">
                <?php esc_html_e('Theme or Plugin', 'wp-counter-up'); ?>
            </h3>
            <p>
                <?php esc_html_e('Copy and paste this PHP code into your Theme or Plugin file', 'wp-counter-up'); ?>
            </p>

            <div class="lgx_logo_slider_short_code selectable">
                <?php
                $php_code = "<?php echo do_shortcode( '[lgxcounterup id=\"" . esc_attr($post->ID) . "\"]' ); ?>";
                echo esc_html($php_code);
                ?>
            </div>

            <div class="lgx_logo_slider_copy_button php_code_copy_button">
                <i class="lgxicon lgx-icon-copy"></i>
                <?php esc_html_e('Copy', 'wp-counter-up'); ?>
            </div>
        </div>
    </div>

</div><!-- ./lgx_row -->
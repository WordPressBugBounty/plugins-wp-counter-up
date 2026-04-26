<?php

/**
 * Provide a public-facing view for the plugin
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Pro version restriction
 */
if (
    defined('LGX_WCU_PLUGIN_BASE') &&
    defined('LGX_WCU_PLUGIN_META_FIELD_PRO') &&
    LGX_WCU_PLUGIN_BASE === 'wp-counter-up/wp-counter-up.php' &&
    LGX_WCU_PLUGIN_META_FIELD_PRO === 'enabled'
) {
    echo '<p style="color:red;">' . esc_html__('Please buy a pro version of this plugin.', 'wp-counter-up') . '</p>';
    return;
}

/**
 * Prevent undefined notices
 */
$lgx_app_id        = isset($atts['id']) ? (int) $atts['id'] : 0;
$lgx_showcase_type = $lgx_generator_meta['lgx_counter_showcase_type'] ?? 'grid';
$lgx_layout_order  = $lgx_generator_meta['lgx_item_content_order'] ?? '';

/**
 * Responsive settings (safe)
 */
$lgx_large_desktop_item = isset($lgx_generator_meta['lgx_large_desktop_item']) ? (int) $lgx_generator_meta['lgx_large_desktop_item'] : 0;
$lgx_desktop_item       = isset($lgx_generator_meta['lgx_desktop_item']) ? (int) $lgx_generator_meta['lgx_desktop_item'] : 0;
$lgx_tablet_item        = isset($lgx_generator_meta['lgx_tablet_item']) ? (int) $lgx_generator_meta['lgx_tablet_item'] : 0;
$lgx_mobile_item        = isset($lgx_generator_meta['lgx_mobile_item']) ? (int) $lgx_generator_meta['lgx_mobile_item'] : 0;

/**
 * UI settings (safe defaults)
 */
$lgx_icon_padding       = $lgx_generator_meta['lgx_icon_padding'] ?? '0px';
$lgx_value_width        = $lgx_generator_meta['lgx_value_width'] ?? 'auto';
$lgx_value_height       = $lgx_generator_meta['lgx_value_height'] ?? 'auto';

$lgx_value_border_color_en   = $lgx_generator_meta['lgx_value_border_color_en'] ?? 'no';
$lgx_value_border_color      = $lgx_generator_meta['lgx_value_border_color'] ?? '#F9f9f9';
$lgx_value_border_color_hover = $lgx_generator_meta['lgx_value_border_color_hover'] ?? '#F9f9f9';
$lgx_value_border_width      = $lgx_generator_meta['lgx_value_border_width'] ?? '1px';
$lgx_value_border_radius     = $lgx_generator_meta['lgx_value_border_radius'] ?? '100px';

$lgx_item_floating = $lgx_generator_meta['lgx_item_floating'] ?? 'none';

/**
 * Section settings
 */
$lgx_section_width         = $lgx_generator_meta['lgx_section_width'] ?? '';
$lgx_section_container     = $lgx_generator_meta['lgx_section_container'] ?? '';
$lgx_section_bg_img_en     = $lgx_generator_meta['lgx_section_bg_img_en'] ?? '';
$lgx_section_bg_img        = $lgx_generator_meta['lgx_section_bg_img'] ?? '';
$lgx_section_bg_img_attachment = $lgx_generator_meta['lgx_section_bg_img_attachment'] ?? '';
$lgx_section_bg_img_size   = $lgx_generator_meta['lgx_section_bg_img_size'] ?? '';
$lgx_section_bg_color_en   = $lgx_generator_meta['lgx_section_bg_color_en'] ?? '';
$lgx_section_bg_color      = $lgx_generator_meta['lgx_section_bg_color'] ?? '';
$lgx_section_top_margin    = $lgx_generator_meta['lgx_section_top_margin'] ?? '';
$lgx_section_bottom_margin = $lgx_generator_meta['lgx_section_bottom_margin'] ?? '';
$lgx_section_top_padding   = $lgx_generator_meta['lgx_section_top_padding'] ?? '';
$lgx_section_bottom_padding = $lgx_generator_meta['lgx_section_bottom_padding'] ?? '';

/**
 * Header settings
 */
$lgx_header_title_font_size       = $lgx_generator_meta['lgx_header_title_font_size'] ?? '';
$lgx_header_title_color           = $lgx_generator_meta['lgx_header_title_color'] ?? '';
$lgx_header_title_font_weight     = $lgx_generator_meta['lgx_header_title_font_weight'] ?? '';
$lgx_header_title_bottom_margin   = $lgx_generator_meta['lgx_header_title_bottom_margin'] ?? '';

$lgx_header_subtitle_font_size    = $lgx_generator_meta['lgx_header_subtitle_font_size'] ?? '';
$lgx_header_subtitle_color        = $lgx_generator_meta['lgx_header_subtitle_color'] ?? '';
$lgx_header_subtitle_font_weight  = $lgx_generator_meta['lgx_header_subtitle_font_weight'] ?? '';
$lgx_header_subtitle_bottom_margin = $lgx_generator_meta['lgx_header_subtitle_bottom_margin'] ?? '';

/**
 * Styles
 */
$base = plugin_dir_path(__FILE__);

include $base . 'dynamic-style/loader-pre-style.php';

wp_enqueue_style('lgx-counter-up-style');
wp_enqueue_script('lgx-waypoints_v2');
wp_enqueue_script('lgx-milestone_v2');
wp_enqueue_script('lgx-counter-script');

/**
 * Layout rendering
 */
if ('grid' === $lgx_showcase_type) {

    include $base . 'dynamic-style/grid-style.php';
    include $base . 'template/view-default.php';
} elseif ('flexbox' === $lgx_showcase_type) {

    include $base . 'dynamic-style/flexbox-style.php';
    include $base . 'template/view-default.php';
}

/**
 * Global styles
 */
include $base . 'dynamic-style/general-style.php';
include $base . 'dynamic-style/pro-style.php';

/**
 * Pro override
 */
if (
    defined('LGX_LS_PLUGIN_BASE') &&
    LGX_LS_PLUGIN_BASE === 'wp-counter-up-pro/wp-counter-up-pro.php'
) {
    include $base . 'dynamic-style/pro-style-pro.php';
}

<?php
if (! defined('ABSPATH')) {
    exit;
}

/**
 * Flexbox settings (safe defaults)
 */
$lgx_flexbox_column_gap      = $lgx_generator_meta['lgx_flexbox_column_gap'] ?? '15px';
$lgx_flexbox_row_gap         = $lgx_generator_meta['lgx_flexbox_row_gap'] ?? '15px';
$lgx_flexbox_align_items     = $lgx_generator_meta['lgx_flexbox_align_items'] ?? 'flex-start';
$lgx_flexbox_justify_content = $lgx_generator_meta['lgx_flexbox_justify_content'] ?? 'flex-start';
$lgx_flexbox_wrap            = $lgx_generator_meta['lgx_flexbox_wrap'] ?? 'wrap';
$lgx_flexbox_direction       = $lgx_generator_meta['lgx_flexbox_direction'] ?? 'row';

/**
 * Grid settings (safe)
 */
$lgx_grid_column_gap = $lgx_generator_meta['lgx_grid_column_gap'] ?? '15px';
$lgx_grid_row_gap    = $lgx_generator_meta['lgx_grid_row_gap'] ?? '15px';

/**
 * Safe numeric values
 */
$lgx_large_desktop_item = ! empty($lgx_large_desktop_item) ? (int) $lgx_large_desktop_item : 1;
$lgx_desktop_item       = ! empty($lgx_desktop_item) ? (int) $lgx_desktop_item : 1;
$lgx_tablet_item        = ! empty($lgx_tablet_item) ? (int) $lgx_tablet_item : 1;
$lgx_mobile_item        = ! empty($lgx_mobile_item) ? (int) $lgx_mobile_item : 1;

/**
 * Safe division helper (avoid division by zero)
 */
function lgx_wcu_safe_div($a, $b)
{
    $b = (float) $b;
    return ($b > 0) ? (100 / $b) : 100;
}

/**
 * Build dynamic CSS
 */
$lgx_lsw_dynamic_style_grid  = '';

$selector = '#lgx_counter_up_app_' . (int) $lgx_app_id . ' .lgx_app_layout_flexbox .lgx_app_item_row';

/**
 * Flex container style
 */
$lgx_lsw_dynamic_style_grid .= $selector . '{
    -ms-flex-wrap: ' . esc_attr($lgx_flexbox_wrap) . ';
    flex-wrap: ' . esc_attr($lgx_flexbox_wrap) . ';
    gap: ' . esc_attr($lgx_flexbox_column_gap) . ' ' . esc_attr($lgx_flexbox_row_gap) . ';
    align-items: ' . esc_attr($lgx_flexbox_align_items) . ';
    justify-content: ' . esc_attr($lgx_flexbox_justify_content) . ';
    flex-direction: ' . esc_attr($lgx_flexbox_direction) . ';
}';

/**
 * Desktop default
 */
$lgx_lsw_dynamic_style_grid .= '#lgx_counter_up_app_' . (int) $lgx_app_id . ' .lgx_app_layout_flexbox .lgx_app_item {
    -ms-flex: 0 0 calc(' . lgx_wcu_safe_div(100, $lgx_large_desktop_item) . '% - ' . esc_attr($lgx_flexbox_row_gap) . ');
    flex: 0 0 calc(' . lgx_wcu_safe_div(100, $lgx_large_desktop_item) . '% - ' . esc_attr($lgx_flexbox_row_gap) . ');
    width: ' . lgx_wcu_safe_div(100, $lgx_large_desktop_item) . '%;
}';

/**
 * Mobile
 */
$lgx_lsw_dynamic_style_grid .= '@media (max-width: 767px) {
    #lgx_counter_up_app_' . (int) $lgx_app_id . ' .lgx_app_layout_flexbox .lgx_app_item {
        -ms-flex: 0 0 calc(' . lgx_wcu_safe_div(100, $lgx_mobile_item) . '% - ' . esc_attr($lgx_flexbox_row_gap) . ');
        flex: 0 0 calc(' . lgx_wcu_safe_div(100, $lgx_mobile_item) . '% - ' . esc_attr($lgx_flexbox_row_gap) . ');
        width: ' . lgx_wcu_safe_div(100, $lgx_mobile_item) . '%;
    }
}';

/**
 * Tablet
 */
$lgx_lsw_dynamic_style_grid .= '@media (min-width: 768px) {
    #lgx_counter_up_app_' . (int) $lgx_app_id . ' .lgx_app_layout_flexbox .lgx_app_item {
        -ms-flex: 0 0 calc(' . lgx_wcu_safe_div(100, $lgx_tablet_item) . '% - ' . esc_attr($lgx_flexbox_row_gap) . ');
        flex: 0 0 calc(' . lgx_wcu_safe_div(100, $lgx_tablet_item) . '% - ' . esc_attr($lgx_flexbox_row_gap) . ');
        width: ' . lgx_wcu_safe_div(100, $lgx_tablet_item) . '%;
    }
}';

/**
 * Desktop
 */
$lgx_lsw_dynamic_style_grid .= '@media (min-width: 992px) {
    #lgx_counter_up_app_' . (int) $lgx_app_id . ' .lgx_app_layout_flexbox .lgx_app_item {
        -ms-flex: 0 0 calc(' . lgx_wcu_safe_div(100, $lgx_desktop_item) . '% - ' . esc_attr($lgx_flexbox_row_gap) . ');
        flex: 0 0 calc(' . lgx_wcu_safe_div(100, $lgx_desktop_item) . '% - ' . esc_attr($lgx_flexbox_row_gap) . ');
        width: ' . lgx_wcu_safe_div(100, $lgx_desktop_item) . '%;
    }
}';

/**
 * Large Desktop
 */
$lgx_lsw_dynamic_style_grid .= '@media (min-width: 1200px) {
    #lgx_counter_up_app_' . (int) $lgx_app_id . ' .lgx_app_layout_flexbox .lgx_app_item {
        -ms-flex: 0 0 calc(' . lgx_wcu_safe_div(100, $lgx_large_desktop_item) . '% - ' . esc_attr($lgx_flexbox_row_gap) . ');
        flex: 0 0 calc(' . lgx_wcu_safe_div(100, $lgx_large_desktop_item) . '% - ' . esc_attr($lgx_flexbox_row_gap) . ');
        width: ' . lgx_wcu_safe_div(100, $lgx_large_desktop_item) . '%;
    }
}';

/**
 * Inject inline style
 */
wp_add_inline_style(
    'lgx-counter-up-style',
    $lgx_lsw_dynamic_style_grid
);

<?php

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Safe meta access
 */
$meta = $lgx_generator_meta;

/**
 * Basic settings (safe defaults)
 */
$lgx_item_single_height = $meta['lgx_item_single_height'] ?? '';
$lgx_item_single_property_height = $meta['lgx_item_single_property_height'] ?? 'height';

$lgx_item_icon_height = $meta['lgx_item_icon_height'] ?? '';
$lgx_item_icon_width  = $meta['lgx_item_icon_width'] ?? '';

$lgx_item_icon_property_height = $meta['lgx_item_icon_property_height'] ?? 'max-height';
$lgx_item_icon_property_width  = $meta['lgx_item_icon_property_width'] ?? 'max-width';

/**
 * Safe selector
 */
$selector = '#lgx_counter_up_app_' . (int) $lgx_app_id;

/**
 * Build CSS
 */
$css = '';

/**
 * Item inner height/width
 */
if (! empty($lgx_item_single_height) && (int) $lgx_item_single_height !== 0) {
    $css .= $selector . ' .lgx_app_item .lgx_app_item_inner {
        ' . esc_attr(trim($lgx_item_single_property_height)) . ':' . esc_attr($lgx_item_single_height) . ';
    }';
}

/**
 * Icon image sizing
 */
$css .= $selector . ' .lgx_app_item .lgx_app_item_img {
    ' . (! empty($lgx_item_icon_width) ? esc_attr(trim($lgx_item_icon_property_width)) . ':' . esc_attr($lgx_item_icon_width) . ';' : '') . '
    ' . (! empty($lgx_item_icon_height) ? esc_attr(trim($lgx_item_icon_property_height)) . ':' . esc_attr($lgx_item_icon_height) . ';' : '') . '
    object-fit: scale-down;
}';

/**
 * Inject inline style
 */
wp_add_inline_style(
    'lgx-counter-up-style',
    $css
);

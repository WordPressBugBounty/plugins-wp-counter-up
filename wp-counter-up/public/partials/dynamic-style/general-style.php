<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Safe meta access helper pattern
 */
$meta = $lgx_generator_meta;

/**
 * Style values (safe defaults)
 */
$lgx_item_brand_value_color       = $meta['lgx_item_value_color'] ?? '';
$lgx_item_brand_value_font_size   = $meta['lgx_item_value_font_size'] ?? '';
$lgx_item_brand_value_font_weight = $meta['lgx_item_value_font_weight'] ?? '';

$lgx_item_top_margin_value    = $meta['lgx_item_top_margin_value'] ?? '';
$lgx_item_bottom_margin_value = $meta['lgx_item_bottom_margin_value'] ?? '';

$lgx_item_brand_name_color     = $meta['lgx_item_title_color'] ?? '';
$lgx_item_brand_name_font_size = $meta['lgx_item_title_font_size'] ?? '';
$lgx_item_brand_name_font_weight = $meta['lgx_item_title_font_weight'] ?? '';

$lgx_item_desc_font_size = $meta['lgx_item_desc_font_size'] ?? '';
$lgx_item_desc_color     = $meta['lgx_item_desc_color'] ?? '';
$lgx_item_desc_font_weight = $meta['lgx_item_desc_font_weight'] ?? '';

$lgx_img_border_color_en    = $meta['lgx_img_border_color_en'] ?? 'no';
$lgx_img_border_color       = $meta['lgx_img_border_color'] ?? '';
$lgx_img_border_color_hover = $meta['lgx_img_border_color_hover'] ?? '';
$lgx_img_border_width       = $meta['lgx_img_border_width'] ?? '';
$lgx_img_border_radius      = $meta['lgx_img_border_radius'] ?? '';

$lgx_border_color_en         = $meta['lgx_border_color_en'] ?? 'no';
$lgx_item_border_color       = $meta['lgx_item_border_color'] ?? '';
$lgx_item_border_color_hover = $meta['lgx_item_border_color_hover'] ?? '';
$lgx_item_border_width       = $meta['lgx_item_border_width'] ?? '';
$lgx_item_border_radius      = $meta['lgx_item_border_radius'] ?? '';

$lgx_item_bg_color_en    = $meta['lgx_item_bg_color_en'] ?? 'no';
$lgx_item_bg_color       = $meta['lgx_item_bg_color'] ?? '';
$lgx_item_bg_color_hover = $meta['lgx_item_bg_color_hover'] ?? '';

$lgx_icon_bg_color_en    = $meta['lgx_icon_bg_color_en'] ?? 'no';
$lgx_icon_bg_color       = $meta['lgx_icon_bg_color'] ?? '';
$lgx_icon_bg_color_hover = $meta['lgx_icon_bg_color_hover'] ?? '';

$lgx_item_padding = $meta['lgx_item_padding'] ?? '';
$lgx_item_margin  = $meta['lgx_item_margin'] ?? '';

$lgx_item_top_margin_title    = $meta['lgx_item_top_margin_title'] ?? '5px';
$lgx_item_bottom_margin_title = $meta['lgx_item_bottom_margin_title'] ?? '';

$lgx_item_top_margin_desc    = $meta['lgx_item_top_margin_desc'] ?? '0px';
$lgx_item_bottom_margin_desc = $meta['lgx_item_bottom_margin_desc'] ?? '';

/**
 * Section settings (safe)
 */
$lgx_icon_padding              = $meta['lgx_icon_padding'] ?? '';
$lgx_value_width               = $meta['lgx_value_width'] ?? '';
$lgx_value_height              = $meta['lgx_value_height'] ?? '';

$lgx_value_border_color_en     = $meta['lgx_value_border_color_en'] ?? 'no';
$lgx_value_border_color        = $meta['lgx_value_border_color'] ?? '';
$lgx_value_border_color_hover  = $meta['lgx_value_border_color_hover'] ?? '';
$lgx_value_border_width        = $meta['lgx_value_border_width'] ?? '';
$lgx_value_border_radius       = $meta['lgx_value_border_radius'] ?? '';

/**
 * Section layout
 */
$section_width       = $lgx_section_width ?? '';
$section_bg_attach   = $lgx_section_bg_img_attachment ?? '';
$section_bg_size     = $lgx_section_bg_img_size ?? '';
$section_bg_color_en = $lgx_section_bg_color_en ?? 'no';
$section_bg_color    = $lgx_section_bg_color ?? '';
$section_top_margin  = $lgx_section_top_margin ?? '';
$section_bottom_margin = $lgx_section_bottom_margin ?? '';

/**
 * Build CSS safely
 */
$selector = '#lgx_counter_up_app_' . (int) $lgx_app_id;

$css = '';

/**
 * Section wrapper
 */
$css .= $selector . ' .lgx_counter_up{
    background-attachment:' . esc_attr( $section_bg_attach ) . ';
    background-size:' . esc_attr( $section_bg_size ) . ';
    width:' . esc_attr( $section_width ) . ';
}';

/**
 * Inner section
 */
$css .= $selector . ' .lgx_app_inner {
    ' . ( ( 'yes' === $section_bg_color_en ) ? 'background-color:' . esc_attr( $section_bg_color ) . ';' : '' ) . '
    margin:' . esc_attr( $section_top_margin ) . ' 0 ' . esc_attr( $section_bottom_margin ) . ';
}';

/**
 * Title
 */
$css .= $selector . ' .lgx_app_item .lgx_app_item_title {
    color:' . esc_attr( $lgx_item_brand_name_color ) . ';
    font-size:' . esc_attr( $lgx_item_brand_name_font_size ) . ';
    font-weight:' . esc_attr( $lgx_item_brand_name_font_weight ) . ';
    margin-top:' . esc_attr( $lgx_item_top_margin_title ) . ';
    margin-bottom:' . esc_attr( $lgx_item_bottom_margin_title ) . ';
}';

/**
 * Counter value
 */
$css .= $selector . ' .lgx_app_item .lgx_counter_value {
    color:' . esc_attr( $lgx_item_brand_value_color ) . ';
    font-size:' . esc_attr( $lgx_item_brand_value_font_size ) . ';
    font-weight:' . esc_attr( $lgx_item_brand_value_font_weight ) . ';
    margin-top:' . esc_attr( $lgx_item_top_margin_value ) . ';
    margin-bottom:' . esc_attr( $lgx_item_bottom_margin_value ) . ';
}';

/**
 * Description
 */
$css .= $selector . ' .lgx_app_item .lgx_app_item_desc {
    font-size:' . esc_attr( $lgx_item_desc_font_size ) . ';
    color:' . esc_attr( $lgx_item_desc_color ) . ';
    font-weight:' . esc_attr( $lgx_item_desc_font_weight ) . ';
    margin-top:' . esc_attr( $lgx_item_top_margin_desc ) . ';
    margin-bottom:' . esc_attr( $lgx_item_bottom_margin_desc ) . ';
}';

/**
 * Image figure
 */
$css .= $selector . ' .lgx_app_item .lgx_app_item_figure {
    padding:' . esc_attr( $lgx_icon_padding ) . ';
    ' . ( ( 'yes' === $lgx_img_border_color_en ) ? 'border:' . esc_attr( $lgx_img_border_width ) . ' solid ' . esc_attr( $lgx_img_border_color ) . ';' : '' ) . '
    ' . ( ( 'yes' === $lgx_img_border_color_en ) ? 'border-radius:' . esc_attr( $lgx_img_border_radius ) . ';' : '' ) . '
    ' . ( ( 'yes' === $lgx_icon_bg_color_en ) ? 'background-color:' . esc_attr( $lgx_icon_bg_color ) . ';' : '' ) . '
}';

/**
 * Hover image
 */
$css .= $selector . ' .lgx_app_item .lgx_app_item_inner:hover .lgx_app_item_figure {
    transition: background-color 0.5s ease;
    ' . ( ( 'yes' === $lgx_img_border_color_en ) ? 'border:' . esc_attr( $lgx_img_border_width ) . ' solid ' . esc_attr( $lgx_img_border_color_hover ) . ';' : '' ) . '
    ' . ( ( 'yes' === $lgx_icon_bg_color_en ) ? 'background-color:' . esc_attr( $lgx_icon_bg_color_hover ) . ';' : '' ) . '
}';

/**
 * Counter box
 */
$css .= $selector . ' .lgx_app_item .lgx_counter_value {
    width:' . esc_attr( $lgx_value_width ) . ';
    height:' . esc_attr( $lgx_value_height ) . ';
    ' . ( ( 'yes' === $lgx_value_border_color_en ) ? 'border:' . esc_attr( $lgx_value_border_width ) . ' solid ' . esc_attr( $lgx_value_border_color ) . ';' : '' ) . '
    ' . ( ( 'yes' === $lgx_value_border_color_en ) ? 'border-radius:' . esc_attr( $lgx_value_border_radius ) . ';' : '' ) . '
}';

/**
 * Hover value
 */
$css .= $selector . ' .lgx_app_item .lgx_app_item_inner:hover .lgx_counter_value {
    transition: background-color 0.5s ease;
    ' . ( ( 'yes' === $lgx_value_border_color_en ) ? 'border-color:' . esc_attr( $lgx_value_border_color_hover ) . ';' : '' ) . '
}';

/**
 * Item inner
 */
$css .= $selector . ' .lgx_app_item .lgx_app_item_inner {
    ' . ( ( 'yes' === $lgx_border_color_en ) ? 'border:' . esc_attr( $lgx_item_border_width ) . ' solid ' . esc_attr( $lgx_item_border_color ) . ';' : '' ) . '
    ' . ( ( 'yes' === $lgx_border_color_en ) ? 'border-radius:' . esc_attr( $lgx_item_border_radius ) . ';' : '' ) . '
    margin:' . esc_attr( $lgx_item_margin ) . ';
    padding:' . esc_attr( $lgx_item_padding ) . ';
    ' . ( ( 'yes' === $lgx_item_bg_color_en ) ? 'background-color:' . esc_attr( $lgx_item_bg_color ) . ';' : '' ) . '
}';

/**
 * Hover inner
 */
$css .= $selector . ' .lgx_app_item .lgx_app_item_inner:hover {
    ' . ( ( 'yes' === $lgx_border_color_en ) ? 'border-color:' . esc_attr( $lgx_item_border_color_hover ) . ';' : '' ) . '
    ' . ( ( 'yes' === $lgx_item_bg_color_en ) ? 'background-color:' . esc_attr( $lgx_item_bg_color_hover ) . ';' : '' ) . '
}';

/**
 * Inject inline style
 */
wp_add_inline_style(
    'lgx-counter-up-style',
    $css
);
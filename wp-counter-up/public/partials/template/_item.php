<?php
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Style
$lgx_item_hover_anim = isset( $lgx_generator_meta['lgx_item_hover_anim'] ) ? $lgx_generator_meta['lgx_item_hover_anim'] : '';

// Post data
$counter_post_id  = get_the_ID();
if ( ! $counter_post_id ) {
    return;
}

$lgx_counter_meta = get_post_meta( $counter_post_id, '_lgxmilestonemeta', true );

$counter_title  = get_the_title( $counter_post_id );
$counter_number = ! empty( $lgx_counter_meta['counter_number'] ) ? $lgx_counter_meta['counter_number'] : '';
$counter_desc   = ! empty( $lgx_counter_meta['counter_desc'] ) ? $lgx_counter_meta['counter_desc'] : '';

// Thumbnail
$thumb_url = '';
if ( has_post_thumbnail( $counter_post_id ) ) {
    $thumb_data = wp_get_attachment_image_src( get_post_thumbnail_id( $counter_post_id ), 'full' );
    $thumb_url  = ! empty( $thumb_data[0] ) ? $thumb_data[0] : '';
}

// Safe meta values
$hover_effect   = isset( $lgx_generator_meta['lgx_item_hover_effect'] ) ? $lgx_generator_meta['lgx_item_hover_effect'] : '';
$icon_enabled   = isset( $lgx_generator_meta['lgx_item_icon_en'] ) ? $lgx_generator_meta['lgx_item_icon_en'] : '';
$title_enabled  = isset( $lgx_generator_meta['lgx_item_title_en'] ) ? $lgx_generator_meta['lgx_item_title_en'] : '';
$desc_enabled   = isset( $lgx_generator_meta['lgx_item_desc_en'] ) ? $lgx_generator_meta['lgx_item_desc_en'] : '';
$delay          = isset( $lgx_generator_meta['lgx_counter_delay'] ) ? $lgx_generator_meta['lgx_counter_delay'] : '';
$duration       = isset( $lgx_generator_meta['lgx_counter_duration'] ) ? $lgx_generator_meta['lgx_counter_duration'] : '';


// HTML content
$lgx_icon_html = ( 'yes' === $icon_enabled && ! empty( $thumb_url ) )
    ? '<div class="lgx_app_item_figure lgx_img_hover_anim__' . esc_attr( $lgx_item_hover_anim ) . '">
            <img class="lgx_app_item_img" src="' . esc_url( $thumb_url ) . '" alt="' . esc_attr( $counter_title ) . '" />
       </div>'
    : '';

$lgx_number_html = ( ! empty( $counter_number ) )
    ? '<div class="lgx_counter_value_wrap">
            <span class="lgx_counter_value" data-item_delay="' . esc_attr( $delay ) . '" data-item_duration="' . esc_attr( $duration ) . '">' . esc_html( $counter_number ) . '</span>
       </div>'
    : '';

$lgx_title_html = ( 'yes' === $title_enabled )
    ? '<h4 class="lgx_app_item_title">' . esc_html( $counter_title ) . '</h4>'
    : '';

$lgx_desc_html = ( 'yes' === $desc_enabled )
    ? '<div class="lgx_app_item_desc">' . wp_kses_post( $counter_desc ) . '</div>'
    : '';


// Output
$lgx_counter_item_safe = '<div class="lgx_app_item lgx_app_hover_effect_' . esc_attr( $hover_effect ) . '">';
$lgx_counter_item_safe.= '<div class="lgx_app_item_inner">';

switch ( $lgx_layout_order ) {
    case 'i_n_t_d':
        $lgx_counter_item_safe.= $lgx_icon_html . $lgx_number_html . $lgx_title_html . $lgx_desc_html;
        break;

    case 'i_t_n_d':
        $lgx_counter_item_safe.= $lgx_icon_html . $lgx_title_html . $lgx_number_html . $lgx_desc_html;
        break;

    case 't_i_n_d':
        $lgx_counter_item_safe.= $lgx_title_html . $lgx_icon_html . $lgx_number_html . $lgx_desc_html;
        break;

    case 't_n_i_d':
        $lgx_counter_item_safe.= $lgx_title_html . $lgx_number_html . $lgx_icon_html . $lgx_desc_html;
        break;

    case 'n_i_t_d':
        $lgx_counter_item_safe.= $lgx_number_html . $lgx_icon_html . $lgx_title_html . $lgx_desc_html;
        break;

    case 'n_t_i_d':
        $lgx_counter_item_safe.= $lgx_number_html . $lgx_title_html . $lgx_icon_html . $lgx_desc_html;
        break;

    case 'd_n_i_t':
        $lgx_counter_item_safe.= $lgx_desc_html . $lgx_number_html . $lgx_icon_html . $lgx_title_html;
        break;

    case 'd_i_n_t':
        $lgx_counter_item_safe.= $lgx_desc_html . $lgx_icon_html . $lgx_number_html . $lgx_title_html;
        break;

    case 'd_n_t_i':
        $lgx_counter_item_safe.= $lgx_desc_html . $lgx_number_html . $lgx_title_html . $lgx_icon_html;
        break;

    case 'l_i_t_n_d':
        $lgx_counter_item_safe.= $lgx_icon_html . '<div class="lgx_item_info_wrap">' . $lgx_number_html . $lgx_title_html . $lgx_desc_html . '</div>';
        break;

    case 'r_i_t_n_d':
        $lgx_counter_item_safe.= $lgx_icon_html . '<div class="lgx_item_info_wrap">' . $lgx_number_html . $lgx_title_html . $lgx_desc_html . '</div>';
        break;

    default:
        $lgx_counter_item_safe.= $lgx_icon_html . $lgx_number_html . $lgx_title_html . $lgx_desc_html;
}

$lgx_counter_item_safe.= '</div>';
$lgx_counter_item_safe.= '</div>';

echo $lgx_counter_item_safe;
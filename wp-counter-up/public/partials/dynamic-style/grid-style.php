<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Safe meta access
 */
$lgx_grid_column_gap = $lgx_generator_meta['lgx_grid_column_gap'] ?? '15px';
$lgx_grid_row_gap    = $lgx_generator_meta['lgx_grid_row_gap'] ?? '15px';

/**
 * Ensure numeric safety (avoid invalid CSS)
 */
$lgx_large_desktop_item = ! empty( $lgx_large_desktop_item ) ? (int) $lgx_large_desktop_item : 1;
$lgx_desktop_item       = ! empty( $lgx_desktop_item ) ? (int) $lgx_desktop_item : 1;
$lgx_tablet_item        = ! empty( $lgx_tablet_item ) ? (int) $lgx_tablet_item : 1;
$lgx_mobile_item        = ! empty( $lgx_mobile_item ) ? (int) $lgx_mobile_item : 1;

/**
 * Safe selector
 */
$selector = '#lgx_counter_up_app_' . (int) $lgx_app_id . ' .lgx_app_layout_grid .lgx_app_item_row';

/**
 * Build CSS
 */
$css = '';

/**
 * Default (large desktop fallback)
 */
$css .= $selector . '{
    grid-column-gap:' . esc_attr( $lgx_grid_column_gap ) . ';
    grid-row-gap:' . esc_attr( $lgx_grid_row_gap ) . ';
    grid-template-columns: repeat(' . $lgx_large_desktop_item . ', 1fr);
}';

/**
 * Mobile
 */
$css .= '@media (max-width: 767px) {
    ' . $selector . '{
        grid-template-columns: repeat(' . $lgx_mobile_item . ', 1fr);
    }
}';

/**
 * Tablet
 */
$css .= '@media (min-width: 768px) {
    ' . $selector . '{
        grid-template-columns: repeat(' . $lgx_tablet_item . ', 1fr);
    }
}';

/**
 * Desktop
 */
$css .= '@media (min-width: 992px) {
    ' . $selector . '{
        grid-template-columns: repeat(' . $lgx_desktop_item . ', 1fr);
    }
}';

/**
 * Large Desktop
 */
$css .= '@media (min-width: 1200px) {
    ' . $selector . '{
        grid-template-columns: repeat(' . $lgx_large_desktop_item . ', 1fr);
    }
}';

/**
 * Inject inline style
 */
wp_add_inline_style(
    'lgx-counter-up-style',
    $css
);
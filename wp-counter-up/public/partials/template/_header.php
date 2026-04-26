
<?php
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Safe values
$lgx_brand_align     = isset( $lgx_generator_meta['lgx_header_align'] ) ? sanitize_html_class( $lgx_generator_meta['lgx_header_align'] ) : '';
$lgx_header_title    = isset( $lgx_generator_meta['lgx_header_title'] ) ? sanitize_text_field( $lgx_generator_meta['lgx_header_title'] ) : '';
$lgx_header_subtitle = isset( $lgx_generator_meta['lgx_header_subtitle'] ) ? sanitize_text_field( $lgx_generator_meta['lgx_header_subtitle'] ) : '';
?>

<div class="lgx_app_header lax_app_text_<?php echo esc_attr( $lgx_brand_align ); ?>">
    <?php
    if ( ! empty( $lgx_header_title ) ) {
        echo '<h2 class="lgx_app_header_title">' .  esc_html( $lgx_header_title ). '</h2>';
    }

    if ( ! empty( $lgx_header_subtitle ) ) {
        echo '<div class="lgx_app_header_subtitle">' .  esc_html( $lgx_header_subtitle ) . '</div>';
    }
    ?>
</div> <!--//.HEADER END-->
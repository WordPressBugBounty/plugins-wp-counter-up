<?php
if (! defined('ABSPATH')) {
    exit;
}
?>

<div id="lgx_counter_up_app_<?php echo esc_attr($lgx_app_id); ?>" class="lgx_counter_up_app">

    <?php
    if (isset($lgx_generator_meta['lgx_preloader_en']) && 'yes' === $lgx_generator_meta['lgx_preloader_en']) {

        $preloader_icon = ! empty($lgx_generator_meta['lgx_preloader_icon'])
            ? $lgx_generator_meta['lgx_preloader_icon']
            : $lgx_lsw_loading_icon;

        echo '<div id="lgx_lsw_preloader_' . esc_attr($lgx_app_id) . '" class="lgx_lsw_preloader">
                <img src="' . esc_url($preloader_icon) . '" alt="'. esc_html__( 'Loader Icon', 'wp-counter-up' ) .'" />
              </div>';
    }
    ?>

    <div class="lgx_counter_up lgx_counter_up_free">
        <div class="lgx_app_inner lgx_app_layout_<?php echo esc_attr($lgx_showcase_type); ?>">
            <div class="lgx_app_<?php echo esc_attr($lgx_generator_meta['lgx_section_container'] ?? ''); ?>">

                <?php
                if (isset($lgx_generator_meta['lgx_header_en']) && 'yes' === $lgx_generator_meta['lgx_header_en']) {
                    include plugin_dir_path(__FILE__) . '_header.php';
                }
                ?>

                <div id="lgx_app_content_wrap_<?php echo esc_attr( $lgx_app_id . wp_rand(100,999) ); ?>"
                    class="lgx_app_content_wrapper lgx_counter_content 
                     lgx_layout_order_<?php echo esc_attr($lgx_layout_order); ?> 
                     lgx_item_floating_<?php echo esc_attr($lgx_item_floating); ?> 
                     lgx_item_info_align_<?php echo esc_attr($lgx_generator_meta['lgx_item_info_align'] ?? ''); ?>">

                    <div class="lgx_app_item_row">
                        <?php

                        // Item limit
                        $lgx_item_limit = isset($lgx_generator_meta['lgx_item_limit']) ? (int) $lgx_generator_meta['lgx_item_limit'] : -1;
                        $lgx_item_limit = ($lgx_item_limit <= 0) ? -1 : $lgx_item_limit;

                        if (defined('LGX_WCU_WP_PLUGIN') && LGX_WCU_WP_PLUGIN !== 'wp-counter-up-pro') {
                            if ($lgx_item_limit === -1 || $lgx_item_limit >= 10) {
                                $lgx_item_limit = 10;
                            }
                        }

                        $lgx_from_category = $lgx_generator_meta['lgx_from_category'] ?? '';

                        $lgx_counter_up_args = array(
                            'post_type'      => array('lgx_counter'),
                            'post_status'    => array('publish'),
                            'order'          => isset($lgx_generator_meta['lgx_item_sort_order']) ? sanitize_text_field($lgx_generator_meta['lgx_item_sort_order']) : 'ASC',
                            'orderby'        => isset($lgx_generator_meta['lgx_item_sort_order_by']) ? sanitize_text_field($lgx_generator_meta['lgx_item_sort_order_by']) : 'date',
                            'posts_per_page' => $lgx_item_limit,
                        );

                        // Category filter
                        if (! empty($lgx_from_category) && $lgx_from_category !== 'all') {

                            $lgx_from_category_arr = array_map('intval', explode(',', trim($lgx_from_category)));

                            if (! empty($lgx_from_category_arr)) {
                                $lgx_counter_up_args['tax_query'] = array(
                                    array(
                                        'taxonomy' => 'lgxcountercat',
                                        'field'    => 'term_id',
                                        'terms'    => $lgx_from_category_arr,
                                    ),
                                );
                            }
                        }

                        // Query
                        $lgx_counter_up_loop = new WP_Query($lgx_counter_up_args);

                        if ($lgx_counter_up_loop->have_posts()) {

                            while ($lgx_counter_up_loop->have_posts()) :
                                $lgx_counter_up_loop->the_post();

                                include plugin_dir_path(__FILE__) . '_item.php';

                            endwhile;

                            wp_reset_postdata();
                        } else {

                            echo esc_html__('There are no counter item. Please add some counter Item', 'wp-counter-up');
                        }
                        ?>
                    </div><!--//.APP CONTENT INNER END-->

                </div><!-- //.CONTENT WRAP END-->

            </div><!--//.APP CONTAINER END-->
        </div><!--//.INNER END-->
    </div><!-- APP CONTAINER END -->

</div> <!--//.APP END New ->
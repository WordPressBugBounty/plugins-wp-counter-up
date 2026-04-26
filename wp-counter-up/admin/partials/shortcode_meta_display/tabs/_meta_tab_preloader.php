<?php
if (!defined('WPINC')) {
    die;
}


$this->meta_form->buy_pro(
    array(
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'link' => 'https://logichunt.com/product/wordpress-counter-up/',
    )
);


$this->meta_form->switch(
    array(
        'label' => __( 'Enable Preloader', 'wp-counter-up' ),
        'yes_label' => __( 'Enabled', 'wp-counter-up' ),
        'no_label' => __( 'Disabled', 'wp-counter-up' ),
        'desc' => __( 'The showcase will be invisible until the page load complete.', 'wp-counter-up' ),
        'name' => 'post_meta_lgx_counter_generator[lgx_preloader_en]',
        'id' => 'lgx_preloader_en',
        'default' => 'yes'
    )
);

$this->meta_form->upload(
    array(
        'label'   => __( 'Preloader Icon', 'wp-counter-up' ),
        'desc'    => __( 'Upload Background Icon for Preloader.', 'wp-counter-up' ),
        'name'    => 'post_meta_lgx_counter_generator[lgx_preloader_icon]',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'id'      => 'lgx_preloader_icon',
    )
);

$this->meta_form->color(
    array(
        'label'     => __( 'Preloader Background', 'wp-counter-up' ),
        'desc'      => __( 'Please select background color for Preloader.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_preloader_bg_color]',
        'id'        => 'lgx_preloader_bg_color',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => '#ffffff',
    )
);


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
        'yes_label' => __( 'Enabled', 'wp-counter-up' ),
        'no_label' => __( 'Disabled', 'wp-counter-up' ),
        'label'   => __( 'Section Header', 'wp-counter-up' ),
        'desc'    => __( 'Enable Header Section in your showcase.', 'wp-counter-up' ),
        'name'    => 'post_meta_lgx_counter_generator[lgx_header_en]',
        'id'      => 'lgx_header_en',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default' => 'no'
    )
);

$this->meta_form->select(
    array(
        'label'     => __( 'Header Alignment', 'wp-counter-up' ),
        'desc'      => __( 'Section Header Alignment.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_header_align]',
        'id'        => 'lgx_header_align',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => 'center',
        'options'   => array(
            'center' => __( 'Center', 'wp-counter-up' ),
            'left' => __( 'Left', 'wp-counter-up' ),
            'right' => __( 'Right', 'wp-counter-up' )
        )
    )
);

$this->meta_form->text(
    array(
        'label'     => __( 'Section Title', 'wp-counter-up' ),
        'desc'      => __( 'Add your section header title.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_header_title]',
        'id'        => 'lgx_header_title',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => ''
    )
);


$this->meta_form->textTypo(
    array(
        'label'     => __( 'Title Style', 'wp-counter-up' ),
        'desc'      => __( 'Set Typography for section header title.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_text_type_header_title]',
        'id'        => 'lgx_text_type_header_title',        

        // Color
        'label_color'     => __( 'Font Color', 'wp-counter-up' ),
        'name_color'      => 'post_meta_lgx_counter_generator[lgx_header_title_color]',
        'id_color'        => 'lgx_header_title_color',
        'default_color'   => '#2e2841cc',
        'status_size'    => LGX_WCU_PLUGIN_META_FIELD_PRO,

         // Size
        'label_size'     => __( 'Font Size', 'wp-counter-up' ),
        'name_size'      => 'post_meta_lgx_counter_generator[lgx_header_title_font_size]',
        'id_size'        => 'lgx_header_title_font_size',
        'default_size'   => '42px',
        'status_size'    => LGX_WCU_PLUGIN_META_FIELD_PRO,

        //Weight
        'label_weight'     => __( 'Font Weight', 'wp-counter-up' ),
        'name_weight'      => 'post_meta_lgx_counter_generator[lgx_header_title_font_weight]',
        'id_weight'        => 'lgx_header_title_font_weight',
        'default_weight'   => '500',
        'status_weight'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
    )
);


$this->meta_form->text(
    array(
        'label'     => __( 'Title Bottom Margin', 'wp-counter-up' ),
        'desc'      => __( 'Add Title Font Size.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_header_title_bottom_margin]',
        'id'        => 'lgx_header_title_bottom_margin',
        'status'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => '10px'
    )
);




$this->meta_form->text(
    array(
        'label'     => __( 'Sub Title', 'wp-counter-up' ),
        'desc'      => __( 'Add your section header Sub title.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_header_subtitle]',
        'id'        => 'lgx_header_subtitle',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => ''
    )
);

$this->meta_form->textTypo(
    array(
        'label'     => __( 'Sub Title Style', 'wp-counter-up' ),
        'desc'      => __( 'Set Typography for section header sub title.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_text_type_header_title]',
        'id'        => 'lgx_text_type_header_title',        

        // Color
        'label_color'     => __( 'Font Color', 'wp-counter-up' ),
        'name_color'      => 'post_meta_lgx_counter_generator[lgx_header_subtitle_color]',
        'id_color'        => 'lgx_header_subtitle_color',
        'default_color'   => '#888888',
        'status_size'    => LGX_WCU_PLUGIN_META_FIELD_PRO,

         // Size
        'label_size'     => __( 'Font Size', 'wp-counter-up' ),
        'name_size'      => 'post_meta_lgx_counter_generator[lgx_header_subtitle_font_size]',
        'id_size'        => 'lgx_header_subtitle_font_size',
        'default_size'   => '16px',
        'status_size'    => LGX_WCU_PLUGIN_META_FIELD_PRO,

        //Weight
        'label_weight'     => __( 'Font Weight', 'wp-counter-up' ),
        'name_weight'      => 'post_meta_lgx_counter_generator[lgx_header_subtitle_font_weight]',
        'id_weight'        => 'lgx_header_subtitle_font_weight',
        'default_weight'   => '400',
        'status_weight'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
    )
);
$this->meta_form->text(
    array(
        'label'     => __( 'Sub Title Bottom Margin', 'wp-counter-up' ),
        'desc'      => __( 'Add Sub Title Font Size.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_header_subtitle_bottom_margin]',
        'id'        => 'lgx_header_subtitle_bottom_margin',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => '45px'
    )
);


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

$this->meta_form->text(
    array(
        'label'     => __( 'Showcase Area Max Width', 'wp-counter-up' ),
        'desc'      => __( 'Add showcase area maximum width with unit. For example: 100% or 1160px', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_section_width]',
        'id'        => 'lgx_section_width',
        'default'   => '100%'
    )
);

$this->meta_form->select(
    array(
        'label'     => __( 'Showcase Container Type', 'wp-counter-up' ),
        'desc'      => __( 'Select Showcase Container Type.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_section_container]',
        'id'        => 'lgx_section_container',
        'default'   => 'container-fluid',
        'options'   => array(
            'container-fluid' => __( 'Container Fluid', 'wp-counter-up' ),
            'container' => __( 'Container', 'wp-counter-up' ),
        )
    )
);


$this->meta_form->switch(
    array(
        'yes_label' => __( 'Enabled', 'wp-counter-up' ),
        'no_label' => __( 'Disabled', 'wp-counter-up' ),
        'label'   => __( 'Background Image', 'wp-counter-up' ),
        'desc'    => __( 'Enable background image for showcase section.', 'wp-counter-up' ),
        'name'    => 'post_meta_lgx_counter_generator[lgx_section_bg_img_en]',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'id'      => 'lgx_section_bg_img_en',
        'default' => 'no'
    )
);


$this->meta_form->upload(
    array(
        'label'   => __( 'Upload Background Image', 'wp-counter-up' ),
        'desc'    => __( 'Upload Background Image for Slider section.', 'wp-counter-up' ),
        'name'    => 'post_meta_lgx_counter_generator[lgx_section_bg_img]',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'id'      => 'lgx_section_bg_img',
        //'default' => 'no'
    )
);


$this->meta_form->select(
    array(
        'label'     => __( 'Background Attachment Type', 'wp-counter-up' ),
        'desc'      => __( 'Select Background Attachment Type.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_section_bg_img_attachment]',
        'id'        => 'lgx_section_bg_img_attachment',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => 'initial',
        'options'   => array(
            'initial' => __( 'Initial', 'wp-counter-up' ),
            'fixed' => __( 'Fixed', 'wp-counter-up' )
        )
    )
);

$this->meta_form->select(
    array(
        'label'     => __( 'Background Size Type', 'wp-counter-up' ),
        'desc'      => __( 'Set Background Size Type for background image.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_section_bg_img_size]',
        'id'        => 'lgx_section_bg_img_size',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => 'cover',
        'options'   => array(
            'cover' => __( 'Cover', 'wp-counter-up' ),
            'contain' => __( 'Contain', 'wp-counter-up' ),
            'auto' => __( 'Auto', 'wp-counter-up' )
        )
    )
);

$this->meta_form->switch(
    array(
        'label'   => __( 'Background/ Overlay  Color', 'wp-counter-up' ),
        'yes_label' => __( 'Enabled', 'wp-counter-up' ),
        'no_label' => __( 'Disabled', 'wp-counter-up' ),
        'desc'    => __( 'Enable background or image Overlay Color for showcase section.', 'wp-counter-up' ),
        'name'    => 'post_meta_lgx_counter_generator[lgx_section_bg_color_en]',
        'id'      => 'lgx_section_bg_color_en',
        'default' => 'no'
    )
);


$this->meta_form->color(
    array(
        'label'   => __( 'Background Color', 'wp-counter-up' ),
        'desc'    => __( 'Choose background/ overlay Color for showcase section.', 'wp-counter-up' ),
        'name'    => 'post_meta_lgx_counter_generator[lgx_section_bg_color]',
        'id'      => 'lgx_section_bg_color',
        'default' => '#b56969'
    )
);


/********************************************************************************/
$this->meta_form->header_spacer(
    array(
        'label'     => __( 'Section Margin & Padding Settings', 'wp-counter-up' ),
    )
);
/********************************************************************************/

$this->meta_form->buy_pro(
    array(
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'link' => 'https://logichunt.com/product/wordpress-logo-slider/',
    )
);

$this->meta_form->textMulti(
    array(
        'label'     => __( 'Section Margin', 'wp-counter-up' ),
        'desc'      => __( 'Add showcase section top margin. Please add value with your desired unit. For example : 15px or, 15rem.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_text_type_sec_margin]',
        'id'        => 'lgx_text_type_sec_margin',

        'label_1'     => __( 'Top', 'wp-counter-up' ),
        'name_1'      => 'post_meta_lgx_counter_generator[lgx_section_top_margin]',
        'id_1'        => 'lgx_section_top_margin',
        'default_1'   => '0px',

        'label_2'     => __( 'Bottom', 'wp-counter-up' ),
        'name_2'      => 'post_meta_lgx_counter_generator[lgx_section_bottom_margin]',
        'id_2'        => 'lgx_section_bottom_margin',
        'default_2'   => '0px'    
    )
);


$this->meta_form->textMulti(
    array(
        'label'     => __( 'Section Padding', 'wp-counter-up' ),
        'desc'      => __( 'Add showcase section padding. Please add value with your desired unit. For example : 15px or, 15rem.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_text_type_sec_margin]',
        'id'        => 'lgx_text_type_sec_margin',

        'label_1'     => __( 'Top', 'wp-counter-up' ),
        'name_1'      => 'post_meta_lgx_counter_generator[lgx_section_top_padding]',
        'id_1'        => 'lgx_section_top_padding',
        'status_1'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_1'   => '0px',

        'label_2'     => __( 'Bottom', 'wp-counter-up' ),
        'name_2'      => 'post_meta_lgx_counter_generator[lgx_section_bottom_padding]',
        'id_2'        => 'lgx_section_bottom_padding',
        'status_2'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_2'   => '0px',

        'label_3'     => __( 'Left', 'wp-counter-up' ),
        'name_3'      => 'post_meta_lgx_counter_generator[lgx_section_left_padding]',
        'id_3'        => 'lgx_section_left_padding',
        'status_3'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_3'   => '0px',

        'label_4'     => __( 'Right', 'wp-counter-up' ),
        'name_4'      => 'post_meta_lgx_counter_generator[lgx_section_right_padding]',
        'id_4'        => 'lgx_section_right_padding',
        'status_4'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_4'   => '0px',
        
        
    )
);
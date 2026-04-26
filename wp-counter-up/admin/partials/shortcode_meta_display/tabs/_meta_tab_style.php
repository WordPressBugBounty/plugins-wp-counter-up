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


$this->meta_form->select(
    array(
        'label'     => __( 'Item  Style', 'wp-counter-up' ),
        'desc'      => __( 'Select style effect for showcase item', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_item_hover_effect]',
        'id'        => 'lgx_item_hover_effect',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => 'none',
        'options'   => array(
            'none' => __( 'None', 'wp-counter-up' ),
            'gray_hover' => __( 'Grayscale On Hover', 'wp-counter-up' ),
            'gray_remove' => __( 'Grayscale Remove On Hover', 'wp-counter-up' ),
            'gray_always' => __( 'Grayscale Always', 'wp-counter-up' ),
            'box_shadow' => __( 'Hover Box Shadow', 'wp-counter-up' ),
            'box_shadow_always' => __( 'Box Shadow Always', 'wp-counter-up' ),
            'box_shadow_always2' => __( 'Box Shadow Always 2', 'wp-counter-up' )
        )
    )
);


$this->meta_form->select(
    array(
        'label'     => __( 'Hover Animation', 'wp-counter-up' ),
        'desc'      => __( 'Select hover animation for showcase logo image.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_item_hover_anim]',
        'status'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'id'        => 'lgx_item_hover_anim',
        'default'   => 'default',
        'options'   => array(
            'default'       => __( 'Default', 'wp-counter-up' ),
            'none'          => __( 'None', 'wp-counter-up' ),
            'scaleup'       => __( 'Scale Up', 'wp-counter-up' ),
            'bounce'        => __( 'Bounce', 'wp-counter-up' ),
            'flash'         => __( 'Flash', 'wp-counter-up' ),
            'pulse'         => __( 'Pulse', 'wp-counter-up' ),
            'rubberBand'    => __( 'Rubber Band', 'wp-counter-up' ),
            'shakeX'        => __( 'ShakeX', 'wp-counter-up' ),
            'shakeY'        => __( 'ShakeY', 'wp-counter-up' ),
            'headShake'     => __( 'Head Shake', 'wp-counter-up' ),
            'swing'         => __( 'Swing', 'wp-counter-up' ),
            'tada'          => __( 'Tada', 'wp-counter-up' ),
            'wobble'        => __( 'Wobble', 'wp-counter-up' ),
            'jello'         => __( 'Jello', 'wp-counter-up' ),
            'heartBeat'     => __( 'Heart Beat', 'wp-counter-up' ),
            'backInDown'    => __( 'Back In Down', 'wp-counter-up' ),
            'backInLeft'    => __( 'Back In Left', 'wp-counter-up' ),
            'backInRight'   => __( 'Back In Right', 'wp-counter-up' ),
            'backInUp'      => __( 'Back In Up ', 'wp-counter-up' ),
            'bounceIn'      => __( 'Bounce In ', 'wp-counter-up' ),
            'bounceInDown'  => __( 'Bounce In Down ', 'wp-counter-up' ),
            'bounceInLeft'  => __( 'Bounce In Left ', 'wp-counter-up' ),
            'bounceInRight' => __( 'Bounce In Right ', 'wp-counter-up' ),
            'bounceInUp'    => __( 'Bounce In Up ', 'wp-counter-up' ),
            'fadeIn'        => __( 'Fade In ', 'wp-counter-up' ),
            'fadeInDown'    => __( 'Fade In Down ', 'wp-counter-up' ),
            'fadeInDownBig' => __( 'Fade In Down Big ', 'wp-counter-up' ),
            'fadeInLeft'    => __( 'Fade In Left ', 'wp-counter-up' ),
            'fadeInLeftBig' => __( 'Fade In Left Big ', 'wp-counter-up' ),
            'fadeInRight'   => __( 'Fade In Right ', 'wp-counter-up' ),
            'fadeInRightBig'=> __( 'Fade In Right Big ', 'wp-counter-up' ),
            'fadeInUp'      => __( 'Fade In Up ', 'wp-counter-up' ),
            'fadeInUpBig'   => __( 'Fade In Up Big ', 'wp-counter-up' ),
            'fadeInTopLeft' => __( 'Fade In Top Left ', 'wp-counter-up' ),
            'fadeInTopRight'=> __( 'Fade In Top Right ', 'wp-counter-up' ),
            'fadeInBottomLeft'  => __( 'Fade In Bottom Left ', 'wp-counter-up' ),
            'fadeInBottomRight' => __( 'Fade In Bottom Right ', 'wp-counter-up' ),
            'flip'              => __( 'Flip', 'wp-counter-up' ),
            'flipInX'           => __( 'Flip InX', 'wp-counter-up' ),
            'lightSpeedInRight' => __( 'Light Speed In Right', 'wp-counter-up' ),
            'lightSpeedInLeft'  => __( 'Light Speed In Left', 'wp-counter-up' ),
            'rotateIn'          => __( 'Rotate In', 'wp-counter-up' ),
            'rotateInDownLeft'  => __( 'Rotate In Down Left', 'wp-counter-up' ),
            'rotateInDownRight' => __( 'Rotate In Down Right', 'wp-counter-up' ),
            'rotateInUpLeft'    => __( 'Rotate In Up Left', 'wp-counter-up' ),
            'rotateInUpRight'   => __( 'Rotate In Up Right', 'wp-counter-up' ),
            'hinge'             => __( 'Hinge', 'wp-counter-up' ),
            'jackInTheBox'      => __( 'Jack In TheBox', 'wp-counter-up' ),
            'rollIn'            => __( 'Roll In', 'wp-counter-up' ),
            'zoomIn'            => __( 'Zoom In', 'wp-counter-up' ),
            'zoomInDown'        => __( 'Zoom In Down', 'wp-counter-up' ),
            'zoomInLeft'        => __( 'Zoom In Left', 'wp-counter-up' ),
            'zoomInRight'       => __( 'Zoom In Right', 'wp-counter-up' ),
            'zoomInUp'          => __( 'Zoom In Up', 'wp-counter-up' ),
            'slideInDown'       => __( 'Slide In Down', 'wp-counter-up' ),
            'slideInLeft'       => __( 'Slide In Left', 'wp-counter-up' ),
            'slideInRight'      => __( 'Slide In Right', 'wp-counter-up' ),
            'slideInUp'         => __( 'Slide In Up', 'wp-counter-up' ),
        )
    )
);

$this->meta_form->select(
    array(
        'label'     => __( 'Floating Style', 'wp-counter-up' ),
        'desc'      => __( 'Select hover effect for showcase item', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_item_floating]',
        'id'        => 'lgx_item_floating',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => 'none',
        'options'   => array(
            'none' => __( 'None', 'wp-counter-up' ),    
            'sm' => __( 'Small', 'wp-counter-up' ),
            'lg' => __( 'Large', 'wp-counter-up' ),
        )
    )
);

/********************************************************************************/
$this->meta_form->header_spacer(
    array(
        'label'     => __( 'Item Title & Description Settings', 'wp-counter-up' ),
    )
);
/********************************************************************************/

$this->meta_form->buy_pro(
    array(
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'link' => 'https://logichunt.com/product/wordpress-logo-slider/',
    )
);


$this->meta_form->switch(
    array(
        'label' => __( 'Enable Item Title', 'wp-counter-up' ),
        'desc' => __( 'Show Title in your showcase.', 'wp-counter-up' ),
        'yes_label' => __( 'Show', 'wp-counter-up' ),
        'no_label' => __( 'Hide', 'wp-counter-up' ),
        'name' => 'post_meta_lgx_counter_generator[lgx_item_title_en]',
        'id' => 'lgx_item_title_en',
        'default' => 'yes'

    )
);


$this->meta_form->textTypo(
    array(
        'label'     => __( 'Item Title', 'wp-counter-up' ),
        'desc'      => __( 'Set Typography for Item Title.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_text_type_item_title]',
        'id'        => 'lgx_text_type_item_title',
        

        // Color
        'label_color'     => __( 'Font Color', 'wp-counter-up' ),
        'name_color'      => 'post_meta_lgx_counter_generator[lgx_item_title_color]',
        'id_color'        => 'lgx_item_title_color',
        'default_color'   => '#111111',

         // Size
        'label_size'     => __( 'Font Size', 'wp-counter-up' ),
        'name_size'      => 'post_meta_lgx_counter_generator[lgx_item_title_font_size]',
        'id_size'        => 'lgx_item_title_font_size',
        'default_size'   => '18px',
        'status_size'    => LGX_WCU_PLUGIN_META_FIELD_PRO,

        //Weight
        'label_weight'     => __( 'Font Weight', 'wp-counter-up' ),
        'name_weight'      => 'post_meta_lgx_counter_generator[lgx_item_title_font_weight]',
        'id_weight'        => 'lgx_item_title_font_weight',
        'default_weight'   => '600',
        'status_weight'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
    )
);



$this->meta_form->textMulti(
    array(
        'label'     => __( 'Title Margin', 'wp-counter-up' ),
        'desc'      => __( 'Set top & bottom margin for item title.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_text_type_item_title]',
        'id'        => 'lgx_text_type_item_title',

        'label_1'     => __( 'Top', 'wp-counter-up' ),
        'name_1'      => 'post_meta_lgx_counter_generator[lgx_item_top_margin_title]',
        'id_1'        => 'lgx_item_top_margin_title',
        'status_1'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_1'   => '5px',

        'label_2'     => __( 'Bottom', 'wp-counter-up' ),
        'name_2'      => 'post_meta_lgx_counter_generator[lgx_item_bottom_margin_title]',
        'id_2'        => 'lgx_item_bottom_margin_title',
        'status_2'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_2'   => '5px'    
    )
);



$this->meta_form->switch(
    array(
        'label' => __( 'Enable Description', 'wp-counter-up' ),
        'yes_label' => __( 'Show', 'wp-counter-up' ),
        'no_label' => __( 'Hide', 'wp-counter-up' ),
        'desc' => __( 'Show Description in your showcase.', 'wp-counter-up' ),
        'name' => 'post_meta_lgx_counter_generator[lgx_item_desc_en]',
        'id' => 'lgx_item_desc_en',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default' => 'no'
    )
);


$this->meta_form->textTypo(
    array(
        'label'     => __( 'Item Description', 'wp-counter-up' ),
        'desc'      => __( 'Set Typography for Item Title.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_text_type_item_desc]',
        'id'        => 'lgx_text_type_item_desc',
        

        // Color
        'label_color'     => __( 'Font Color', 'wp-counter-up' ),
        'name_color'      => 'post_meta_lgx_counter_generator[lgx_item_desc_color]',
        'id_color'        => 'lgx_item_desc_color',
        'default_color'   => '#555555',

         // Size
        'label_size'     => __( 'Font Size', 'wp-counter-up' ),
        'name_size'      => 'post_meta_lgx_counter_generator[lgx_item_desc_font_size]',
        'id_size'        => 'lgx_item_desc_font_size',
        'default_size'   => '14px',
        'status_size'    => LGX_WCU_PLUGIN_META_FIELD_PRO,

        //Weight
        'label_weight'     => __( 'Font Weight', 'wp-counter-up' ),
        'name_weight'      => 'post_meta_lgx_counter_generator[lgx_item_desc_font_weight]',
        'id_weight'        => 'lgx_item_desc_font_weight',
        'default_weight'   => '400',
        'status_weight'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
    )
);



$this->meta_form->textMulti(
    array(
        'label'     => __( 'Item Description Margin', 'wp-counter-up' ),
        'desc'      => __( 'Set top & bottom margin for item Description.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_multi_text_desc_margin]',
        'id'        => 'lgx_multi_text_desc_margin',

        'label_1'     => __( 'Top Margin', 'wp-counter-up' ),
        'name_1'      => 'post_meta_lgx_counter_generator[lgx_item_top_margin_desc]',
        'id_1'        => 'lgx_item_top_margin_desc',
        'status_1'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_1'   => '0px',

        'label_2'     => __( 'Bottom Margin', 'wp-counter-up' ),
        'name_2'      => 'post_meta_lgx_counter_generator[lgx_item_bottom_margin_desc]',
        'id_2'        => 'lgx_item_bottom_margin_desc',
        'status_2'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_2'   => '0px'    
    )
);

/********************************************************************************/
$this->meta_form->header_spacer(
    array(
        'label'     => __( 'Counter Value Settings', 'wp-counter-up' ),
    )
);
/********************************************************************************/



$this->meta_form->textTypo(
    array(
        'label'     => __( 'Counter Value', 'wp-counter-up' ),
        'desc'      => __( 'Set Typography for Item Counter Value.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_text_type_item_value]',
        'id'        => 'lgx_text_type_item_value',
        

        // Color
        'label_color'     => __( 'Font Color', 'wp-counter-up' ),
        'name_color'      => 'post_meta_lgx_counter_generator[lgx_item_value_color]',
        'id_color'        => 'lgx_item_value_color',
        'default_color'   => '#111111',

         // Size
        'label_size'     => __( 'Font Size', 'wp-counter-up' ),
        'name_size'      => 'post_meta_lgx_counter_generator[lgx_item_value_font_size]',
        'id_size'        => 'lgx_item_value_font_size',
        'default_size'   => '16px',
        'status_size'    => LGX_WCU_PLUGIN_META_FIELD_PRO,

        //Weight
        'label_weight'     => __( 'Font Weight', 'wp-counter-up' ),
        'name_weight'      => 'post_meta_lgx_counter_generator[lgx_item_value_font_weight]',
        'id_weight'        => 'lgx_item_value_font_weight',
        'default_weight'   => '600',
        'status_weight'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
    )
);

$this->meta_form->textMulti(
    array(
        'label'     => __( 'Counter Value Margin', 'wp-counter-up' ),
        'desc'      => __( 'Set top & bottom margin for item counter Value.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_text_type_item_value_margin]',
        'id'        => 'lgx_text_type_item_value_margin',

        'label_1'     => __( 'Top', 'wp-counter-up' ),
        'name_1'      => 'post_meta_lgx_counter_generator[lgx_item_top_margin_value]',
        'id_1'        => 'lgx_item_top_margin_value',
        'status_1'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_1'   => '0px',

        'label_2'     => __( 'Bottom', 'wp-counter-up' ),
        'name_2'      => 'post_meta_lgx_counter_generator[lgx_item_bottom_margin_value]',
        'id_2'        => 'lgx_item_bottom_margin_value',
        'status_2'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_2'   => '0px'    
    )
);

$this->meta_form->textMulti(
    array(
        'label'     => __( 'Counter Value Dimension', 'wp-counter-up' ),
        'desc'      => __( 'Set top & bottom margin for item counter Value. <br> <span style="color: #e31919">Note: If you enable border, this dimension  will be mandatory.</span>', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_text_type_item_value_dimension]',
        'id'        => 'dimension',

        'label_1'     => __( 'Width', 'wp-counter-up' ),
        'name_1'      => 'post_meta_lgx_counter_generator[lgx_value_width]',
        'id_1'        => 'lgx_value_width',
        'status_1'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_1'   => 'auto',

        'label_2'     => __( 'Height', 'wp-counter-up' ),
        'name_2'      => 'post_meta_lgx_counter_generator[lgx_value_height]',
        'id_2'        => 'lgx_value_height',
        'status_2'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_2'   => 'auto'    
    )
);



$this->meta_form->switch(
    array(
        'yes_label' => __( 'Enabled', 'wp-counter-up' ),
        'no_label' => __( 'Disabled', 'wp-counter-up' ),
        'label'     => __( 'Counter Value Border', 'wp-counter-up' ),
        'desc'      => __( 'Enable Border for Counter Value.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_value_border_color_en]',
        'id'        => 'lgx_value_border_color_en',
        'default'   => 'no'
    )
);

$this->meta_form->borderTypo(
    array(
        'label'     => __( 'Counter Value Border', 'wp-counter-up' ),
        'desc'      => __( 'Choose border style for icon image.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_value_border_color_group]',
        'id'        => 'lgx_value_border_color_group',

        'label_color'     => __( 'Color', 'wp-counter-up' ),
        'name_color'      => 'post_meta_lgx_counter_generator[lgx_value_border_color]',
        'id_color'        => 'lgx_value_border_color',
        'default_color'   => '#F9f9f9',

        'label_width'     => __( 'Width', 'wp-counter-up' ),
        'name_width'      => 'post_meta_lgx_counter_generator[lgx_value_border_width]',
        'id_width'        => 'lgx_value_border_width',
        'status_width'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_width'   => '1px',

        'label_radius'     => __( 'Radius', 'wp-counter-up' ),
        'desc_radius'      => __( 'Set Border Radius for showcase logo Image.', 'wp-counter-up' ),
        'name_radius'      => 'post_meta_lgx_counter_generator[lgx_value_border_radius]',
        'id_radius'        => 'lgx_value_border_radius',
        'status_radius'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_radius'   => '100px',

        'label_hColor'     => __( 'Hover Color', 'wp-counter-up' ),
        'name_hColor'      => 'post_meta_lgx_counter_generator[lgx_value_border_color_hover]',
        'id_hColor'        => 'lgx_value_border_color_hover',
        'status_hColor'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_hColor'   => '#F9f9f9',
    )
);

/********************************************************************************/
$this->meta_form->header_spacer(
    array(
        'label'     => __( 'Icon Image Settings', 'wp-counter-up' ),
    )
);
/********************************************************************************/

$this->meta_form->switch(
    array(
        'label' => __( 'Enable Icon', 'wp-counter-up' ),
        'yes_label' => __( 'Show', 'wp-counter-up' ),
        'no_label' => __( 'Hide', 'wp-counter-up' ),
        'desc' => __( 'Show item icon in your showcase.', 'wp-counter-up' ),
        'name' => 'post_meta_lgx_counter_generator[lgx_item_icon_en]',
        'id' => 'lgx_item_icon_en',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default' => 'yes'
    )
);

$this->meta_form->text(
    array(
        'label'     => __( 'Icon Padding', 'wp-counter-up' ),
        'desc'      => __( 'Add padding of the icon image. Default: 0px . You can add your suitable unit. E.g. 10px or 1rem.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_icon_padding]',
        'id'        => 'lgx_icon_padding',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => '0px'
    )
);



$this->meta_form->switch(
    array(
        'label'     => __( 'Icon Background Color', 'wp-counter-up' ),
        'yes_label' => __( 'Enabled', 'wp-counter-up' ),
        'no_label' => __( 'Disabled', 'wp-counter-up' ),
        'desc'      => __( 'Enable Background Color for all icon image.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_icon_bg_color_en]',
        'id'        => 'lgx_icon_bg_color_en',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => 'no'
    )
);


$this->meta_form->bgColorTypo(
    array(
        'label'     => __( 'Icon Image Background', 'wp-counter-up' ),
        'desc'      => __( 'Please select item background color.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_icon_bg_typo]',
        'id'        => 'lgx_icon_bg_typo',

        'label_color'     => __( 'BG Color', 'wp-counter-up' ),
        'name_color'      => 'post_meta_lgx_counter_generator[lgx_icon_bg_color]',
        'id_color'        => 'lgx_icon_bg_color',
        'status_color'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_color'   => '#f1f1f1',

        'label_hColor'     => __( 'Hover BG Color', 'wp-counter-up' ),
        'name_hColor'      => 'post_meta_lgx_counter_generator[lgx_icon_bg_color_hover]',
        'id_hColor'        => 'lgx_icon_bg_color_hover',
        'status_hColor'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_hColor'   => '#f1f1f1',

    )
);


$this->meta_form->switch(
    array(
        'yes_label' => __( 'Enabled', 'wp-counter-up' ),
        'no_label' => __( 'Disabled', 'wp-counter-up' ),
        'label'     => __( 'Icon Border', 'wp-counter-up' ),
        'desc'      => __( 'Enable Border for all Icon Image.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_img_border_color_en]',
        'id'        => 'lgx_img_border_color_en',
        'default'   => 'no'
    )
);

$this->meta_form->borderTypo(
    array(
        'label'     => __( 'Icon Border', 'wp-counter-up' ),
        'desc'      => __( 'Choose border style for icon image.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_img_border_color_group]',
        'id'        => 'lgx_img_border_color_group',

        'label_color'     => __( 'Color', 'wp-counter-up' ),
        'name_color'      => 'post_meta_lgx_counter_generator[lgx_img_border_color]',
        'id_color'        => 'lgx_img_border_color',
        'default_color'   => '#FF5151',

        'label_width'     => __( 'Width', 'wp-counter-up' ),
        'name_width'      => 'post_meta_lgx_counter_generator[lgx_img_border_width]',
        'id_width'        => 'lgx_img_border_width',
        'status_width'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_width'   => '1px',

        'label_radius'     => __( 'Radius', 'wp-counter-up' ),
        'desc_radius'      => __( 'Set Border Radius for showcase logo Image.', 'wp-counter-up' ),
        'name_radius'      => 'post_meta_lgx_counter_generator[lgx_img_border_radius]',
        'id_radius'        => 'lgx_img_border_radius',
        'status_radius'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_radius'   => '4px',

        'label_hColor'     => __( 'Hover Color', 'wp-counter-up' ),
        'name_hColor'      => 'post_meta_lgx_counter_generator[lgx_img_border_color_hover]',
        'id_hColor'        => 'lgx_img_border_color_hover',
        'status_hColor'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_hColor'   => '#FF9B6A',
    )
);



$this->meta_form->group2SelectText(
    array(
        'label'       => __( 'Icon Height', 'wp-counter-up' ),
        'desc'        => __( 'Set Height of the icon image. Default: 100% . You can add your desired height with suitable unit. E.g. 100px or 10rem.', 'wp-counter-up' ),
        'id'          => 'lgx_item_icon_dimension_height',
        'name'        => 'post_meta_lgx_counter_generator[lgx_item_icon_dimension_height]',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,

        'label_select' => 'Properties',
        'name_select' => 'post_meta_lgx_counter_generator[lgx_item_icon_property_height]',
        'id_select'   => 'lgx_item_icon_property_height',
        'default_select'   => 'max-height',
        'options_select'   => array(
            'max-height' => __( 'Max Height', 'wp-counter-up' ),
            'height'   => __( 'Height', 'wp-counter-up' ),
            'min-height' => __( 'Min Height', 'wp-counter-up' )
        ),

        'label_text' => 'Value',
        'name_text'  => 'post_meta_lgx_counter_generator[lgx_item_icon_height]',
        'id_text'    => 'lgx_item_icon_height',
        'default_text' => 'auto'
    )
);

$this->meta_form->group2SelectText(
    array(
        'label'       => __( 'Icon Width', 'wp-counter-up' ),
        'desc'        => __( 'Set Width of the icon image. Default: 100% . You can add your desired Width with suitable unit. E.g. 100px or 10rem.', 'wp-counter-up' ),
        'id'          => 'lgx_item_icon_dimension_width',
        'name'        => 'post_meta_lgx_counter_generator[lgx_item_icon_dimension_width]',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,

        'label_select' => 'Properties',
        'name_select' => 'post_meta_lgx_counter_generator[lgx_item_icon_property_width]',
        'id_select'   => 'lgx_item_icon_property_width',
        'default_select'   => 'max-width',
        'options_select'   => array(
            'max-width' => __( 'Max Width', 'wp-counter-up' ),
            'width'   => __( 'Width', 'wp-counter-up' ),
            'min-width' => __( 'Min Width', 'wp-counter-up' )
        ),

        'label_text' => 'Value',
        'name_text'  => 'post_meta_lgx_counter_generator[lgx_item_icon_width]',
        'id_text'    => 'lgx_item_icon_width',
        'default_text' => '100%'
    )
);


/********************************************************************************/
$this->meta_form->header_spacer(
    array(
        'label'     => __( 'Single Item Settings', 'wp-counter-up' ),
    )
);
/********************************************************************************/
$this->meta_form->buy_pro(
    array(
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'link' => 'https://logichunt.com/product/wordpress-counter-up/',
    )
);

$this->meta_form->select(
    array(
        'label'     => __( 'Item Info Align', 'wp-counter-up' ),
        'desc'      => __( 'Set Item Title and description Alignment.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_item_info_align]',
        'id'        => 'lgx_item_info_align',
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
        'label'     => __( 'Item Margin', 'wp-counter-up' ),
        'desc'      => __( 'Set single item margin with suitable unit. Also, you can use the shorthand margin property.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_item_margin]',
        'id'        => 'lgx_item_margin',
        'default'   => '0px'
    )
);


$this->meta_form->text(
    array(
        'label'     => __( 'Item padding', 'wp-counter-up' ),
        'desc'      => __( 'Set single item padding with suitable unit. Also, you can use the shorthand padding property.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_item_padding]',
        'id'        => 'lgx_item_padding',
        'status'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => '0px'
    )
);


$this->meta_form->switch(
    array(
        'label'     => __( 'Item Border', 'wp-counter-up' ),
        'yes_label' => __( 'Enabled', 'wp-counter-up' ),
        'no_label' => __( 'Disabled', 'wp-counter-up' ),
        'desc'      => __( 'Enable Border for all item.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_border_color_en]',
        'id'        => 'lgx_border_color_en',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => 'no'
    )
);


$this->meta_form->borderTypo(
    array(
        'label'     => __( 'Item Border', 'wp-counter-up' ),
        'desc'      => __( 'Choose border style for icon image.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_item_border_color_group]',
        'id'        => 'lgx_item_border_color_group',
        

        'label_color'     => __( 'Color', 'wp-counter-up' ),
        'name_color'      => 'post_meta_lgx_counter_generator[lgx_item_border_color]',
        'id_color'        => 'lgx_item_border_color',
        'default_color'   => '#FF5151',

        'label_width'     => __( 'Width', 'wp-counter-up' ),
        'name_width'      => 'post_meta_lgx_counter_generator[lgx_item_border_width]',
        'id_width'        => 'lgx_item_border_width',
        'status_width'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_width'   => '1px',

        'label_radius'     => __( 'Radius', 'wp-counter-up' ),
        'desc_radius'      => __( 'Set Border Radius for showcase logo Image.', 'wp-counter-up' ),
        'name_radius'      => 'post_meta_lgx_counter_generator[lgx_item_border_radius]',
        'id_radius'        => 'lgx_item_border_radius',
        'status_radius'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_radius'   => '4px',

        'label_hColor'     => __( 'Hover Color', 'wp-counter-up' ),
        'name_hColor'      => 'post_meta_lgx_counter_generator[lgx_item_border_color_hover]',
        'id_hColor'        => 'lgx_item_border_color_hover',
        'status_hColor'    => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_hColor'   => '#FF9B6A',
    )
);



$this->meta_form->switch(
    array(
        'label'     => __( 'Item Background Color', 'wp-counter-up' ),
        'yes_label' => __( 'Enabled', 'wp-counter-up' ),
        'no_label' => __( 'Disabled', 'wp-counter-up' ),
        'desc'      => __( 'Enable Background Color for all item.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_item_bg_color_en]',
        'id'        => 'lgx_item_bg_color_en',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => 'no'
    )
);


$this->meta_form->bgColorTypo(
    array(
        'label'     => __( 'Item Background', 'wp-counter-up' ),
        'desc'      => __( 'Please select item background color.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_item_bg_typo]',
        'id'        => 'lgx_item_bg_typo',

        'label_color'     => __( 'BG Color', 'wp-counter-up' ),
        'name_color'      => 'post_meta_lgx_counter_generator[lgx_item_bg_color]',
        'id_color'        => 'lgx_item_bg_color',
        'status_color'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_color'   => '#f1f1f1',

        'label_hColor'     => __( 'Hover BG Color', 'wp-counter-up' ),
        'name_hColor'      => 'post_meta_lgx_counter_generator[lgx_item_bg_color_hover]',
        'id_hColor'        => 'lgx_item_bg_color_hover',
        'status_hColor'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default_hColor'   => '#f1f1f1',

    )
);

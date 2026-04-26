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
        'label'     => __( 'Column Gap', 'wp-counter-up' ),
        'desc'      => __( 'Sets the gap between the columns. Add your desired value with suitable unit. E.g. 15px or 1.5rem.', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_flexbox_column_gap]',
        'id'        => 'lgx_flexbox_column_gap',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => '15px'
    )
);

$this->meta_form->text(
    array(
        'label'     => __( 'Row Gap', 'wp-counter-up' ),
        'desc'      => __( 'Sets the gap between the row. Add your desired value with suitable unit. E.g. 15px or 1.5rem', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_flexbox_row_gap]',
        'id'        => 'lgx_flexbox_row_gap',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'default'   => '15px'
    )
);

$this->meta_form->select(
    array(
        'label' => __( 'Item Horizontal Alignment', 'wp-counter-up' ),
        'desc' => __( 'Set flexible items horizontal alignment ( Justify ).<br> <span style="color: #e31919">Note: It helps to align row items horizontally. This applicable for only item, not inner content.</span>', 'wp-counter-up' ),
        'name' => 'post_meta_lgx_counter_generator[lgx_flexbox_justify_content]',
        'id' => 'lgx_flexbox_justify_content',
        'default'   => 'flex-start',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'options'   => array(
            'flex-start' => __( 'Left', 'wp-counter-up' ),
            'center' => __( ' Center', 'wp-counter-up' ),
            'flex-end' => __( 'Right', 'wp-counter-up' ),
        )
    )
);

$this->meta_form->select(
    array(
        'label' => __( ' Item Vertical Alignment', 'wp-counter-up' ),
        'desc' => __( 'Set flexible items vertical alignment ( Align).<br> <span style="color: #e31919">Note: It helps if the size of the flexible items are not equal. This applicable for only item, not inner content.</span>', 'wp-counter-up' ),
        'name' => 'post_meta_lgx_counter_generator[lgx_flexbox_align_items]',
        'id' => 'lgx_flexbox_align_items',
        'default'   => 'flex-start',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'options'   => array(
            'flex-start' => __( 'Top', 'wp-counter-up' ),
            'center' => __( 'Vertically Middle', 'wp-counter-up' ),
            'flex-end' => __( 'Bottom', 'wp-counter-up' ),
        )
    )
);



$this->meta_form->select(
    array(
        'label' => __( 'Flex Wrap', 'wp-counter-up' ),
        'desc' => __( 'Make the flexible items single or multi-line.', 'wp-counter-up' ),
        'name' => 'post_meta_lgx_counter_generator[lgx_flexbox_wrap]',
        'id' => 'lgx_flexbox_wrap',
        'default'   => 'wrap',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'options'   => array(
            'wrap' => __( 'Wrap', 'wp-counter-up' ),
            'wrap-reverse' => __( 'Wrap Reverse', 'wp-counter-up' ),
            'nowrap' => __( 'No wrap', 'wp-counter-up' ),
        )
    )
);



$this->meta_form->select(
    array(
        'label' => __( 'Flex Direction', 'wp-counter-up' ),
        'desc' => __( 'Set the direction of the flexible items.', 'wp-counter-up' ),
        'name' => 'post_meta_lgx_counter_generator[lgx_flexbox_direction]',
        'id' => 'lgx_flexbox_direction',
        'default'   => 'row',
        'status'  => LGX_WCU_PLUGIN_META_FIELD_PRO,
        'options'   => array(
            'row' => __( 'Row', 'wp-counter-up' ),
            'row-reverse' => __( 'Row Reverse', 'wp-counter-up' ),
            'column' => __( 'Column', 'wp-counter-up' ),
            'column-reverse' => __( 'Column Reverse', 'wp-counter-up' ),
        )
    )
);



<?php
if (!defined('WPINC')) {
    die;
}

/********************************************************************************/
$this->meta_form->header_spacer(
    array(
        'label'     => __( 'Set the number of items want to show per row.', 'wp-counter-up' ),
    )
);
/********************************************************************************/


$this->meta_form->number(
    array(
        'label'     => __( 'Row Item in Large Desktops', 'wp-counter-up' ),
        'desc'      => __( 'Item in Large Desktops Devices (1200px and Up).', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_large_desktop_item]',
        'id'        => 'lgx_large_desktop_item',
        'default'   => 4
    )
);

$this->meta_form->number(
    array(
        'label'     => __( 'Row Item in Desktops', 'wp-counter-up' ),
        'desc'      => __( 'Item in Desktops Devices (Desktops 992px and Up).', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_desktop_item]',
        'id'        => 'lgx_desktop_item',
        'default'   => 4
    )
);

$this->meta_form->number(
    array(
        'label'     => __( 'Row Item in Tablets', 'wp-counter-up' ),
        'desc'      => __( 'Item in Tablets Devices (768px and Up).', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_tablet_item]',
        'id'        => 'lgx_tablet_item',
        'default'   => 2
    )
);

$this->meta_form->number(
    array(
        'label'     => __( 'Row Item in Mobile', 'wp-counter-up' ),
        'desc'      => __( 'Item in Mobile Devices (Less than 768px).', 'wp-counter-up' ),
        'name'      => 'post_meta_lgx_counter_generator[lgx_mobile_item]',
        'id'        => 'lgx_mobile_item',
        'default'   => 2
    )
);

<?php
/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://logichunt.com
 * @since      2.0.0
 *
 * @package    lgx_counter
 * @subpackage lgx_counter/admin/partials
 */
if (!defined('WPINC')) {
    die;
}

$fieldValues = get_post_meta( $post->ID, '_lgxmilestonemeta', true );

wp_nonce_field( 'metaboxlgxmilestone', 'metaboxlgxmilestone[nonce]' );


$counter_number        = isset( $fieldValues['counter_number'] ) ? esc_attr($fieldValues['counter_number']) : '';
$counter_desc          = isset( $fieldValues['counter_desc'] ) ? esc_attr($fieldValues['counter_desc']) : '';


?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div id="lgx_meta_box_wrapper" class="lgx_meta_boxes_fields_logo_item lgxmilestone_metabox_wrapper">
    <div class="lgx_meta_box_wrapper_inner">
        <table class="form-table lgx_form_table lgx_form_table_main">
            <tbody>

            <?php do_action( 'lgx_counter_up_meta_fields_before', $fieldValues );  ?>

            <tr>
                <th valign="top">
                    <h4 class="lgx_app_meta_label"><label for="lgx_field_counter_number"><?php esc_html_e( 'Count Value', 'wp-counter-up' ) ?></label></h4>
                    <p class="lgx_input_desc lgx_app_meta_desc"><?php esc_html_e( 'Add number or text for count.', 'wp-counter-up' ) ?></p>
                </th>
                <td>
                    <input type="text" name="metaboxlgxmilestone[counter_number]" class="lgx_field_counter_number"  style="width: 25%;" value="<?php echo esc_attr($counter_number); ?>" />
                </td>
            </tr>

            <tr valign="top">
                <th valign="top">
                    <h4 class="lgx_app_meta_label"><label for="lgx_field_counter_desc"><?php esc_html_e( 'Description', 'wp-counter-up' ) ?></label></h4>
                    <p class="lgx_input_desc lgx_app_meta_desc"><?php esc_html_e( 'Add item details here ( Optional).', 'wp-counter-up' ) ?></p>
                </th>
                <td>
                    <textarea rows="5" cols="45"  name="metaboxlgxmilestone[counter_desc]" class="lgx_field_counter_desc" style="width: 25%;" placeholder="Description"><?php echo esc_attr($counter_desc); ?></textarea>
                </td>
            </tr>

            <tr valign="top">
                <td valign="top" colspan="2">                
                    <p class="lgx_input_desc lgx_app_meta_desc" style="font-style: unset;font-size: 16px;;"><span class="dashicons dashicons-info"></span> <a class="btn" rel="nofollow" target="_blank" href="https://www.flaticon.com/"><?php esc_html_e( 'Flat Icon', 'wp-counter-up' ) ?></a> <?php esc_html_e( ' may help you to find your desired image icon.<', 'wp-counter-up' ) ?>/p>
                </th>                
            </tr>

            <?php do_action( 'lgx_counter_up_meta_fields_after', $fieldValues );?>

            </tbody>
        </table>
    </div>
</div>
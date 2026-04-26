<?php
/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://logichunt.com
 * @since      1.0.0
 *
 * @package    logosliderwpcarousel
 * @subpackage logosliderwpcarousel/admin/partials
 */
if (!defined('WPINC')) {
    die;
}
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
    <div id="icon-options-general" class="icon32"></div>
    <h2><?php esc_html_e('Counter Up: Usage & Help', 'wp-counter-up'); ?></h2>

    <div id="poststuff">

        <div id="post-body" class="metabox-holder columns-2">




            <!-- main content -->
            <div id="post-body-content">
                <div class="meta-box-sortables ui-sortable">
                    <?php

                    /*
                     * Add Header File
                     */
                    include_once plugin_dir_path( __FILE__ ) . '/shortcode_meta_display/__meta_section_header.php';

                    ?>

                    <div class="postbox">
                        <div class="inside lgx-settings-inside">

                        <h3 class="clear"><?php esc_html_e('What Can You Count Up?', 'wp-counter-up'); ?></h3>
                        <ul style="list-style:square;padding-left:30px;">
                            <li> <?php esc_html_e('Floats: 1.234', 'wp-counter-up'); ?></li>
                            <li> <?php esc_html_e('Integers: 1234', 'wp-counter-up'); ?></li>
                            <li> <?php esc_html_e('With commas: 1,234.56', 'wp-counter-up'); ?></li>
                            <li> <?php esc_html_e('With non-numeric characters: $1,234.56', 'wp-counter-up'); ?></li>
                            <li> <?php esc_html_e('Multiple countable values: 604,800 seconds in 10,080 minutes in 168 hours in 7 days', 'wp-counter-up'); ?></li>
                        </ul>

                            <h3 class="clear" style="margin-top: 45px;"><?php esc_html_e('Quick Usage Guidelines', 'wp-counter-up'); ?></h3>
                            <h4 style="margin: 5px 0 15px 0;">Thanks for downloading and activating the plugin. It's extremely easy to configure and use. Just follow the below steps: </h4>
                            <ol>
                                <li><?php esc_html_e('At first, go to the "Add New Item" to add counter item.', 'wp-counter-up'); ?></li>
                                <li><?php esc_html_e('Add title,  icon image, description.', 'wp-counter-up'); ?></li>
                                <li><?php esc_html_e('If you need to filter counter items or want to display multiple showcases, please add categories and assign items to your desired category according to your demand.', 'wp-counter-up'); ?></li>
                                <li><?php esc_html_e('Now go to "Shortcode Generator" to prepare your desired counter showcase.', 'wp-counter-up'); ?></li>
                                <li><?php esc_html_e('Select flexbox or grid layout and configure your shortcode according to your demand.', 'wp-counter-up'); ?></li>
                                <li><?php esc_html_e('Please read the option description/ instruction carefully from the bottom of each option. ', 'wp-counter-up'); ?></li>
                                <li><?php esc_html_e('Now use the shortcode on any post, page, widget, or theme to display the Counter. ', 'wp-counter-up'); ?></li>
                            </ol>
                            <ul>
                                <li> <strong><?php esc_html_e('*Note: To get the best output, you should use all images with the same dimension.( height and width ).', 'wp-counter-up'); ?></strong></li>
                            </ul>
                    
                            <p style="margin-top:25px;"><?php esc_html_e('Read the details user manual from here: ', 'wp-counter-up'); ?> <a class="button button-primary" href="https://docs.logichunt.com/wp-counter-up/" target="_blank"><?php esc_html_e('Documentation','wp-counter-up') ?></a></p>

                            <br />
                            <br />
                            <hr>
                            <div style="margin-left: -5%;">
                                <?php

                                /*
                                 * Add Get Pro blocks
                                 */
                                include_once plugin_dir_path( __FILE__ ) . '/shortcode_meta_display/__meta_section_get_pro.php';

                                ?>
                            </div>
                            <hr>
                            <br />
                        </div> <!-- .inside -->
                    </div> <!-- .postbox -->
                </div> <!-- .meta-box-sortables .ui-sortable -->
            </div> <!-- post-body-content -->
            <?php
            include_once('sidebar.php');
            ?>

        </div> <!-- #post-body .metabox-holder .columns-2 -->

        <br class="clear">
    </div> <!-- #poststuff -->

</div> <!-- .wrap -->
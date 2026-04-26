<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://logichunt.com
 * @since      1.0.0
 *
 * @package    Wp_Counter_Up
 * @subpackage Wp_Counter_Up/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Counter_Up
 * @subpackage Wp_Counter_Up/public
 * @author     LogicHunt <logichunt.info@gmail.com>
 */
class Wp_Counter_Up_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    private $settings_api;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct(string $plugin_name, string $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

        $this->settings_api = new WP_Counter_Up_Settings_API($plugin_name, $version);
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Wp_Counter_Up_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Wp_Counter_Up_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_register_style('lgx-counter-css-dep', plugin_dir_url(__FILE__) . 'assets/css/counteruppublic-dep.css', array(), $this->version, 'all');
        wp_register_style('lgx-counter-up-style', plugin_dir_url(__FILE__) . 'assets/css/wp-counter-up-public.min.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Wp_Counter_Up_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Wp_Counter_Up_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        // OLD Version
        wp_register_script('lgx-waypoints_dep_v1', plugin_dir_url(__FILE__) . 'assets/js/waypoints_dep_v1.min.js', array('jquery'), $this->version, false);
        wp_register_script('lgx-milestone_dep_v1', plugin_dir_url(__FILE__) . 'assets/js/jquery.counterup_dep_v1.min.js', array('jquery'), $this->version, false);

        wp_register_script('lgx-waypoints_v2', plugin_dir_url(__FILE__) . 'assets/js/wayp/jquery.waypoints.min.js', array('jquery'), $this->version, false);
        wp_register_script('lgx-milestone_v2', plugin_dir_url(__FILE__) . 'assets/js/counter/custom-counter.min.js', array('lgx-waypoints_v2'), $this->version, false);


        wp_register_script('lgx-counter-script-dep', plugin_dir_url(__FILE__) . 'assets/js/counteruppublic-dep.js', array('jquery'), $this->version, false);

        wp_register_script('lgx-counter-script', plugin_dir_url(__FILE__) . 'assets/js/wp-counter-up-public.js', array('jquery'), $this->version, false);
    }




    /**
     *
     *  Version 2 Started
     *
     */

    public function register_lgx_counter_generator_shortcode()
    {

        add_shortcode('lgxcounterup', array($this, 'display_lgx_counter_shortcode_generator'));
    }


    public function display_lgx_counter_shortcode_generator($atts)
    {

        $post_id = isset($atts['id']) ? (int) $atts['id'] : 0;

        if ($post_id <= 0) {
            return '<p style="color:red;">' . esc_html__('Error: Invalid Showcase ID.', 'wp-counter-up') . '</p>';
        } else {

            $lgx_generator_meta = get_post_meta($post_id, '_save_meta_lgx_counter_generator', true);

            if (empty($lgx_generator_meta)) {
                return '<p style="color:red;">' . esc_html__('Error: The showcase ID is missing. Please add a Showcase ID.', 'wp-counter-up') . '</p>';
            }

            //echo '<pre>';print_r($lgx_generator_meta['showcase_type']);echo '</pre>';
            $lgx_lsw_loading_icon = plugin_dir_url(__FILE__) . 'assets/img/loader.gif';

            ob_start();

            //  include('partials/view-controller.php');

            include plugin_dir_path(__FILE__) . 'partials/view-controller.php';

            return ob_get_clean();
        }
    }




    /**
     *
     *  Version 2 End ***************************************************************************
     *
     */

    /**********************************************************************************************************
       Update  Deprecated Start
     *************************************************************************************************************/

    /**
     * Define Short Code Function : deprecated : 05092022
     *
     * @param $atts
     * @return mixed
     * @since 1.0.0
     */
    public function lgx_milestone_shortcode_function_dep($atts)
    {
        $lgxwcu_set_item_row     = (int) $this->settings_api->get_option('lgxwcu_set_item_row', 'lgxwcu_set_tab_basic', 1);
        $lgxwcu_set_text_color   = $this->settings_api->get_option('lgxwcu_set_text_color', 'lgxwcu_set_tab_basic', '#111111');
        $lgxwcu_set_number_color = $this->settings_api->get_option('lgxwcu_set_number_color', 'lgxwcu_set_tab_basic', '#111111');
        $lgxwcu_set_order        = $this->settings_api->get_option('lgxwcu_set_order', 'lgxwcu_set_tab_basic', 'DESC');
        $lgxwcu_set_orderby      = $this->settings_api->get_option('lgxwcu_set_orderby', 'lgxwcu_set_tab_basic', 'date');

        $atts = shortcode_atts(
            array(
                'cat'           => '',
                'orderby'       => $lgxwcu_set_orderby,
                'order'         => $lgxwcu_set_order,
                'number_color'  => $lgxwcu_set_number_color,
                'text_color'    => $lgxwcu_set_text_color,
                'row_item'      => $lgxwcu_set_item_row,
                'custom_class'  => 'default',
            ),
            $atts,
            'lgx-counter'
        );

        $output = '';

        // Theme override support
        if (file_exists(get_template_directory() . '/logichunt/plugin-public.php')) {

            require_once get_template_directory() . '/logichunt/plugin-public.php';

            $method_name = trim(str_replace("-", "_", $this->plugin_name . '_views'));

            if (class_exists('LogicHuntPluginExtendedPublic')) {

                $themeViews = new LogicHuntPluginExtendedPublic();

                if (method_exists($themeViews, $method_name)) {
                    $output = $themeViews->$method_name($atts);
                } else {
                    $output = $this->lgx_milestone_output_function_dep($atts);
                }
            } else {
                $output = $this->lgx_milestone_output_function_dep($atts);
            }
        } else {
            $output = $this->lgx_milestone_output_function_dep($atts);
        }

        return $output;
    }


    /**
     * Output renderer (deprecated)
     */
    public function lgx_milestone_output_function_dep($params)
    {
        $cats = isset($params['cat']) ? sanitize_text_field($params['cat']) : '';

        // Colors (sanitize + safe output later)
        $text_color   = isset($params['text_color']) ? sanitize_hex_color($params['text_color']) : '';
        $number_color = isset($params['number_color']) ? sanitize_hex_color($params['number_color']) : '';

        if (empty($text_color)) {
            $text_color = '#111111';
        }

        if (empty($number_color)) {
            $number_color = '#111111';
        }

        $custom_class = isset($params['custom_class']) ? sanitize_html_class($params['custom_class']) : 'default';

        $row_item = isset($params['row_item']) ? max(1, (int) $params['row_item']) : 1;

        $total_grid = 12;
        $row_col    = (int) ($total_grid / $row_item);

        $allowed_orderby = array('date', 'title', 'menu_order', 'rand');
        $orderby = in_array($params['orderby'], $allowed_orderby, true)
            ? $params['orderby']
            : 'date';


        // WP_Query args (FIXED ORDER/ORDERBY)
        $args = array(
            'post_type'      => array('lgx_counter'),
            'post_status'    => array('publish'),
            'order'          => in_array($params['order'], array('ASC', 'DESC'), true) ? $params['order'] : 'DESC',
            'orderby'        => $orderby,
            'posts_per_page' => -1,
        );

        // Category filter
        if (! empty($cats)) {

            // $cats_arr = array_map('sanitize_key', explode(',', $cats));
            $cats_arr = array_filter(array_map('sanitize_key', explode(',', $cats)));

            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'lgxcountercat',
                    'field'    => 'slug',
                    'terms'    => $cats_arr,
                )
            );
        }

        $query = new WP_Query($args);

        // Enqueue assets
        wp_enqueue_style('lgx-counter-css-dep');
        wp_enqueue_script('lgx-waypoints_dep_v1');
        wp_enqueue_script('lgx-milestone_dep_v1');
        wp_enqueue_script('lgx-counter-script-dep');

        $item = '';

        if ($query->have_posts()) {

            while ($query->have_posts()) {
                $query->the_post();

                $post_id = get_the_ID();
                $title   = get_the_title();

                $metavalues = get_post_meta($post_id, '_lgxmilestonemeta', true);

                $counter_number = 0;
                if (! empty($metavalues['counter_number'])) {
                    $counter_number = (float) $metavalues['counter_number'];
                }

                $thumb_url = '';
                if (has_post_thumbnail($post_id)) {
                    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full');
                    $thumb_url = $thumb ? $thumb[0] : '';
                }

                // ITEM HTML (STRUCTURE PRESERVED)
                $item .= '<div class="lgxmc-col-xs-6 lgxmc-col-sm-' . esc_attr($row_col) . '">';
                $item .= '<div class="lgx-counter-area">';

                $item .= '<img src="' . esc_url($thumb_url) . '" alt="' . esc_attr__('Icon', 'wp-counter-up') . '">';

                $item .= '<div class="counter-text">';

                $item .= '<span class="lgx-counter" style="color:' . esc_attr($number_color) . ';">' . esc_html($counter_number) . '</span>';

                $item .= '<small style="color:' . esc_attr($text_color) . ';">' . esc_html($title) . '</small>';

                $item .= '</div>';
                $item .= '</div>';
                $item .= '</div>';
            }

            wp_reset_postdata();

            $output  = '<div class="lgx-milestone-counter lgx-milestone lgx-milestone-' . esc_attr($custom_class) . '">';
            $output .= '<div class="lgx-mc-wrapper">';
            $output .= '<div class="lgxmc-row">';
            $output .= $item;
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
        }

        return $output;
    }

    /**********************************************************************************************************
        Update Deprecated end
     *************************************************************************************************************/
}

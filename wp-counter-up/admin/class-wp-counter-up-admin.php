<?php
if (!defined('ABSPATH')) {
    exit;
}

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://logichunt.com
 * @since      1.0.0
 *
 * @package    Wp_Counter_Up
 * @subpackage Wp_Counter_Up/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Counter_Up
 * @subpackage Wp_Counter_Up/admin
 * @author     LogicHunt <logichunt.info@gmail.com>
 */
class Wp_Counter_Up_Admin
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

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $meta_form;




    /**
     * The plugin plugin_base_file of the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string plugin_base_file The plugin plugin_base_file of the plugin.
     */
    protected $plugin_base_file;


    private $plugin_screen_hook_suffix;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

        //  $this->settings_api = new WP_Counter_Up_Settings_API($plugin_name, $version);

        $this->init_meta_form();


        $this->plugin_base_file = plugin_basename(plugin_dir_path(__FILE__) . '../' . $this->plugin_name . '.php');
    }


    /**
     *
     * Initialized Dynamic Meta field 
     *
     */
    private function init_meta_form()
    {
        $file_path = plugin_dir_path(dirname(__FILE__)) . 'includes/LgxMetaForm.php';
        if (file_exists($file_path)) {
            require_once $file_path;
            if (class_exists('ClassWPCounterUpMetaForm')) {
                $this->meta_form = new ClassWPCounterUpMetaForm();
            }
        }
    }


    public function enqueue_styles()
    {
        wp_enqueue_style($this->plugin_name . '-admin-icon', plugin_dir_url(__FILE__) . 'css/lgx-icon.css', array(), $this->version, 'all');

        $screen = get_current_screen();
        if ($screen && ($screen->post_type === 'lgx_counter' || $screen->post_type === 'lgx_wcu_generator')) {
            wp_enqueue_style('wp-color-picker');
            wp_enqueue_style($this->plugin_name . '-admin-counter', plugin_dir_url(__FILE__) . 'css/wp-counter-up-admin.min.css', array('wp-color-picker'), $this->version, 'all');
        }
    }

    public function enqueue_scripts()
    {
        $screen = get_current_screen();
        if ($screen && ($screen->post_type === 'lgx_counter' || $screen->post_type === 'lgx_wcu_generator')) {
            wp_register_script($this->plugin_name . '-admin', plugin_dir_url(__FILE__) . 'js/wp-counter-up-admin.js', array('jquery', 'jquery-ui-sortable', 'wp-color-picker'), $this->version, true);

            wp_localize_script($this->plugin_name . '-admin', 'wpnpaddon', array(
                'ajax_url'    => admin_url('admin-ajax.php'),
                'check_nonce' => wp_create_nonce('save_lgx_counter_nonce'),
            ));

            wp_enqueue_script($this->plugin_name . '-admin');
            wp_enqueue_media();
        }
    }


    /**
     * Register Custom Post Type
     *
     * @since    1.0.0
     */


    public function register_post_type_for_lgx_counter()
    {
        $labels = array(
            'name'               => _x('Counter Up', 'Post Type General Name', 'wp-counter-up'),
            'singular_name'      => _x('Counter Up', 'Post Type Singular Name', 'wp-counter-up'),
            'menu_name'          => __('Counter Up', 'wp-counter-up'),
            'all_items'          => __('All Items', 'wp-counter-up'),
            'add_new'            => __('Add Item', 'wp-counter-up'),
            'add_new_item'       => __('Add New Item', 'wp-counter-up'),
            'edit_item'          => __('Edit Item', 'wp-counter-up'),
            'update_item'        => __('Update Item', 'wp-counter-up'),
            'search_items'       => __('Search Item', 'wp-counter-up'),
            'not_found'          => __('Not Found', 'wp-counter-up'),
            'not_found_in_trash' => __('Not Found in Trash', 'wp-counter-up'),
        );
        $args = array(
            'label'               => __('Counter Up', 'wp-counter-up'),
            'description'         => __('Counter Up post type', 'wp-counter-up'),
            'labels'              => $labels,
            'supports'            => array('title', 'thumbnail', 'page-attributes'),
            'hierarchical'        => false,
            'public'              => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 80,
            'menu_icon'           => 'dashicons-awards',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post',
        );
        register_post_type('lgx_counter', $args);

        register_taxonomy('lgxcountercat', array('lgx_counter'), array(
            'hierarchical'      => true,
            'label'             => __('Categories', 'wp-counter-up'),
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'lgxcountercat'),
        ));
    }

    /**
     * Register post type for shortcode Counter Generator
     *
     *
     */

    public function register_post_type_for_lgx_counter_generator()
    {
        register_post_type('lgx_wcu_generator', array(
            'labels' => array(
                'name'               => __('Shortcode Generator', 'wp-counter-up'),
                'singular_name'      => __('Counter Showcase', 'wp-counter-up'),
                'add_new'            => __('Add New Showcase', 'wp-counter-up'),
                'add_new_item'       => __('Add New Counter Showcase', 'wp-counter-up'),
                'edit_item'          => __('Edit Showcase', 'wp-counter-up'),
            ),
            'public'       => false,
            'show_ui'      => true,
            'show_in_menu' => 'edit.php?post_type=lgx_counter',
            'supports'     => array('title'),
        ));
    }


    /**
     * Add custom CSS classes to meta box.
     *
     * @param array $classes
     * @return array
     */
    public function add_meta_box_css_class_for_lgx_counter_generator($classes = array())
    {
        $add_classes = array(
            'lgx_logo_slider_meta_box_postbox',
            'lgx_logo_slider_meta_box_postbox_free',
        );

        foreach ($add_classes as $class) {
            $sanitized_class = sanitize_html_class($class);

            if (!in_array($sanitized_class, $classes, true)) {
                $classes[] = $sanitized_class;
            }
        }

        return $classes;
    }

    /**
     * Register the administration menu for this plugin into the WordPress Dashboard menu.
     *
     * @since    2.0.0
     */

    public function add_plugin_admin_menu()
    {
        $this->plugin_screen_hook_suffix = add_submenu_page(
            'edit.php?post_type=lgx_counter',
            __('Usage & Help', 'wp-counter-up'),
            __('Usage & Help', 'wp-counter-up'),
            'manage_options',
            'lgx_counter_help_usage',
            array($this, 'display_plugin_admin_usage_help')
        );
    }


    public function display_plugin_admin_usage_help()
    {
        if (!current_user_can('manage_options')) return;
        include_once plugin_dir_path(__FILE__) . 'partials/admin-usage-help.php';
    }


    /**
     * Add settings action link to the plugins page.
     *
     * @since    1.0.0
     */

    public function add_links_admin_plugin_page_title($links)
    {
        $new_links = array(
            'create'  => '<a href="' . esc_url(admin_url('post-new.php?post_type=lgx_wcu_generator')) . '">' . esc_html__('Add New', 'wp-counter-up') . '</a>',
            'get_pro' => '<a style="color:#11b916; font-weight: bold;" href="' . esc_url('https://logichunt.com/product/wordpress-counter-up') . '" target="_blank">' . esc_html__('Get Pro!', 'wp-counter-up') . '</a>',
        );
        return array_merge($new_links, $links);
    }



    /**
     * Add metabox for custom post type
     *
     * @since    1.0.0
     */
    public function adding_meta_boxes_for_lgx_counter()
    {

        // meta box
        add_meta_box(
            'metabox_milestone',
            __('Counter Information', 'wp-counter-up'),
            array(
                $this,
                'meta_fields_display_for_lgx_counter'
            ),
            'lgx_counter',
            'normal',
            'high'
        );
    }


    public function meta_fields_display_for_lgx_counter($post)
    {

        require_once plugin_dir_path(__FILE__) . 'partials/meta_fields_display_for_post_lgx_counter.php';
    }



    /**
     * Add meta box for custom post type
     *
     * @since    2.0.0
     */
    public function adding_meta_boxes_for_lgx_counter_generator()
    {
        add_meta_box(
            'lgx_counter_generator_meta_box_panel',
            __('Logo Slider Shortcode Meta Field Panel', 'wp-counter-up'),
            array(
                $this,
                'meta_fields_display_for_lgx_wcu_generator' //Pattern --> meta_box_panel_display_for_{post_type}
            ),
            'lgx_wcu_generator',
            'normal',
            'high'
        );
    }

    public function meta_fields_display_for_lgx_wcu_generator($post)
    {

        require_once plugin_dir_path(__FILE__) . 'partials/shortcode_meta_display/meta_fields_display_for_post_lgx_counter_generator.php';
    }




    /*****************************p[] */





    /**
     * Determines whether or not the current user has the ability to save meta data associated with this post.
     *
     * Save portfoliopro Meta Field / Old : save_post_metabox_lgx_milestone
     *
     * @param        int $post_id //The ID of the post being save
     * @param         bool //Whether or not the user has the ability to save this post.
     */

    public function save_post_metadata_of_lgx_counter($post_id, $post)
    {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        if (wp_is_post_revision($post_id)) return;
        if (!current_user_can('edit_post', $post_id)) return;
        if ($post->post_type !== 'lgx_counter') return;

        if (isset($_POST['metaboxlgxmilestone'])) {

            $postData = wp_unslash($_POST['metaboxlgxmilestone']);

            if (isset($postData['nonce']) && wp_verify_nonce($postData['nonce'], 'metaboxlgxmilestone')) {

                $saveableData = array(
                    'counter_number' => isset($postData['counter_number'])
                        ? sanitize_text_field($postData['counter_number'])
                        : '',

                    'counter_desc' => isset($postData['counter_desc'])
                        ? sanitize_textarea_field($postData['counter_desc'])
                        : '',
                );


                update_post_meta($post_id, '_lgxmilestonemeta', $saveableData);
            }
        }
    }


    /**
     * Determines whether or not the current user has the ability to save meta data associated with this post.
     *
     * Save lgx_lsp_shortcodes Meta Field
     *
     * @param        int $post_id //The ID of the post being save
     * @param         bool //Whether or not the user has the ability to save this post.
     */



    public function save_post_metadata_of_lgx_counter_generator($post_id, $post)
    {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        if (wp_is_post_revision($post_id)) return;
        if (!current_user_can('edit_post', $post_id)) return;
        if ($post->post_type !== 'lgx_wcu_generator') return;

        if (!isset($_POST['post_meta_lgx_counter_generator'])) return;

        $postData = wp_unslash($_POST['post_meta_lgx_counter_generator']);

        $nonce = isset($postData['nonce']) ? $postData['nonce'] : '';
        if (!wp_verify_nonce($nonce, 'post_meta_lgx_counter_generator')) {
            return;
        }

        $savable_Data = array();

        $boolean_fields = array(
            'lgx_item_icon_en',
            'lgx_item_title_en',
            'lgx_item_desc_en',
            'lgx_preloader_en',
            'lgx_value_border_color_en',
            'lgx_img_border_color_en',
            'lgx_border_color_en',
            'lgx_icon_bg_color_en',
            'lgx_item_bg_color_en',
            'lgx_section_bg_img_en',
            'lgx_section_bg_color_en',
            'lgx_header_en',
        );

        // Default all booleans to 'no'
        foreach ($boolean_fields as $field) {
            $savable_Data[$field] = 'no';
        }

        foreach ($postData as $key => $value) {

            if ($key === 'nonce') continue;

            if (in_array($key, $boolean_fields, true)) {
                $savable_Data[$key] = 'yes';
            } elseif (strpos($key, 'color') !== false) {
                $color = sanitize_hex_color($value);
                $savable_Data[$key] = $color ? $color : '';
            } elseif (is_array($value)) {
                $savable_Data[$key] = array_map('sanitize_text_field', $value);
            } else {
                $savable_Data[$key] = sanitize_text_field($value);
            }
        }

        update_post_meta($post_id, '_save_meta_lgx_counter_generator', $savable_Data);
    }

    /**
     *  Save post for re ordering
     * @since    2.3.0
     */


    public function save_post_reorder_for_lgx_counter()
    {
        global $wpdb;

        if (!current_user_can('edit_posts')) {
            wp_send_json_error(array('message' => __('Denied', 'wp-counter-up')));
        }

        if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'save_lgx_counter_nonce')) {
            wp_send_json_error(array('message' => __('Invalid Nonce', 'wp-counter-up')));
        }

        if (empty($_POST['post_id_serialize'])) {
            wp_send_json_error(array('message' => __('No data received', 'wp-counter-up')));
        }

        parse_str(wp_unslash($_POST['post_id_serialize']), $post_data);

        if (!isset($post_data['post']) || !is_array($post_data['post'])) {
            wp_send_json_error(array('message' => __('Invalid format', 'wp-counter-up')));
        }

        foreach ($post_data['post'] as $menu_order => $post_id) {

            $post_id   = intval($post_id);
            $menu_order = intval($menu_order);

            $post = get_post($post_id);

            if (!$post || $post->post_type !== 'lgx_counter') continue;
            if (!current_user_can('edit_post', $post_id)) continue;

            $wpdb->update(
                $wpdb->posts,
                array('menu_order' => $menu_order),
                array('ID' => $post_id),
                array('%d'),
                array('%d')
            );
        }

        wp_send_json_success(array('message' => __('Reorder successful', 'wp-counter-up')));
    }

    /**
     * Filters the columns displayed in the Posts list table for a specific post type.
     *
     * apply_filters( "manage_{$post_type}_posts_columns", string[] $post_columns )
     * Deafult Value : cb, title, taxonomy-post_type, date
     * @param $default_columns
     */

    public function add_new_column_head_for_lgx_counter($default_columns)
    {
        $new_columns = array('lgx_counter_icon' => __('Counter Icon', 'wp-counter-up'));
        return array_slice($default_columns, 0, 2, true) + $new_columns + array_slice($default_columns, 2, null, true);
    }

    /**
     * Fires for each custom column of a specific post type in the Posts list table.
     * do_action( "manage_{$post->post_type}_posts_custom_column", string $column_name, int $post_id )]
     *
     * @param $column
     * @param $post_id
     */


    public function define_admin_column_value_for_lgx_counter($column, $post_id)
    {
        switch ($column) {
            case 'lgx_counter_category':
                $lgx_counter_categories = get_the_terms($post_id, 'lgxcountercat');

                if (! empty($lgx_counter_categories) && ! is_wp_error($lgx_counter_categories)) {
                    $lgx_counter_categories = wp_list_pluck($lgx_counter_categories, 'name');

                    foreach ($lgx_counter_categories as $lgx_cat_name) {
                        // Added esc_html to the value and style values for security
                        echo '<span class="button button-secondary" style="margin: 0 2px 2px 0; border-color:#a5adc3; color:#2c3338">' . esc_html($lgx_cat_name) . '</span>';
                    }
                }
                break;

            case 'lgx_counter_icon':
                if (has_post_thumbnail($post_id)) {
                    // Simplified: handles all checks and returns a secure <img> tag
                    echo get_the_post_thumbnail($post_id, array(50, 50));
                } else {
                    echo esc_html__('No icon added.', 'wp-counter-up');
                }
                break;

            default:
                break;
        }
    }



    public function add_new_column_head_for_lgx_counter_generator($default_columns)
    {
        unset($default_columns['date']);
        $default_columns['title']     = __('Title', 'wp-counter-up');
        $default_columns['shortcode'] = __('Shortcode', 'wp-counter-up');
        $default_columns['date']      = __('Date', 'wp-counter-up');
        return $default_columns;
    }



    public function define_admin_column_value_for_lgx_counter_generator($column, $post_id)
    {
        if (empty($post_id)) {
            return;
        }

        $id = absint($post_id);

        switch ($column) {
            case 'shortcode':
                $shortcode = sprintf('[lgxcounterup id="%d"]', $id);
                echo '<input type="text" class="lgx_logo_slider_list_copy_input" readonly="readonly" value="' . esc_attr($shortcode) . '">';
                break;

            case 'php_shortcode':
                $php_code = sprintf('<?php echo do_shortcode( \'[lgxcounterup id="%d"]\' ); ?>', $id);
                echo '<input type="text" class="lgx_logo_slider_list_copy_input" style="width: 360px; text-align: center;" readonly="readonly" value="' . esc_attr($php_code) . '">';
                break;

            default:
                break;
        }
    }

    /**
     * Ensure post thumbnail support is turned on.
     * Since 1.1.0
     */

    public function add_thumbnail_support()
    {
        if (!current_theme_supports('post-thumbnails')) add_theme_support('post-thumbnails');
        add_post_type_support('lgx_counter', 'thumbnail');
    }


    /**
     * Change Feature image input Position
     * new: changing_meta_box_position_of_icon
     *  Since 2.0.0
     */

    public function changing_meta_box_position_of_featured_image()
    {
        remove_meta_box('postimagediv', 'lgx_counter', 'side');
        add_meta_box('postimagediv', __('Icon Image', 'wp-counter-up'), 'post_thumbnail_meta_box', 'lgx_counter', 'normal', 'high');
    }

    /**
     * Modified get post for post type order
     *
     */

    public function modify_query_get_posts($query)
    {
        if (!is_admin() || !$query->is_main_query()) {
            return;
        }

        $post_type = $query->get('post_type');

        // Fallback for admin list table edge cases
        if (empty($post_type) && isset($_GET['post_type'])) {
            $post_type = sanitize_text_field($_GET['post_type']);
        }

        if ($post_type === 'lgx_counter') {
            $query->set('orderby', 'menu_order');
            $query->set('order', 'ASC');
        }
    }


    /**
     * Date: 25.4.2026
     * Currently this function not used. 
     * 
     * 
     *  Use this way in laoder: // The Reorder AJAX Action
$this->loader->add_action( 'wp_ajax_save_post_reorder_for_lgx_counter', $plugin_admin, 'save_post_reorder_for_lgx_counter' );
     * 
     * 
     */

    public function lgx_counter_generator_post_type_admin_order($classes)
    {
        $screen = get_current_screen();

        // Use 'lgx_counter' or 'lgx_wcu_generator' depending on which list you want to reorder
        if (is_object($screen) && $screen->post_type === 'lgx_counter') {
            $classes[] = 'lgx-counter-reorder';
        }

        return $classes;
    }



    /**
     * Capture which plugin was just activated.
     * Hooked to: activated_plugin
     */


    public function pro_version_activation_checking_admin_init($plugin, $network_activation)
    {
        $plugin_pro = 'wp-counter-up-pro/wp-counter-up-pro.php';
        $plugin_free = 'wp-counter-up/wp-counter-up.php';

        // Only proceed if one of OUR plugins was activated
        if ($plugin !== $plugin_pro && $plugin !== $plugin_free) {
            return;
        }

        set_transient('lgx_counter_plugin_clicked', $plugin, 60);

        // If Pro is active (or was just activated), set the flag
        if (is_plugin_active($plugin_pro)) {
            set_transient('lgx_counter_pro_active', 1, 60);
        } else {
            // set_transient('lgx_counter_pro_active', 0, 60);
            // Explicitly clear it if Pro isn't there
            delete_transient('lgx_counter_pro_active');
        }
    }



    /*  
 * Check the pro version
*/

    public function pro_version_activation_checking_notice_warning()
    {
        $plugin_base = LGX_WCU_PLUGIN_BASE;
        $plugin_free = 'wp-counter-up/wp-counter-up.php';
        $plugin_pro  = 'wp-counter-up-pro/wp-counter-up-pro.php';

        $pro_active = get_transient('lgx_counter_pro_active');
        $plugin_clicked = get_transient('lgx_counter_plugin_clicked');

        // Delete AFTER reading (safer)
        delete_transient('lgx_counter_pro_active');
        delete_transient('lgx_counter_plugin_clicked');

        if ($pro_active && $plugin_clicked === $plugin_pro) {

            deactivate_plugins($plugin_free);

            remove_filter(
                'plugin_action_links_' . $plugin_base,
                array($this, 'add_links_admin_plugin_page_title')
            );
        } elseif ($pro_active && $plugin_clicked === $plugin_free) {

            deactivate_plugins($plugin_free);

            remove_filter(
                'plugin_action_links_' . $plugin_base,
                array($this, 'add_links_admin_plugin_page_title')
            );

            $message = __(
                'Counter Up Pro version already activated. For more please contact our support at <a href="https://logichunt.com/support/" target="_blank">LogicHunt.com.</a>',
                'wp-counter-up'
            );

            printf(
                '<div class="notice notice-warning is-dismissible"><p>%s</p></div>',
                wp_kses_post($message)
            );
        }
    }

    /**
     * Add support link to plugin description in /wp-admin/plugins.php
     *
     * @param  array  $plugin_meta
     * @param  string $plugin_file
     *
     * @return array
     */


    public function add_links_admin_plugin_page_description($plugin_meta, $plugin_file)
    {
        if ($this->plugin_base_file === $plugin_file) {
            $plugin_meta[] = sprintf(
                '<a href="%s" target="_blank" rel="noopener noreferrer">%s</a>',
                esc_url('https://logichunt.com/support/'),
                esc_html(__('Get Support', 'wp-counter-up'))
            );
        }

        return $plugin_meta;
    }



    /**
     * Add support link to plugin description in /wp-admin/plugins.php
     *
     * @param  array  $plugin_meta
     * @param  string $plugin_file
     *
     * @return array
     */

    public function support_link($plugin_meta, $plugin_file)
    {
        if ($this->plugin_base_file === $plugin_file) {
            $plugin_meta[] = sprintf(
                '<a href="%s" target="_blank" rel="noopener noreferrer">%s</a>',
                esc_url('https://logichunt.com/support'),
                esc_html(__('Support', 'wp-counter-up'))
            );
        }

        return $plugin_meta;
    }

    /******************** New Added 2026 end ******************* */
}

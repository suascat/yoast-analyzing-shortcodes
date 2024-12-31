<?php
/**
 * Yoast Analyzing Shortcodes
 * 
 * 
 * Plugin Name: Yoast Analyzing Shortcodes
 * Plugin URI:  
 * Description: Description of the plugin.
 * Version:     1.0.0
 * Author:      
 * Author URI:  
 * Text Domain: yoast-analyzing-shortcodes
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

 function my_custom_shortcode() {
    return '<p>This is my custom shortcode output test!</p>';
}
add_shortcode('my_shortcode', 'my_custom_shortcode');


function custom_shortcodes_plugin_enqueue_script() {

    wp_enqueue_script(
        'custom-shortcodes-script', // Handle
        plugin_dir_url(__FILE__) . 'js/custom-shortcodes.js', 
        [ WPSEO_Admin_Asset_Manager::PREFIX . 'analysis' ],
        '1.0', 
        true 
    );

}
add_action('admin_enqueue_scripts', 'custom_shortcodes_plugin_enqueue_script');
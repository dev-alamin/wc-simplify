<?php

/**
 * Plugin Name: Melli Pricing Extension
 * Plugin URI:  
 * Description: This is an extension of Melli.
 * Version:     1.0
 * Author:      Al Amin
 * Author URI:  https://almn.me
 * Text Domain: melli
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     melli
 * @author      Al Amin
 * @copyright   2022 Al Amin
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 *
 * Prefix:      MELLI
 */

defined('ABSPATH') || die('No script kiddies please!');

define('MELLI_VERSION', 'melli');
define('MELLI_PLUGIN', __FILE__);
define('MELLI_PLUGIN_URL', plugin_dir_url(__FILE__));
define('MELLI_PLUGIN_PATH', plugin_dir_path(__FILE__));

add_action('plugins_loaded', 'MELLI_plugin_init');
/**
 * Load localization files
 *
 * @return void
 */
function MELLI_plugin_init()
{
    load_plugin_textdomain('melli', false, dirname(plugin_basename(__FILE__)) . '/languages');
}

require_once MELLI_PLUGIN_PATH . 'Frontend/Shortcode.php';
require_once MELLI_PLUGIN_PATH . 'includes/faqs.php';
require_once MELLI_PLUGIN_PATH . 'Frontend/ShortcodeFaq.php';


add_action('wp_enqueue_scripts', 'enque_melli_slider_assets');

function enque_melli_slider_assets(){
    wp_enqueue_style('melli_slick_cusotm_css', MELLI_PLUGIN_URL . 'assets/css/style.css', null, time(), 'all');
    // wp_enqueue_style('melli_slick_bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css', null, time(), 'all');
    wp_enqueue_style('melli_slick_css', MELLI_PLUGIN_URL . 'assets/css/slick.css', null, time(), 'all');

    wp_enqueue_script('melli_slick_js', MELLI_PLUGIN_URL . 'assets/js/slick.min.js', ['jquery'], time(), true);
    wp_enqueue_script('melli_script_custom_js', MELLI_PLUGIN_URL . 'assets/js/script.js', ['jquery'], time(), true);

   
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'melli_carbon_metabox');
function melli_carbon_metabox(){
    Container::make('post_meta', 'Testimonial Details')
        ->set_context('normal')
        ->where('post_type', '=', 'product')
        ->add_fields(
            
            array(
            Field::make('text', 'melli_cart_title', 'Card Title'),
            Field::make('complex', 'melli_card_features', 'Card Features')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    // Field::make('image', 'icon', 'Feature Icon'),
                    Field::make('text', 'title', 'Title')
                )),
        ));
}

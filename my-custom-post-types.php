<?php

/**
 * My Custom Post Types
 *
 * @package           mycustomposttypes
 * @author            Rodrigo Del Bem
 * @copyright         2019 Rodrigo Del Bem
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       My Custom Post Types
 * Plugin URI:        https://example.com/plugin-name
 * Description:       This plugin creates some custom post types.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rodrigo Del Bem
 * Author URI:        https://delbem.net
 * Text Domain:       mcpt
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        
 */

 //Composer autoload
 require_once plugin_dir_path(__FILE__) . "/vendor/autoload.php";

 //Loader class
 use MCPT\MyCustomPostTypes;

 function mcptActivation(){
    flush_rewrite_rules();
 }

 register_activation_hook( __FILE__, 'mcptActivation');

 register_deactivation_hook( __FILE__, 'mcptAtivation' );

 if(!class_exists('MyCustomPostTypes')){
    add_action('plugins_loaded', function(){
        new MyCustomPostTypes();
    });
 }

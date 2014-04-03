<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that also follow
 * WordPress coding standards and PHP best practices.
 *
 * @package   wp-openprop
 * @author    Open Prop <contact@openprop.com>
 * @license   GPL-2.0+
 * @link      http://openprop.com/
 * @copyright 2013 Prop Limited
 *
 * @wordpress-plugin
 * Plugin Name: Open Prop
 * Plugin URI:  http://openprop.com
 * Description: TODO
 * Version:     1.0.0
 * Author:      Open Prop
 * Author URI:  TODO
 * Text Domain: plugin-name-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// TODO: replace `class-plugin-name.php` with the name of the actual plugin's class file
require_once( plugin_dir_path( __FILE__ ) . 'class-plugin-name.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
// TODO: replace Plugin_Name with the name of the plugin defined in `class-plugin-name.php`
register_activation_hook( __FILE__, array( 'Plugin_Name', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Plugin_Name', 'deactivate' ) );

// TODO: replace Plugin_Name with the name of the plugin defined in `class-plugin-name.php`
Plugin_Name::get_instance();

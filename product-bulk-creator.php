<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://dsdsd
 * @since             1.0.0
 * @package           Product_Bulk_Creator
 *
 * @wordpress-plugin
 * Plugin Name:       Product Bulk Creator
 * Plugin URI:        https://dsdsd
 * Description:       This PLugins permits Create Products in Adding Country and City Label  
 * Version:           1.0.0
 * Author:            Juan Granja
 * Author URI:        https://dsdsd
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       product-bulk-creator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PRODUCT_BULK_CREATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-product-bulk-creator-activator.php
 */
function activate_product_bulk_creator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-product-bulk-creator-activator.php';
	Product_Bulk_Creator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-product-bulk-creator-deactivator.php
 */
function deactivate_product_bulk_creator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-product-bulk-creator-deactivator.php';
	Product_Bulk_Creator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_product_bulk_creator' );
register_deactivation_hook( __FILE__, 'deactivate_product_bulk_creator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-product-bulk-creator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_product_bulk_creator() {

	$plugin = new Product_Bulk_Creator();
	$plugin->run();

}
run_product_bulk_creator();

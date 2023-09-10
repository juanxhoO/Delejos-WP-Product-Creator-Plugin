<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://dsdsd
 * @since      1.0.0
 *
 * @package    Product_Bulk_Creator
 * @subpackage Product_Bulk_Creator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Product_Bulk_Creator
 * @subpackage Product_Bulk_Creator/includes
 * @author     Juan Granja <ggjuanb@hotmail.com>
 */
class Product_Bulk_Creator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'product-bulk-creator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       jonathaferreira.dev
 * @since      1.0.0
 *
 * @package    Woocommerce_Registration_Brazil
 * @subpackage Woocommerce_Registration_Brazil/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woocommerce_Registration_Brazil
 * @subpackage Woocommerce_Registration_Brazil/includes
 * @author     Jonatha Ferreira <contato@jonathaferreira.dev>
 */
class Woocommerce_Registration_Brazil_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woocommerce-registration-brazil',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

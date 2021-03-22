<?php

/**
 * The plugin bootstrap file
 * @link              jonathaferreira.dev
 * @since             1.0.0
 * @package           Woocommerce_Registration_Brazil
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Registration Brazil
 * Plugin URI:        woocommerce-registration-brazil
 * Description:       Melhora e otimiza a pagina de cadastro de clientes do WooCommerce
 * Version:           1.0.0
 * Author:            Jonatha Ferreira
 * Author URI:        jonathaferreira.dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-registration-brazil
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
define( 'WOOCOMMERCE_REGISTRATION_BRAZIL_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-registration-brazil-activator.php
 */
function activate_woocommerce_registration_brazil() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-registration-brazil-activator.php';
	Woocommerce_Registration_Brazil_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-registration-brazil-deactivator.php
 */
function deactivate_woocommerce_registration_brazil() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-registration-brazil-deactivator.php';
	Woocommerce_Registration_Brazil_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woocommerce_registration_brazil' );
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_registration_brazil' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-registration-brazil.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woocommerce_registration_brazil() {

	$plugin = new Woocommerce_Registration_Brazil();
	$plugin->run();

}
run_woocommerce_registration_brazil();

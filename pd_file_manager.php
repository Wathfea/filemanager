<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.perluszdavid.hu
 * @since             1.0.0
 * @package           Pd_file_manager
 *
 * @wordpress-plugin
 * Plugin Name:       PD File Manager
 * Plugin URI:        http://www.perluszdavid.hu/plugins/filemanager
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Perlusz David
 * Author URI:        http://www.perluszdavid.hu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pd_file_manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pd_file_manager-activator.php
 */
function activate_pd_file_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pd_file_manager-activator.php';
	Pd_file_manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pd_file_manager-deactivator.php
 */
function deactivate_pd_file_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pd_file_manager-deactivator.php';
	Pd_file_manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pd_file_manager' );
register_deactivation_hook( __FILE__, 'deactivate_pd_file_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pd_file_manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pd_file_manager() {

	$plugin = new Pd_file_manager();
	$plugin->run();

}
run_pd_file_manager();

<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.perluszdavid.hu
 * @since      1.0.0
 *
 * @package    Pd_file_manager
 * @subpackage Pd_file_manager/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pd_file_manager
 * @subpackage Pd_file_manager/includes
 * @author     Perlusz David <to@perluszdavid.hu>
 */
class Pd_file_manager_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pd_file_manager',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://siliconfort.com
 * @since      1.0.0
 *
 * @package    Siliconfort_Sendsms
 * @subpackage Siliconfort_Sendsms/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Siliconfort_Sendsms
 * @subpackage Siliconfort_Sendsms/includes
 * @author     Your Name <email@siliconfort.com>
 */
class Siliconfort_Sendsms_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'siliconfort-sendsms',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

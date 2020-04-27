<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://siliconfort.com
 * @since      1.0.0
 *
 * @package    Siliconfort_Sendsms
 * @subpackage Siliconfort_Sendsms/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Siliconfort_Sendsms
 * @subpackage Siliconfort_Sendsms/admin
 * @author     Your Name <email@siliconfort.com>
 */
class Siliconfort_Sendsms_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $siliconfort_sendsms    The ID of this plugin.
	 */
	private $siliconfort_sendsms;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $siliconfort_sendsms       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $siliconfort_sendsms, $version ) {

		$this->siliconfort_sendsms = $siliconfort_sendsms;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Siliconfort_Sendsms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Siliconfort_Sendsms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->siliconfort_sendsms, plugin_dir_url( __FILE__ ) . 'css/siliconfort-sendsms-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Siliconfort_Sendsms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Siliconfort_Sendsms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->siliconfort_sendsms, plugin_dir_url( __FILE__ ) . 'js/siliconfort-sendsms-admin.js', array( 'jquery' ), $this->version, false );

	}

}

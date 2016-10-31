<?php
namespace MWD\CPT\Stories;

// Set up plugin class
class Init {

	function __construct() {
		/**
	   * Location includes
	   *
	   * The $location_includes array determines the code library included in your theme.
	   * Add or remove files to the array as needed. Supports child theme overrides.
	   *
	   * Please note that missing files will produce a fatal error.
	   *
	   */
	 		$includes = [
	 		  'lib/stories-post-type.php',   // Post Type
	 		];
	 		foreach ($includes as $file) {
	 		  require_once STORIES_PLUGIN_DIR . $file;
	 		}
	 		unset($file);

		// Add admin scripts
		//add_action('admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
		//add_action( 'init', 'change_post_type_labels' );
	}

	/**
	 * Enqueue admin scripts
	 */
	 /*

	  function admin_scripts() {
			 wp_enqueue_script( 'locations-shortcode-admin-script', LOCATIONS_PLUGIN_URL . 'assets/js/admin-script.js' );
	 }
	 */
}

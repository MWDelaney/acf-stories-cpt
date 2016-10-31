<?php
/*
Plugin Name: Custom Post Type: Stories
Plugin URI:
Description: Post type, shortcode, and ACF fields for "Stories" post type.
Version: 1.0
Author: Michael W. Delaney
Author URI:
License: MIT
*/

namespace MWD\CPT\Stories;

/**
 * Set up autoloader
 */
require __DIR__ . '/vendor/autoload.php';

/**
* Define Constants
*/
define( 'STORIES_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'STORIES_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

use Init;
$stories_init = new \MWD\CPT\Stories\Init();

use BeaverBuilder;
$stories_beaverbuilder = new \MWD\CPT\Stories\BeaverBuilder();


function template($slug, $load = null) {
		$t = new \MWD\CPT\Stories\Templates;
		$t->get_template_part( $slug, $load );
}

function template_data($data, $name) {
		$d = new \MWD\CPT\Stories\Templates;
		$d->set_template_data( $data, $name );
}

<?php
namespace MWD\CPT\Stories;

// Set up plugin class
class BeaverBuilder {

	function __construct() {
		add_filter( 'fl_builder_post_types', array($this, 'my_builder_post_types') );
	}

	function my_builder_post_types( $post_types ) {
    $post_types[] = 'story';
    return $post_types;
	}

}

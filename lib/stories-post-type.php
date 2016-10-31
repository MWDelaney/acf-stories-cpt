<?php
use PostTypes\PostType;

// Post type labels
$names = [
    'name' => 'story',
    'singular' => 'Story',
    'plural' => 'Stories',
    'slug' => 'stories'
];

// Post type options
$options = [
	'supports' => array( 'title', 'editor', 'page-attributes' ),
	'capability_type' => 'page',
];

// Register post type
$stories = new PostType($names, $options);

// Set post type dashicon
$stories->icon('dashicons-book-alt');

// Set post type translation domain
$stories->translation('cpt-stories');

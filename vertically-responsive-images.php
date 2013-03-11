<?php

/*
Plugin Name: Vertically Responsive Images
Description: Resize images on the fly to fit the vertically dimensions of the user's window.
Version: 1.1.1
Author: Evan Solomon
Author URI: http://evansolomon.me/
*/

function es_vertically_responsive_images() {
	// Make sure underscore.js is available since it's new
	if ( ! wp_script_is( 'underscore', 'registered' ) )
		return;

	wp_enqueue_script(
		'vertically-responsive-images',
		plugins_url( '/vertically-responsive-images.js', __FILE__ ),
		array( 'jquery', 'underscore' )
	);
}
add_action( 'wp_enqueue_scripts', 'es_vertically_responsive_images' );

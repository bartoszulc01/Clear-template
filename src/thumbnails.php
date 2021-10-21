<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Custom Image Sizes
 * ------------------------------------------------------------------------
 * This file is for registering custom image
 * sizes for using as for thumbnails.
 */

if ( ! function_exists( 'wpg_register_thumbnails' ) ) {
	/**
	 * Registers theme's additional thumbnail sizes.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function wpg_register_thumbnails() {
		add_image_size( 'news', 440, 440, true);
	}
}
add_action( 'after_setup_theme', 'wpg_register_thumbnails' );



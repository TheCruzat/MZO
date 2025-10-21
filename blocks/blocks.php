<?php
/**
 * All of the custom Gutenberg blocks
 *
* @package mzo
* @since 1.0.0
 */

// Load Blocks
function load_custom_blocks() {
    register_block_type( get_template_directory() . '/blocks/big-icon' );
    register_block_type( get_template_directory() . '/blocks/lead-title' );
    register_block_type( get_template_directory() . '/blocks/logos' );
	register_block_type( get_template_directory() . '/blocks/ratings-block' );
}
add_action( 'init', 'load_custom_blocks' );


<?php
/**
 * Func > Thumbnails
 *
 * @package mzo
 * @since 1.0.0
 */

add_theme_support( 'post-thumbnails' );

// add_image_size( name, width, height, crop );
add_image_size('mobi', 640, 640, true);
add_image_size('mobi-h', 640, 480, true);
add_image_size('mobi-v', 480, 640, true);
add_image_size('mobi-v2', 640, 960, true);

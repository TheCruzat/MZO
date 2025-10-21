<?php
/**
 * Func > Tools
 *
 * @package mzo
 * @since 1.0.0
 */

// let's have that slug then Daniel
function cook_slug($str) {
  $str = strtolower(trim($str));
  $str = preg_replace('/[^a-z0-9-]/', '-', $str);
  $str = preg_replace('/-+/', "-", $str);
  rtrim($str, '-');
  return $str;
}

// strip everything out of number (for phone)
function nu($i) {
    return preg_replace("/[^0-9]/", "", $i);
}

// shorthand content filters
function cn($i) {
	return apply_filters('the_content', $i);
}

// shorthand again to lose the content tag
function scn($i) { return strip_tags(cn($i), ['<br>','<br />','<i>','<em>','<strong>']); }

// shorthand again to include echo call
function ecn($i) { echo cn($i); }

function thm() { 	return get_template_directory_uri();	}

function url() { 	return site_url();						}

// define('ABS', get_theme_root() .'/'. get_template());


function pid() {
	global $post;
	return $post->ID;
}

function cf($f, $i = null) {
	if(!$i) {
		$i = pid();
	}
	return get_field($f, $i);
}

function ecf($f, $i = null) {
	echo cf($f, $i);
}

// Make sure the ACF data is in the array and validish before using it
function is_data_okay( $key, $data ) {
	if ( ! isset( $data ) ) { // RUN THE GAUNTLET
		return false;
	}
	if ( ! is_array( $data ) ) {
		return false;
	}
	if ( ! array_key_exists( $key, $data ) ) {
		return false;
	}
	if ( ! $data[ $key ] ) {
		return false;
	}
	return true;
}

function pr($q) {
	echo '<pre>';
	print_r($q);
	echo '</pre>';
}



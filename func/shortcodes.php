<?php
/**
 * Func > Shortcodes
 *
 * @package mzo
 * @since 1.0.0
 */

// button shortcode
function sc_button($atts) {
	$a = shortcode_atts( [
		'label' => 'label required',
		'id' => null,
		'class' => null,
		'slug' => null,
		'url' => null,
		'new' => null
	], $atts );

	$class = '';

	if($a['slug'] || $a['url']) {
		$tag = 'a';
		$class .= 'button';
		if($a['class']) {
			$class .= ' ';
		}
		if($a['slug']) {
			$url = site_url().'/'.$a['slug'];
		}
		if($a['url']) {
			$url = $a['url'];
		}

	} else {
		$tag = 'button';
	}

	if($a['class']) {
		$class .= $a['class'];
	}

	$str = '';

	$str .= '<'.$tag;
	if($a['id']) {
	 $str .= ' id="'.esc_attr($a['id']).'"';
	}
	if($class != '') {
	 $str .= ' class="'.esc_attr($class).'"';
	}
	if($url) {
	 $str .= ' href="'.esc_url($url).'"';
	 if($a['new']) {
	 	$str .= ' target="_blank"';
	 }
	}
	$str .= '>' . esc_html($a['label']) . '</'.$tag.'>';

	return $str;

}
add_shortcode('button','sc_button');


// resume buttn
function sc_resume_button($atts) {
	$a = shortcode_atts( [
		'label' => 'label required'
	], $atts );

	$flds = get_fields(pID());

	if(is_data_okay('resume_download', $flds)) {
		$rdb = $flds['resume_download'];

		if(is_data_okay('file', $rdb)) {

			return do_shortcode('[button label="'.$a['label'].'" url="'.$rdb['file']['url'].'" class="md:w-full md:text-center"]');

		}
	}
}
add_shortcode('resume-button', 'sc_resume_button');


// copyright year for footer
function sc_copyright_year($atts) {
	$a = shortcode_atts( [
		'prefix' => 'Copyright',
		'symbol' => '&copy;',
		'start-year' => null
	], $atts );

	$start = '';
	$year = date('Y');
	if($a['start-year'] !== null && $a['start-year'] !== $year) $start = esc_html($a['start-year']) . '-';

	$str = esc_html($a['prefix']) . ' ' . esc_html($a['symbol']) . $start . $year;

	return $str;
}
add_shortcode('copyright-year', 'sc_copyright_year');


// site title for footer
function sc_site_title() { return get_bloginfo('site-title'); }
add_shortcode('site-title', 'sc_site_title');


// inline menu for footer
function sc_footer_inline_menu() {
	$fnav = get_field('footer_nav', 'options');
	$str = '<ul>';
	foreach($fnav as $nav) { $n = $nav['link'];
		$str .= '<li><a href="'.esc_url($n['url']).'">'.esc_html($n['title']).'</a></li>';
	}
	$str .= '</ul>';
	return $str;
}
add_shortcode('footer-inline-nav', 'sc_footer_inline_menu');


// content icon
function sc_content_icon($atts) {
	$a = shortcode_atts( [
		'class' => null
	], $atts );

	return '<div class="md:flex justify-center items-center text-[3rem] md:text-[5.5rem] lg:text-[7rem] text-[var(--charcoal)]"><i class="'.esc_attr($a['class']).'"></i>as</div>';
}
add_shortcode('content-icon', 'sc_content_icon');

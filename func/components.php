<?php
/**
 * Func > Components
 *
 * @package mzo
 * @since 1.0.0
 */

// page title
function page_title($tit = null) {
	if($tit) {
		$title = $tit;
	} else {
		$title = get_the_title();
	}
	echo '<h1 class="page-title min-md:max-w-75/100 min-lg:max-w-66/100 text-[length:var(--h1)]/[var(--lineHeightHeader)] text-[var(--title-color)] mb-4 md:mb-8 xl:mb-12 relative">'.esc_html($title, 'mzo').'</h1>';
}

// svg that svg
function svg($src = null, $class = null) {
	if(!$src) {
		echo "Error, filename required";
	} else {
		$path = thm() . '/assets/svg/' . $src;
		$path = str_replace(['.svg','.SVG'],'', $path);
		$path .= '.svg';
		$svg = file_get_contents($path);
		if($class) {
			$dom = new DOMDocument();
			$dom->loadXML($svg);
			foreach($dom->getElementsByTagName('svg') as $element) {
			    $element->setAttribute('class', esc_attr($class));
			}
			$dom->saveHTML();
			$svg = $dom->saveHTML();
		}
		echo $svg;
	}
}

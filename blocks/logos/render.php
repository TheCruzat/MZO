<?php
/**
 * ACF Block Template: Logos
 *
 */

namespace mzo;

include(dirname(__FILE__) . '/../block-meta.php');

$flds = get_fields();		// pr($flds['partners']);

$con_class = "text-center";

if(is_data_okay('logos', $flds)) {
	echo '<div '.$block_atts.'>';
	echo '<div class="grid grid-cols-'.esc_attr($flds['columns']['mobile']).' md:grid-cols-'.esc_attr($flds['columns']['fullsize']).' md:items-center gap-8 md:gap-12 backdrop-grayscale">';

	foreach($flds['logos'] as $coun => $logo) {
		echo '<img src="'.esc_url($logo['url']).'" alt="'.esc_html($logo['alt']).'" class="mx-auto block max-h-[60px]" /></a>';
	}

	echo '</div>';
	echo '</div>';
}

?>

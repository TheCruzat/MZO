<?php

if( is_data_okay('anchor', $block) ) $block_id = $block['anchor']; else $block_id = $block['id'];

$flds = get_fields();

$block_class = 'relative ';
if(isset($extra_class) && $extra_class !== '' && $extra_class !== null) $block_class .= ' ' . $extra_class;

$block_params = [
	'id' => $block_id,
	'class' => $block_class
];

$block_atts = get_block_wrapper_attributes($block_params);

<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$star = '★';
$stars = '';
$starBG = '';

for($i = 0; $i < $attributes['ratingNumber']; $i++) $stars .= $star;
for($i = 0; $i < 5; $i++) $starBG .= $star;

?>
<div <?= $block_atts; ?>>
<?php if ( ! empty( $attributes['ratingName'] ) && ! empty( $attributes['ratingQuote'] ) ) { ?>
	<div class="review mb-[calc(var(--hr)/2] pb-[calc(var(--hr)/2)]">
		<p class="stars relative text-[300%] m-0">
			<span class="relative text-[#f4b400] z-2"><?= $stars; ?></span>
			<span class="absolute text-[#eaeaea] z-1 left-0"><?= $starBG; ?></span>
		</p>
		<p class="text my-[0.5em]">“<?= esc_html($attributes['ratingQuote']) ?>”</p>
		<p class="author text-[#555555] font-bold">– <?= esc_html($attributes['ratingName']) ?></p>
	</div>
<?php } ?>
</div>

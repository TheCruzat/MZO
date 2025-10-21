<?php
/**
 * Block: Big Icon
 * @package mzo
 */

$a = $attributes; ?>

<div class="h-full md:flex justify-center items-center text-[3rem] md:text-[5.5rem] lg:text-[7rem] xl:text-[9.5rem] text-[var(--charcoal)]">
	<i class="<?= $a['iconprefix'] .' '. $a['iconname'] ?>"></i>
</div>


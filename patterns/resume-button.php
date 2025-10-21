<?php 
/**
 * Title: Resume Button
 * Slug: mzo/resume-button
 *
 * @package mzo
 * @since 1.0.0
 */

$flds = get_fields(pID());
if($flds['resume_download']['file'] !== null && $flds['resume_download']['button_label'] !== null) { ?>
	<hr />
	<div class="text-center">
		<?= do_shortcode('[button label="'.$flds['resume_download']['button_label'].'" url="'.$flds['resume_download']['file']['url'].'"]'); ?>
	</div>
<?php }

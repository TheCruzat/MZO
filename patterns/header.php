<?php
/**
 * Title: Header
 * Slug: mzo/header
 *
 * @package mzo
 * @since 1.0.0
 */

?>

<div class="bg-[var(--charcoal)] z-2 fixed top-0 w-full h-[var(--headerHeight)]">
	<div class="container max-w-6xl xl:max-w-7xl mx-auto px-4 md:px-8 py-6 max-md:py-3 flex justify-between items-center">
		<a class="site-logo duration-200 ease-out relative z-2 text-[#ffffff]" href="<?php echo site_url(); ?>" title="Miriam Ziven / Design / Writing / Mangement"><h1 class="site-logo leading-[0.8]! text-center uppercase text-3xl md:text-4xl xl:text-5xl">
			<span class="block text-[75%]">Miriam</span>
			<span class="block mb-[2px] md:mb-[6px]">Ziven</span>
		</h1></a>

		<div class="main-nav duration-200 ease-out relative z-1 max-md:flex items-center justify-center md:block max-md:fixed max-md:top-auto max-md:h-full max-md:bg-white max-md:w-full max-md:bottom-full max-md:left-0">
			<?php
				wp_nav_menu([
					'menu' => 'Primary Nav',
					'container' => 'nav',
					'container_aria_label' => 'Site Navigation',
					'menu_class' => 'flex max-md:flex-col max-md:text-center max-md:text-3xl'
				]);
				?>
		</div>

		<button id="mobile-menu" class="block relative z-2 md:hidden!" aria-expanded="false" aria-haspopup="true" aria-controls="primary-menu" aria-label="Open Main Menu">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>
</div>


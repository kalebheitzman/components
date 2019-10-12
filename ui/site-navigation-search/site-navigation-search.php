<?php
/**
 * Site Navigation Search
 *
 * @package Components
 * @since 1.0.0
 */

// enqueue site navigation js.
wp_enqueue_script(
	'site-navigation-search-js',
	get_stylesheet_directory_uri() . '/ui/site-navigation-search/site-navigation-search.js',
	array( 'jquery' ),
	'1.0.0',
	true
);

?><div class="site-navigation-search">
	<form data-show-search="false" action="<?php echo get_site_url(); // phpcs:ignore WordPress.Security.EscapeOutput ?>" method="get">
		<input type="text" placeholder="Search" name="s" />
		<button class="site-navigation-search-submit">
			<i class="fa fa-search"></i>
		</button>
	</form>
</div>

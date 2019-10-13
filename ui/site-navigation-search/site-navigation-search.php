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

?><div class="site-navigation-search" data-show-search="false" role="search">
	<button class="site-navigation-search-submit">
		<i class="fa fa-search" aria-hidden="true"></i>
	</button>
	<form class="search-form" action="<?php echo get_site_url(); // phpcs:ignore WordPress.Security.EscapeOutput ?>" method="get">
		<label class="screen-reader-text" for="s">Search</label>
		<input type="text" placeholder="Search..." name="s" class="search-text-field" />
		<input type="submit" value="Search" />
	</form>
</div><!--.site-navigation-search-->

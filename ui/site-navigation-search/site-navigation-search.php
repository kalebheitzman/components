<?php
/**
 * Site Navigation Search
 *
 * @package Components
 * @since 1.0.0
 */

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

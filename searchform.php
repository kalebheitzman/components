<?php
/**
 * Site Search Form
 *
 * @package Components
 * @since 1.0.0
 */

?><div class="site-search-form" data-show-search="false" role="search">
	
	<form class="search-form" action="<?php echo get_site_url(); // phpcs:ignore WordPress.Security.EscapeOutput ?>" method="get">
		<label class="screen-reader-text" for="s">Search</label>
		<input type="text" placeholder="Search..." name="s" class="search-text-field" />
		<button class="site-search-form-submit">
		  <i class="fa fa-search" aria-hidden="true"></i>
	  </button>
	</form>
</div><!--.site-search-form-->
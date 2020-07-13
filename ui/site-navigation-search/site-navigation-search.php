<?php
/**
 * Site Navigation Search
 *
 * @package Components
 * @since 1.0.0
 */

?><div class="site-navigation-search" role="search">
	<button class="site-navigation-search-button" data-show-search="false">
    <i class="fa fa-search" aria-hidden="true"></i>
  </button>
</div><!--.site-navigation-search-->

<div class="site-navigation-search-box" data-show-search="false">

  <div class="content">

    <?php get_search_form(); ?>

    <?php get_component( 'sidebar-search' ); ?>

  </div><!--.content-->


</div><!--/site-navigation-search-box-->
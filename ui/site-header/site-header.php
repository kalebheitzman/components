<?php
/**
 * Site Header
 *
 * @package Components
 * @since 1.0.0
 */

get_component( 'typography' );

$frontpage = is_front_page();

?><div class="site-header-background-bar"></div>

<header class="site-header">

  <?php get_component( 'site-branding' ); ?>

  <?php get_component( 'site-navigation' ); ?>

  <?php get_component( 'site-navigation-secondary' ); ?>

  <?php get_component( 'site-navigation-controls' ); ?>

</header>

<?php get_component( 'site-navigation-search-box' ); ?>

<?php
/**
 * Site Header
 *
 * @package Components
 * @since 1.0.0
 */

$frontpage = is_front_page();

?><div class="site-header-background-bar"></div>

<header class="site-header">

  <?php get_component( 'site-branding' ); ?>

  <?php get_component( 'site-navigation' ); ?>

  <?php get_component( 'site-navigation-secondary' ); ?>

  <div class="site-navigation-controls">
    <?php get_component( 'site-navigation-search' ); ?>
    <?php // get_component( 'language-switcher' ); ?>
  </div>

  <?php get_component( 'site-navigation-search-box' ); ?>

</header>


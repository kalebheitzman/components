<?php
/**
 * Site Header
 *
 * @package Components
 * @since 1.0.0
 */

$frontpage = is_front_page();

?><header class="site-header">

	<?php get_component( 'site-navigation' ); ?>
  <?php get_component( 'site-navigation-secondary' ); ?>

</header>

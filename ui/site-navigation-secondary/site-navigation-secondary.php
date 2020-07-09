<nav class="site-navigation-secondary">
  
  <?php
    if ( has_nav_menu( 'secondary_menu' ) ) :
      wp_nav_menu(
        array(
          'theme_location' => 'secondary_menu',
          'container'      => 'ul',
          'menu_class'     => 'secondary-menu',
          'menu_id'        => '',
          'walker'         => new Components_Menu_Walker(),
        )
      );
    endif;
    ?>
    
  <?php //get_component( 'site-navigation-search' ); ?>

</nav><!--.site-secondary-menu-->
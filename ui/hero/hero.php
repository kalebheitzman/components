<?php
/**
 * Hero Banner Component
 *
 * @package Components
 * @since 1.0.0
 */


?><div class="hero">

  <?php the_post_thumbnail( 
    'hero',
    array(
      'loading' => 'lazy'
    ) 
  ); 
  ?>

  <div class="outer">
    <div class="inner">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      <p class="breadcrumbs"><?php components_breadcrumbs(); ?></p>
    </div><!--.innter-->
  </div><!--.wrapper-->

</div><!--.hero-->
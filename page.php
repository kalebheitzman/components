<?php
/**
 * Components Theme Page
 *
 * @package Components
 * @since 1.0.0
 */

get_header(); ?>

<main class="site-main">

  <?php get_component( 'hero' ); ?>

  <section class="site-content full-width">

    <?php
      while ( have_posts() ) :
        the_post();
        get_component( 'content', 'content-page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>
  </section><!--.site-content-->

</main><!--.site-main-->

<?php get_footer(); ?>

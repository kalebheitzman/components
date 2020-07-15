<?php
/**
 * Template name: With Right Sidebar
 *
 * @package Components
 * @since 1.0.0
 */

get_header(); ?>

<main class="site-main">

  <?php get_component( 'hero' ); ?>

  <section class="sidebar-wrapper">

    <div class="site-content">
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
    </div>

    <?php get_component( 'sidebar-page' ); ?>

  </section><!--.sidebar-wrapper-->

</main><!--.site-main-->

<?php get_footer(); ?>

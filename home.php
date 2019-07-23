<?php 
/**
 * Components Theme Index Page
 */
get_header(); ?>
 
<div class="site-main">
    <h1><?php the_title(); ?></h1>
    <?php the_content() ?>
</div>

<?php get_footer(); ?>
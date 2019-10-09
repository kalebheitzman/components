<?php
/**
 * Components Theme Page
 *
 * @package Components
 * @since 1.0.0
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="site-main">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

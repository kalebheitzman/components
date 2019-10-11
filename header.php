<?php
/**
 * Components Theme Header
 *
 * @package Components
 * @since 1.0.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part( 'ui/site-header/site-header' ); ?>

<div id="content" class="site-content <?php component_content_class(); ?>">

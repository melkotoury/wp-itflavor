<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Root_Cave
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rootcave' ); ?></a>

	<header id="header">
		<nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
				</div>
<!--If the menu (WP admin area) is not set then the "menu_class" is applied to "container". In other words , it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu-class-usage-bug?replies=4 -->
<?php
wp_nav_menu(array(
	'theme_location' => 'primary',
		'container' => 'nav',
		'container_class' => 'navbar-collapse collapse',
		'menu_class' =>'nav navbar-nav navbar-right'

));
?>

			</div><!--/.container-->
		</nav><!--/nav-->
	</header><!--/header-->

	<div id="content" class="site-content">

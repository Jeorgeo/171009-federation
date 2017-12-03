<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package federation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="left-panel">
			<div class="container">
				<nav class="mobile-menu">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>
			</div>
		</div>
		<div class="top-header floating-header">
			<div class="container clearfix">
				<div id="js-toggle" class="left-panel__menu-toggle">
					<button class="header-menu-toggle"><span>menu</span></button>
				</div>
				<div class="logo-box">
					<div class="site-branding">
						<?php	the_custom_logo(); ?>
					</div>
				</div>
				<nav class="main-menu clearfix">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>
				<div class="contacts-box">
					<?php dynamic_sidebar( 'phone' ); ?>
				</div>
			</div>
		</div>
	</header>

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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="floating-header">
		<div class="container">
			<div class="top-header clearfix">
				<div class="left-panel">
					<div id="js-toggle" class="left-panel__menu-toggle">
						<button class="header-menu-toggle"><span>menu</span></button>
					</div>
					<nav class="mobile-menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav>
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
					<a href="tel:89255107239">
						<span class="phone_icon"></span>
						<span class="phone_text">8 (925) 510-72-35</span>
					</a>
				</div>
			</div>
		</div>
	</header>

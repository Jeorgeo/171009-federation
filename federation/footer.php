<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package federation
 */

?>

<footer>
	<div class="container clearfix">
		<div class="contacts-box phone">
			<?php dynamic_sidebar( 'phone' ); ?>
		</div>
		<div class="footer-right">
			<div class="contacts-box">
				<?php dynamic_sidebar( 'mail' ); ?>
			</div>
			<?php dynamic_sidebar( 'policy' ); ?>
		</div>
		<div class="footer-center">
			<div class="box-social">
				<?php dynamic_sidebar( 'social_vk' ); ?>
				<?php dynamic_sidebar( 'social_instagram' ); ?>
				<?php dynamic_sidebar( 'social_ok' ); ?>
				<?php dynamic_sidebar( 'social_tw' ); ?>
				<?php dynamic_sidebar( 'social_tel' ); ?>
			</div>
			<p class="box-copy">
				© Игра «Федерация», 2017
			</p>
		</div>
		<p class="box-production">
			Создание сайта: <a href="http://ws-sputnik.ru/" target="_blank">ws-sputnik.ru</a>
		</p>
	</div>
</footer>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-migrate-1.4.1.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/maskedinput.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slider.js"></script>
	<script type="text/javascript">
   jQuery(function($){
   $("#phone").mask("79999999999");
   });
	 </script>
	 <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
   <script>new WOW().init();</script>
<?php wp_footer(); ?>

</body>
</html>

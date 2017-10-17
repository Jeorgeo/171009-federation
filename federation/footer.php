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
			<a href="tel:89255107239">
				<span class="phone_icon"></span>
				<span class="phone_text">8 (925) 510-72-35</span>
			</a>
		</div>
		<div class="footer-right">
			<div class="contacts-box">
				<a href="mailto:igra@gmail.com">
					<span class="mail_icon"></span>
					<span class="mail_text">igra@gmail.com</span>
				</a>
			</div>
			<a class="policy" href="<?php echo the_field('policy'); ?>" target="_blank">Политика конфиденциальности</a>
		</div>
		<div class="footer-center">
			<div class="box-social">
				<span class="social-icons social_vk"><a href="https://vk.com/id402797950">В контакте</a></span>
				<span class="social-icons social_instagram"><a href="https://www.instagram.com/rusfedgame">Инстаграмм</a></span>
				<span class="social-icons social_ok"><a href="https://ok.ru/profile/570383914077">Одноклассники</a></span>
				<span class="social-icons social_tw"><a href="https://twitter.com/rfigra">Твиттер</a></span>
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
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/maskedinput.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slider.js"></script>
	<script type="text/javascript">
   jQuery(function($){
   $("#phone").mask("+7(999) 999-9999");
   });
</script>
<?php wp_footer(); ?>

</body>
</html>

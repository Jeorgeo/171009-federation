<?php
/**
 * Template Name: Стать партнером
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package federation
 */

get_header(); ?>

<main class="partner">
	<section class="partner-intro">
		<div class="container">
			<?php echo the_field('pole1'); ?>
		</div>
	</section>
	<section class="partner-game">
		<div class="row container clearfix">
			<div class="cols col-4 col-6-md">
				<img src="<?php bloginfo('template_url'); ?>/pics/fed_main-victory.png" alt="">
			</div>
			<div class="cols col-8 col-6-md">
				<?php echo the_field('pole2'); ?>
			</div>
		</div>
	</section>
	<section class="partner-capability">
		<div class="container">
			<?php echo the_field('pole3'); ?>
		</div>
	</section>
	<section class="partner-process">
		<div class="container">
			<?php echo the_field('pole4'); ?>
		</div>
	</section>
	<section class="partner-order">
		<div class="container">
			<div class="row clearfix">
				<div class="cols col-5 col-6-md wrap-box">
					<p class="box-meet">
						<span class="big-text">
							<?php echo the_field('order'); ?>
						</span>
					</p>
				</div>
				<div class="cols col-5 col-6-md">
					<div class="box-form">
						<form class="main-form" action="index.html" method="post">
							<h4>
								Оставить заявку
							</h4>
							<input type="text" name="name" value="" placeholder="ФИО*">
							<input id="phone" type="text" name="phone" value="" placeholder="Контактный телефон*">
							<input type="text" name="email" value="" placeholder="E-mail*" pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})">
							<input type="text" name="adress" value="" placeholder="Город*">
							<button class="box-form__btn"type="submit" name="order-btn">Отправить</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php

get_footer();

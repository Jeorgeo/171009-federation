<?php
/**
 * Template Name: Правила игры
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

<main class="rules">
	<section class="rules-artefacts">
		<div class="container">
			<h2>
				Правила игры
			</h2>
			<p>
				<?php echo the_field('rules'); ?>
			</p>
			<h3>
				ИГРОВЫЕ ПРЕДМЕТЫ:
			</h3>
			<figure>
				<p><?php echo the_field('item1'); ?></p>
				<img src="<?php echo the_field('item1_img'); ?>" alt="игровое поле">
			</figure>
			<figure class="central-block">
				<p><?php echo the_field('item2'); ?></p>
				<img src="<?php echo the_field('item2_img'); ?>" alt="колода из 175 карт">
			</figure>
			<figure>
				<p><?php echo the_field('item3'); ?></p>
				<img src="<?php echo the_field('item3_img'); ?>" alt="фишки трех цветов">
			</figure>
		</div>
	</section>
	<section class="rules-items">
		<div class="container">
			<article class="clearfix">
				<div class="wow slideInRight text-box side_right" data-wow-duration="1.5s">
					<?php echo the_field('rule1'); ?>
				</div>
				<figure class="wow slideInLeft side_left" data-wow-duration="1.5s">
					<img src="<?php echo the_field('rule1_img'); ?>" alt="ПОДГОТОВКА К ИГРЕ">
				</figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInLeft text-box side_left" data-wow-duration="1.5s">
					<?php echo the_field('rule2'); ?>
				</div>
				<figure class="wow slideInRight side_right" data-wow-duration="1.5s">
					<img src="<?php echo the_field('rule2_img'); ?>" alt="СУПЕРЛИНИИ">
				</figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInRight text-box side_right" data-wow-duration="1.5s">
					<?php echo the_field('rule3'); ?>
				</div>
				<figure class="wow slideInLeft side_left" data-wow-duration="1.5s">
					<img src="<?php echo the_field('rule3_img'); ?>" alt="ЦЕЛЬ ИГРЫ">
				</figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInLeft text-box side_left" data-wow-duration="1.5s">
					<?php echo the_field('rule4'); ?>
				</div>
				<figure class="wow slideInRight side_right" data-wow-duration="1.5s">
					<img src="<?php echo the_field('rule4_img'); ?>" alt="">
				</figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInRight text-box side_right" data-wow-duration="1.5s">
					<?php echo the_field('rule5'); ?>
				</div>
				<figure class="wow slideInLeft side_left" data-wow-duration="1.5s">
					<img src="<?php echo the_field('rule5_img'); ?>" alt="СПЕЦИАЛЬНЫЕ КАРТЫ">
				</figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInLeft text-box side_left" data-wow-duration="1.5s">
					<?php echo the_field('rule6'); ?>
				</div>
				<figure class="wow slideInRight side_right" data-wow-duration="1.5s">
					<img src="<?php echo the_field('rule6_img'); ?>" alt="УГЛОВЫЕ КЛЕТКИ">
				</figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInRight text-box side_right" data-wow-duration="1.5s">
					<?php echo the_field('rule7'); ?>
				</div>
				<figure class="wow slideInLeft side_left" data-wow-duration="1.5s">
					<img src="<?php echo the_field('rule7_img'); ?>" alt="ПУСТАЯ КАРТА">
				</figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInLeft text-box side_left" data-wow-duration="1.5s">
					<?php echo the_field('rule8'); ?>
				</div>
				<figure class="wow slideInRight side_right" data-wow-duration="1.5s">
					<img src="<?php echo the_field('rule8_img'); ?>" alt="ШТРАФНЫЕ САНКЦИИ ">
				</figure>
			</article>
			<a class="btn-rules" href="<?php echo the_field('link1'); ?>" target="_blank">Скачать правила игры</a>
		</div>
	</section>
	<section class="rules-order">
		<div class="container">
			<div class="row clearfix">
				<div class="cols col-6 col-6-md wrap-box">
					<span class="big-text">
						<?php echo the_field('order'); ?>
					</span>
					<?php echo get_order_form(array('wow','slideInLeft','box-form')); ?>
				</div>
				<div class="cols col-6 col-6-md wrap-box">
					<img src="<?php echo the_field('image_f'); ?>">
				</div>

			</div>
		</div>
	</section>
</main>

<?php

get_footer();

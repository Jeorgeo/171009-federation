<?php
/**
 * Template Name: Наши партнеры
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

get_header();

$news = get_posts(
		array(
				'numberposts' => -1,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'partners',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);
?>

<main class="partners">
	<section class="partners-list">
		<div class="container">
			<h2>
				Партнеры игры
			</h2>
			<p> <span class="strong-text">
				Генеральный партнер – Мосигра  (mosigra.ru)
			</span>
			</p>
			<h3>
				Партнеры в городах:
			</h3>
			<div class="flex-row">
				<?php
					foreach ($news as $obj) {
						if($obj->post_name == 'archive'){
								continue;
						}
				 ?>

				<article class="flex-cols col-3">
					<h5><?php echo get_field('city', $obj->ID); ?></h5>
					<p>
						<?php echo $obj->post_title; ?><br>
						Телефон: <?php echo get_field('phone', $obj->ID); ?><br>
						E-mail: <?php echo get_field('mail', $obj->ID); ?>
					</p>
				</article>

			<?php } ?>


			</div>
			<a class="btn-rules btn-partners" href="#">Стать партнером</a>
		</div>
	</section>
	<section class="partners-map">
		<div class="container">
			<h2>
				Карта
			</h2>
			<div class="map-box clearfix">
				<?php echo the_field('map'); ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

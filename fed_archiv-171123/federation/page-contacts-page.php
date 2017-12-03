<?php
/**
 * Template Name: Наши контакты
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
				Контакты
			</h2>
			<div class="row clearfix">
				<div class="cols col-4">
					<?php echo the_field('phone_mail'); ?>
				</div>
				<div class="cols col-8">
					<?php echo the_field('adress'); ?>
				</div>
			</div>
			<h3>
				В «Федерацию» играют:
			</h3>
			<div class="row clearfix">
				<?php
					foreach ($news as $obj) {
						if($obj->post_name == 'archive'){
								continue;
						}
				 ?>

				<article class="cols col-3 col-6-md">
					<h5><?php echo get_field('city', $obj->ID); ?></h5>
					<p>
						<?php echo $obj->post_title; ?><br>
						Телефон: <?php echo get_field('phone', $obj->ID); ?><br>
						E-mail: <?php echo get_field('mail', $obj->ID); ?>
					</p>
				</article>

			<?php } ?>


			</div>
		</div>
	</section>
</main>

<?php
get_footer();

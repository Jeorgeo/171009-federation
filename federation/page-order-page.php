<?php
/**
 * Template Name: Страница заказа
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
?>

<main>
  <section class="order">
    <div class="container">
      <?php echo the_field('order-title'); ?>
      <a name="order"></a>
      <div class="row clearfix">
        <div class="cols col-5 col-6-md wrap-box">
          <p class="box-meet">
            <span class="big-text">
                <?php echo the_field('order'); ?>
            </span>
          </p>
        </div>
        <div class="cols col-5 col-6-md form-col">
          <?php echo get_order_form(array('wow','fadeInRight','box-form')); ?>
        </div>
      </div>
      <?php echo the_field('order-partners'); ?>
      <a class="btn-rules btn-partners" href="<?php echo the_field('link-partner'); ?>">Стать партнером</a>
    </div>
  </section>
</main>

<?php
get_footer();

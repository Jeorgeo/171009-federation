<?php
/**
 * Template Name: Главная страница
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

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick-theme.css"/>
	<?php wp_head(); ?>
</head>
<header class="main-header">
	<div class="main-header__top-box">
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
		<div class="top-header main-top-header">
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
	</div>
  <div class="middle-header">
		<div class="container wow fadeInUp" data-wow-duration="1.5s">
			<?php echo the_field('header_text'); ?>
		</div>
  </div>
  <div class="bottom-header">
		<div class="container">
			<a href="<?php echo the_field('link1'); ?>" class="popup-link">
	      <span class="video_text">Смотреть<br> видео</span>
	      <span class="video_btn"></span>
	    </a>
		</div>
  </div>
  <div class="header__video-wrapp">
    <div class="header__video-box">
       <video class="header__video"   loop autoplay>
           <source src="<?php bloginfo('template_url'); ?>/video/fed_bg-video.mp4" type="video/mp4">
          <source src="<?php bloginfo('template_url'); ?>/video/fed_bg-video.mp4" type="video/webm">
      </video>
    </div>
  </div>
	<div id="follow-box">
		<a class="follow_button" href="#next">Вниз</a>
		<span id="next"></span>
	</div>
</header>
<main class="main">
  <section class="main-intro">
    <div class="row container clearfix">
      <div class="cols col-4 col-6-md wrap-box">
        <?php echo the_field('pole1'); ?>
      </div>
      <div class="cols col-7 col-6-md float_right">
        <a href="<?php echo the_field('link2'); ?>" class="video_frame popup-link">
          <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-map.jpg" alt="Карта России">
          <span class="btn-play">play</span>
        </a>
      </div>
    </div>
    <div class="row container clearfix">
      <div class="cols col-7 col-6-md wrap-box float_right">
        <?php echo the_field('pole2'); ?>
      </div>
      <div class="cols col-4 col-6-md">
        <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-game.jpg" alt="Игра «Федерация»">
      </div>
    </div>
  </section>
  <section class="main-advantages">
    <div class="container">
      <h2>
        Игра «Федерация»:
      </h2>
      <figure>
        <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-friends.png" alt="Игра «Федерация» Объединяет друзей">
        <p>Объединяет друзей</p>
      </figure>
      <figure>
        <img class="central-block" src="<?php bloginfo('template_url'); ?>/pics/fed_main-education.png" alt="Игра «Федерация» Развивает и обучает">
        <p>Развивает и обучает</p>
      </figure>
      <figure class="last-block">
        <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-community.png" alt="Игра «Федерация» Cтирает границы между поколениями">
        <p>Стирает границы между поколениями</p>
      </figure>
    </div>
  </section>
  <section class="main-life">
    <div class="container">
      <h2>
        Жизнь игры
      </h2>
      	<div class="main-slider">
					<div class="slider-box">
						<?php echo the_field('link5'); ?>
					</div>
				</div>
      </div>
      <p class="meet-social">
        Присоединяйтесь к нам в социальных сетях
      </p>
			<div class="box-social">
				<?php dynamic_sidebar( 'social_vk' ); ?>
				<?php dynamic_sidebar( 'social_instagram' ); ?>
				<?php dynamic_sidebar( 'social_ok' ); ?>
				<?php dynamic_sidebar( 'social_tw' ); ?>
				<?php dynamic_sidebar( 'social_tel' ); ?>
			</div>
    </div>
  </section>
  <section class="main-steps">
    <div class="container">
      <h2>Ход игры</h2>
      <div class="mobile-version">
        <figure class="main-step step-1">
          <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process1.png" alt="">
          <p>
            <?php echo the_field('step1'); ?>
					</p>
          <span>1</span>
        </figure>
        <figure class="main-step step-2">
          <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process2.png" alt="">
					<p>
            <?php echo the_field('step2'); ?>
					</p>
          <span>2</span>
        </figure>
        <figure class="main-step step-3">
          <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process3.png" alt="">
					<p>
            <?php echo the_field('step3'); ?>
					</p>
          <span>3</span>
        </figure>
        <figure class="main-step step-4">
          <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process4.png" alt="">
					<p>
            <?php echo the_field('step4'); ?>
					</p>
          <span>4</span>
        </figure>
        <figure class="main-step step-5">
          <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process5.png" alt="">
					<p>
            <?php echo the_field('step5'); ?>
					</p>
          <span>5</span>
        </figure>
        <figure class="main-step victory">
          <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-victory.png" alt="">
					<p>
            <?php echo the_field('step6'); ?>
					</p>
        </figure>
      </div>
      <div class="pc-version">
        <div class="row clearfix">
          <div class="cols col-4">
            <figure class="wow fadeInLeft main-step step-2" data-wow-duration="2.5s">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process2.png" alt="">
							<p>
		            <?php echo the_field('step2'); ?>
							</p>
              <span>2</span>
            </figure>
            <figure class="wow fadeInLeft main-step step-1" data-wow-duration="2.5s">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process1.png" alt="">
							<p>
		            <?php echo the_field('step1'); ?>
							</p>
              <span>1</span>
            </figure>
          </div>
          <div class="cols col-4">
            <figure class="wow fadeInDown main-step step-3" data-wow-duration="1.5s">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process3.png" alt="">
							<p>
		            <?php echo the_field('step3'); ?>
							</p>
              <span>3</span>
            </figure>
            <figure class="wow fadeInUp main-step victory" data-wow-duration="1.5s">
              <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-victory.png" alt="">
							<p>
		            <?php echo the_field('step6'); ?>
							</p>
            </figure>
          </div>
          <div class="cols col-4">
            <figure class="wow fadeInRight main-step step-4" data-wow-duration="1.5s">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process4.png" alt="">
							<p>
		            <?php echo the_field('step4'); ?>
							</p>
              <span>4</span>
            </figure>
            <figure class="wow fadeInRight main-step step-5" data-wow-duration="1.5s">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process5.png" alt="">
							<p>
		            <?php echo the_field('step5'); ?>
							</p>
              <span>5</span>
            </figure>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section class="main-rules">
    <div class="container row clearfix">
      <div class="cols col-5 col-6-md wrap-box">
        <img class="hidden-block_768" src="<?php bloginfo('template_url'); ?>/pics/fed_main-rules.jpg" alt="Правила игры">
        <a class="btn-rules" href="<?php echo the_field('link4'); ?>" target="_blank">Правила игры</a>
      </div>
      <div class="cols col-7 col-6-md float_right">
        <a class="video_frame popup-link" href="<?php echo the_field('link3'); ?>">
          <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-video.jpg" alt="Правила игры">
          <span class="btn-play">play</span>
        </a>
      </div>
    </div>
  </section>
  <section class="main-order">
    <div class="container">
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
          <div class="wow fadeInRight box-form ">
            <form class="main-form" method="post">
              <h4>
                Оформить заказ
              </h4>
							<!-- Hidden Required Fields -->
							<input type="hidden" name="project_name" value="рф-игра.рф">
							<input type="hidden" name="admin_email" value="rf-igra@mail.ru">
							<input type="hidden" name="form_subject" value="Заявка на покупку">
							<!-- END Hidden Required Fields -->
              <input type="text" name="name" value="" placeholder="ФИО*" required>
              <input id="phone" type="text" name="phone" value="" placeholder="Контактный телефон*" required>
              <input type="text" name="email" value="" placeholder="E-mail*" pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})" required>
              <input type="text" name="adress" value="" placeholder="Адрес доставки*" required>
              <span class="price">
                Всего: 1690 руб.
              </span>
              <button class="box-form__btn"type="submit" name="order-btn">Перейти к оплате</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
	<div class="wrap"></div>
	<div class="video-box popup-question">
		<div class="popup-question-close">
	    close
	  </div>

	</div>
</main>


<?php
get_footer();

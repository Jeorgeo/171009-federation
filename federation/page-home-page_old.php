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

	<?php wp_head(); ?>
</head>

<header class="main-header">
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
    <div class="middle-header">
      <h1>
        Игра «Федерация»
      </h1>
      <p>
        Мы живем в самой большой стране
      </p>
    </div>
    <div class="bottom-header">
      <a href="#">
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
  <span class="follow_button">Вниз</span>
</header>
<main class="main">
  <section class="main-intro">
    <div class="row container clearfix">
      <div class="cols col-4 col-6-md wrap-box">
        <h3>
          Мы любим путешествовать по разным странам и открывать для себя новые города.
        </h3>
        <p><span class="big-text">
          А на сколько хорошо мы знаем свою любимую Россию?
        </span></p>
        <p>
          Мы живем в стране, территория которой, самая большая в мире. Жаль, что многие из нас знают, где находится Неаполь или Нью-Йорк, но не знают регионы и города своей бескрайней Родины...
        </p>
      </div>
      <div class="cols col-7 col-6-md float_right">
        <a class="video_frame" href="#">
          <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-map.jpg" alt="Карта России">
          <span class="btn-play">play</span>
        </a>
      </div>
    </div>
    <div class="row container clearfix">
      <div class="cols col-7 col-6-md wrap-box float_right">
        <p>
          Игра «Федерация» открывает всем, не зависимо от возраста, возможность изучить города и регионы России.
        </p>
        <p>
          Играя вам не будет скучно, как это часто происходит на уроках географии, наоборот вы полностью будете увлечены игровым процессом.
        </p>
        <p><span class="big-text">
          Мы вам это гарантируем!
        </span></p>
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
      <figure>
        <img class="last-block" src="<?php bloginfo('template_url'); ?>/pics/fed_main-community.png" alt="Игра «Федерация» Cтирает границы между поколениями">
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
        <div class="main-slider__slide hidden-slide">
          <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-slide1.png" alt="">
        </div>
        <div class="main-slider__slide active-slide">
          <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-slide1.png" alt="">
        </div>
        <div class="main-slider__slide hidden-slide">
          <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-slide1.png" alt="">
        </div>
        <span class="main-slider__btn btn-prev"></span>
        <span class="main-slider__btn btn-next"></span>

      </div>
      <p>
        Присоединяйтесь к нам в социальных сетях
      </p>
      <div class="box-social">
        <span class="social-icons social_vk"><a href="https://vk.com/id402797950">В контакте</a></span>
        <span class="social-icons social_instagram"><a href="https://www.instagram.com/rusfedgame">Инстаграмм</a></span>
        <span class="social-icons social_ok"><a href="https://ok.ru/profile/570383914077">Одноклассники</a></span>
        <span class="social-icons social_tw"><a href="https://twitter.com/rfigra">Твиттер</a></span>
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
            Каждой клетке с названием региона соответствует карта с названием его административного центра (города
          </p>
          <span>1</span>
        </figure>
        <figure class="main-step step-2">
          <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process2.png" alt="">
          <p>
            У каждого игрока на руках фишки и 6 карт. Когда подходит его очередь, игрок открывает одну из своих карт
          </p>
          <span>2</span>
        </figure>
        <figure class="main-step step-3">
          <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process3.png" alt="">
          <p>
            Открыв карту с названием города, игрок ставит фишку на клетку с соответствующим регионом на поле.  Открытая карта сбрасывается.
          </p>
          <span>3</span>
        </figure>
        <figure class="main-step step-4">
          <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process4.png" alt="">
          <p>
            Затем игрок берет новую карту из общей колоды, взамен сброшенной, после чего ход переходит к следующему игроку.
          </p>
          <span>4</span>
        </figure>
        <figure class="main-step step-5">
          <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process5.png" alt="">
          <p>
            По ходу игры поле заполняется фишками разных цветов. Ряд из шести фишек одного цвета называется суперлинией.
          </p>
          <span>5</span>
        </figure>
        <figure class="main-step victory">
          <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-victory.png" alt="">
          <p>
            Побеждает та команда или игрок, которые первыми построили три суперлинии.
          </p>
        </figure>
      </div>
      <div class="pc-version">
        <div class="row clearfix">
          <div class="cols col-4">
            <figure class="main-step step-2">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process2.png" alt="">
              <p>
                У каждого игрока на руках фишки и 6 карт. Когда подходит его очередь, игрок открывает одну из своих карт
              </p>
              <span>2</span>
            </figure>
            <figure class="main-step step-1">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process1.png" alt="">
              <p>
                Каждой клетке с названием региона соответствует карта с названием его административного центра (города
              </p>
              <span>1</span>
            </figure>
          </div>
          <div class="cols col-4">
            <figure class="main-step step-3">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process3.png" alt="">
              <p>
                Открыв карту с названием города, игрок ставит фишку на клетку с соответствующим регионом на поле.  Открытая карта сбрасывается.
              </p>
              <span>3</span>
            </figure>
            <figure class="main-step victory">
              <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-victory.png" alt="">
              <p>
                Побеждает та команда или игрок, которые первыми построили три суперлинии.
              </p>
            </figure>
          </div>
          <div class="cols col-4">
            <figure class="main-step step-4">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process4.png" alt="">
              <p>
                Затем игрок берет новую карту из общей колоды, взамен сброшенной, после чего ход переходит к следующему игроку.
              </p>
              <span>4</span>
            </figure>
            <figure class="main-step step-5">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process5.png" alt="">
              <p>
                По ходу игры поле заполняется фишками разных цветов. Ряд из шести фишек одного цвета называется суперлинией.
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
      <div class="cols col-4 col-6-md wrap-box">
        <img class="hidden-block_768" src="<?php bloginfo('template_url'); ?>/pics/fed_main-rules.jpg" alt="Правила игры">
        <a class="btn-rules" href="#">Правила игры</a>
      </div>
      <div class="cols col-7 col-6-md float_right">
        <a class="video_frame" href="#">
          <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-video.jpg" alt="Правила игры">
          <span class="btn-play">play</span>
        </a>
      </div>
    </div>
  </section>
  <section class="main-order">
    <div class="container">
      <div class="row clearfix">
        <div class="cols col-5 col-6-md wrap-box">
          <p class="box-meet">
            <span class="big-text">
              Где бы Вы ни были, в любой точке нашей необъятной Родины, мы позаботимся, чтобы игра оказалась у Вас в идеальном состоянии.  Стоимость доставки мы берём на себя.
            </span>
          </p>
        </div>
        <div class="cols col-5 col-6-md">
					<a name="order"></a>
          <div class="box-form">
            <form class="main-form" method="post">
              <h4>
                Оформить заказ
              </h4>
              <input type="text" name="name" value="" placeholder="ФИО*">
              <input type="text" name="phone" value="" placeholder="Контактный телефон*">
              <input type="text" name="email" value="" placeholder="E-mail*">
              <input type="text" name="adress" value="" placeholder="Адрес доставки*">
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
</main>


<?php
get_footer();

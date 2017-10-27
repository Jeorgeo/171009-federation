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
		<div class="top-header main-top-header">
			<div class="container clearfix">
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
	</div>
  <div class="middle-header">
		<div class="container wow fadeInUp" data-wow-duration="1.5s">
			<h1>
	       Игра «Федерация»
	    </h1>
	    <p>
	      Мы живем в самой большой стране
      </p>
		</div>
  </div>
  <div class="bottom-header">
		<div class="container">
			<a href="#" class="<?php echo the_field('link1'); ?>">
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
        <h3>
          Мы любим путешествовать по разным странам и открывать для себя новые города.
        </h3>
        <span class="big-text">
          А на сколько хорошо мы знаем свою любимую Россию?
        </span>
        <p>
          Мы живем в стране, территория которой, самая большая в мире. Жаль, что многие из нас знают, где находится Неаполь или Нью-Йорк, но не знают регионы и города своей бескрайней Родины...
        </p>
      </div>
      <div class="cols col-7 col-6-md float_right">
        <a href="#" class="video_frame <?php echo the_field('link2'); ?>">
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
        <span class="big-text">
          Мы вам это гарантируем!
        </span>
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
						<!--Здесь вставляется слайдер!-->
					</div>
				</div>
      </div>
      <p class="meet-social">
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
            <figure class="wow fadeInLeft main-step step-2" data-wow-duration="2.5s">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process2.png" alt="">
              <p>
                У каждого игрока на руках фишки и 6 карт. Когда подходит его очередь, игрок открывает одну из своих карт
              </p>
              <span>2</span>
            </figure>
            <figure class="wow fadeInLeft main-step step-1" data-wow-duration="2.5s">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process1.png" alt="">
              <p>
                Каждой клетке с названием региона соответствует карта с названием его административного центра (города
              </p>
              <span>1</span>
            </figure>
          </div>
          <div class="cols col-4">
            <figure class="wow fadeInDown main-step step-3" data-wow-duration="1.5s">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process3.png" alt="">
              <p>
                Открыв карту с названием города, игрок ставит фишку на клетку с соответствующим регионом на поле.  Открытая карта сбрасывается.
              </p>
              <span>3</span>
            </figure>
            <figure class="wow fadeInUp main-step victory" data-wow-duration="1.5s">
              <img src="<?php bloginfo('template_url'); ?>/pics/fed_main-victory.png" alt="">
              <p>
                Побеждает та команда или игрок, которые первыми построили три суперлинии.
              </p>
            </figure>
          </div>
          <div class="cols col-4">
            <figure class="wow fadeInRight main-step step-4" data-wow-duration="1.5s">
              <img src="<?php bloginfo('template_url'); ?>/img/fed_main-icon-process4.png" alt="">
              <p>
                Затем игрок берет новую карту из общей колоды, взамен сброшенной, после чего ход переходит к следующему игроку.
              </p>
              <span>4</span>
            </figure>
            <figure class="wow fadeInRight main-step step-5" data-wow-duration="1.5s">
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
      <div class="cols col-5 col-6-md wrap-box">
        <img class="hidden-block_768" src="<?php bloginfo('template_url'); ?>/pics/fed_main-rules.jpg" alt="Правила игры">
        <a class="btn-rules" href="<?php echo the_field('link4'); ?>" target="_blank">Правила игры</a>
      </div>
      <div class="cols col-7 col-6-md float_right">
        <a class="video_frame <?php echo the_field('link3'); ?>" href="#">
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
              Где бы Вы ни были, в любой точке нашей необъятной Родины, мы позаботимся, чтобы игра оказалась у Вас в идеальном состоянии.  Стоимость доставки мы берём на себя.
            </span>
          </p>
        </div>
        <div class="cols col-5 col-6-md form-col">
          <div class="wow fadeInRight box-form ">
            <form class="main-form" method="post">
              <h4>
                Оформить заказ
              </h4>
              <input type="text" name="name" value="" placeholder="ФИО*">
              <input id="phone" type="text" name="phone" value="" placeholder="Контактный телефон*">
              <input type="text" name="email" value="" placeholder="E-mail*" pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})">
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

<template id="img_slider" style="display: none;">
	<div class="slide">
		<img class="temlate-img" src="" alt="">
	</div>
</template>

<?php

function get_vk_browser($url='',$uagent=''){
	if(empty($uagent)){$uagent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)";}
	$ch = curl_init( $url );
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_USERAGENT, $uagent);  // useragent
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	$err = curl_errno( $ch );
	if(!empty($err)){
		$html='';
	}
	$html = curl_exec($ch);
	curl_close( $ch );
	return $html;
};

	$token = '1bfc828742cd6bf2de9adf82d27921b19f671cb73ca65327daacd6f15be9270f38f8bda82b06a7f8090a8';
	$board_getComments = 'https://api.vk.com/method/photos.get?owner_id=-154864687&album_id=247785027&count=100&access_token='.$token.'&v=5.68';
	$board_getComments_result = get_vk_browser($board_getComments);
?>

<script type="text/javascript">
var sliderListElement = document.querySelector('.slider-box');
var slideTemplate = document.querySelector('#img_slider').content;
var album = '<?php echo $board_getComments_result;?>';
var data = eval("(" + album + ")");
var sliderCount = data.response.count;
var sliderArr = data.response.items;

for (var i = 0; i < sliderCount; i++) {
  var slideElement = slideTemplate.cloneNode(true);
	slideElementCurrent = slideElement.querySelector('.temlate-img');
	slideElementCurrent.src = sliderArr[i].photo_604;
  sliderListElement.appendChild(slideElement);
}

</script>

<?php
get_footer();

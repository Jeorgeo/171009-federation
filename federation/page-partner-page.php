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
			<h2>
				Стать партнером
			</h2>
			<p><span class="big-text">
				Вы энергичны и амбициозны?<br>
Любите веселые компании и открыты к новым знакомствам и возможностям?<br>
Тогда мы приглашаем Вас стать партнером игры «ФЕДЕРАЦИЯ»!
			</span></p>
		</div>
	</section>
	<section class="partner-game">
		<div class="row container clearfix">
			<div class="cols col-4 col-6-md">
				<img src="<?php bloginfo('template_url'); ?>/pics/fed_main-victory.png" alt="">
			</div>
			<div class="cols col-8 col-6-md">
				<h3>
					Игра «Федерация»:
				</h3>
				<ul>
					<li><span>1</span>Объединяет людей</li>
					<li><span>2</span>Стирает границы между поколениями</li>
					<li><span>3</span>Предоставляет возможность отлично проводить досуг и при этом зарабатывать деньги</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="partner-capability">
		<div class="container">
			<h3>
				Ваши возможности вместе с нами:
			</h3>
			<ul>
				<li>Вы становитесь дистрибьютором интересной игры, не имеющей аналогов в России! </li>
				<li>Управление своим собственным бизнесом и увеличение вашего текущего дохода</li>
				<li>Свободная организация своего рабочего времени в соответствии с вашими желаниями</li>
				<li>Карьерный рост до Национального Дистрибьютора игры «ФЕДЕРАЦИЯ»</li>
				<li>Потрясающая возможность стать настоящим патриотом России, не на словах, а на деле!</li>
			</ul>
		</div>
	</section>
	<section class="partner-process">
		<div class="container">
			<h3>
				Как стать нашим партнером?
			</h3>
			<ul>
				<li><span class="list partner-process__number"><span class="list-number">1</span></span><span class="list partner-process__text">Вы оставляете заявку на сайте. Получаете от нас положительный ответ и <a href="#">договор</a> дистрибьютора.</span></li>
				<li><span class="list partner-process__number"><span class="list-number">2</span></span><span class="list partner-process__text">Заполняете свои данные в договоре, распечатываете (в 2-х экземплярах) и отправляете нам в офис письмом. Производите оплату игры
на расчетный счет с 50% скидкой (<a href="#">варианты платежа</a>).</span></li>
				<li><span class="list partner-process__number"><span class="list-number">3</span></span><span class="list partner-process__text">Получив договор, мы подписываем его и оправляем вам вместе с одним экземпляром игры на ваш почтовый адрес.</span></li>
				<li><span class="list partner-process__number"><span class="list-number">4</span></span><span class="list partner-process__text">Вы самостоятельно выбираете время, место и количество участников для проведения игры.</span></li>
				<li><span class="list partner-process__number"><span class="list-number">5</span></span><span class="list partner-process__text">Проведя игру вы собираете заявки и оплату от желающих купить игру, делаете заказ и производите оплату.</span></li>
				<li><span class="list partner-process__number"><span class="list-number">6</span></span><span class="list partner-process__text">Мы доставляем вам, то количество игр, которое вы заказали (на адрес который указан в договоре).</span></li>
				<li><span class="list partner-process__number"><span class="list-number">7</span></span><span class="list partner-process__text">Получив заказанные экземпляры игры вы передаете их покупателям.</span></li>
			</ul>
			<p>
				Также вы можете заранее сделать пред заказ и оплату экземпляров игры,
чтобы продать их на игре, которую планируете провести.
			</p>
			<p><span class="strong-text">
				Ваш результат зависит только от Вас!
Начните прямо сейчас – Создайте свой клуб игры «ФЕДЕРАЦИЯ»!
			</span></p>
		</div>
	</section>
	<section class="partner-order">
		<div class="container">
			<div class="row clearfix">
				<div class="cols col-5 col-6-md wrap-box">
					<p class="box-meet">
						<span class="big-text">
							Узнать подробности Вы можете позвонив по номеру +7 (925) 510-72-35
или оставив заявку на сайте.
После первого контакта
у вас будет персональный менеджер
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
							<input type="text" name="phone" value="" placeholder="Контактный телефон*">
							<input type="text" name="email" value="" placeholder="E-mail*">
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

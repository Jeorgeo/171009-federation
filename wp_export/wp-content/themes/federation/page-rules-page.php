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
				В игре могут участвовать 2, 3, 4, 6, 8, 9, 10 или 12 человек. Если соперников двое или трое, они играют каждый за себя. При большем количестве участников, они делятся на две или три равные команды.
			</p>
			<h3>
				ИГРОВЫЕ ПРЕДМЕТЫ:
			</h3>
			<figure>
				<p>игровое поле</p>
				<img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-12.jpg" alt="игровое поле">
			</figure>
			<figure class="central-block">
				<p>колода из 175 карт</p>
				<img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-11.jpg" alt="колода из 175 карт">
			</figure>
			<figure>
				<p>фишки трех цветов</p>
				<img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-9.jpg" alt="фишки трех цветов">
			</figure>
		</div>
	</section>
	<section class="rules-items">
		<div class="container">
			<article class="clearfix">
				<div class="wow slideInRight text-box side_right" data-wow-duration="1.5s">
					<h5>ПОДГОТОВКА К ИГРЕ</h5>
					<p>Положите игровое поле на ровную поверхность. Найдите место, достаточное, чтобы рядом разместить общую колоду карт, фишки, а также сброшенные карты. Каждая команда выбирает себе фишки одного цвета.
Расположитесь вокруг игрового поля таким образом, чтобы представители команд равномерно чередовались друг с другом.
Один из участников перемешивает колоду и раздает по 6 карт каждому игроку. Оставшиеся карты – это общая колода, которая далее будет использована в игре.</p>
				</div>
				<figure class="wow slideInLeft side_left" data-wow-duration="1.5s"><img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-8.jpg" alt="ПОДГОТОВКА К ИГРЕ"></figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInLeft text-box side_left" data-wow-duration="1.5s">
					<h5>СУПЕРЛИНИИ</h5>
					<p>По ходу игры поле заполняется фишками разных цветов: одна клетка - одна фишка. Сначала фишки кладутся гербом вверх, флагом вниз.
Непрерывный ряд из шести фишек одного цвета называется суперлинией. Суперлиния может быть построена по вертикали, горизонтали или диагонали. Как только фишки сформировали суперлинию, они переворачиваются флагом вверх и уже не могут быть смещены со своей позиции. Суперлинии одного цвета могут пересекаться. В этом случае фишка, расположенная на пересечении суперлиний, принадлежит одновременно каждой из них.</p>
				</div>
				<figure class="wow slideInRight side_right" data-wow-duration="1.5s"><img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-7.jpg" alt="СУПЕРЛИНИИ"></figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInRight text-box side_right" data-wow-duration="1.5s">
					<h5>ЦЕЛЬ ИГРЫ</h5>
					<p>Побеждает та команда или игрок, которые первыми построили три суперлинии. Если карты закончились, а цель не достигнута, побеждает команда, построившая наибольшее число суперлиний, или объявляется ничья.</p>
					<h5>ОЧЕРЕДНОСТЬ ХОДОВ</h5>
					<p>Право хода передается по кругу. Начинает игрок, находящийся слева от того, кто раздавал карты. Далее очередь переходит по часовой стрелке к каждому следующему игроку. </p>
				</div>
				<figure class="wow slideInLeft side_left" data-wow-duration="1.5s"><img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-6.jpg" alt="ЦЕЛЬ ИГРЫ"></figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInLeft text-box side_left" data-wow-duration="1.5s">
					<h5>ПРИНЦИП ИГРЫ</h5>
					<p>Каждой клетке с названием региона соответствует карта с названием его административного центра (города). Все пары «регион/город» дублируются,
что дает игрокам дополнительную свободу при выборе стратегии.
У игрока на руках 6 карт. Когда подходит его очередь, игрок открывает одну из своих карт. Открывая карту с названием города, игрок ставит фишку на клетку
с соответствующим регионом. Выбрать он может лишь ту клетку, которая еще не занята противником. Открытая карта сбрасывается, то есть выводится из игры,
и остается лежать «лицом вверх» (каждый игрок постепенно накапливает свою колоду сброшенных карт). Затем игрок должен взять новую карту из общей колоды, взамен сброшенной, после чего ход переходит к следующему игроку.
Возможна ситуация, при которой в общей колоде не останется ни одной карты. В этом случае игра продолжается с теми картами, которые остаются на руках.</p>
				</div>
				<figure class="wow slideInRight side_right" data-wow-duration="1.5s"><img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-5.jpg" alt=""></figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInRight text-box side_right" data-wow-duration="1.5s">
					<h5>СПЕЦИАЛЬНЫЕ КАРТЫ</h5>
					<p>Кроме обычных карт с названиями городов, в колоде есть специальные карты, дающие игроку дополнительные возможности. Специальные карты сбрасываются во время своего хода также, как и все остальные.
– Четыре карты с флагом (+1). Наличие такой карты позволяет игроку поставить свою фишку на любую свободную клетку.
– Четыре карты с гербом (-1). Эта карта позволяет убрать любую фишку противника (но только в том случае, если фишка противника еще не перевернута, то есть не является частью суперлинии).
– Три карты со звездой, указывающие на города федерального значения — Москву, Санкт-Петербург и Севастополь (-1/+1). Такая карта позволяет заменить любую фишку противника своей (фишка противника при этом не должна являться частью уже построенной суперлинии).</p>
				</div>
				<figure class="wow slideInLeft side_left" data-wow-duration="1.5s"><img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-4.jpg" alt="СПЕЦИАЛЬНЫЕ КАРТЫ"></figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInLeft text-box side_left" data-wow-duration="1.5s">
					<h5>УГЛОВЫЕ КЛЕТКИ</h5>
					<p>В углах поля расположены четыре клетки (с серым гербом), которые являются универсальными. Фишки на них не ставятся. Любая команда должна воспринимать угловую клетку так, словно на ней уже стоит фишка нужного ей цвета. Фактически это позволяет рассматривать ее как шестую фишку суперлинии. При этом одна и та же угловая клетка может использоваться разными командами одновременно.</p>
				</div>
				<figure class="wow slideInRight side_right" data-wow-duration="1.5s"><img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-3.jpg" alt="УГЛОВЫЕ КЛЕТКИ"></figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInRight text-box side_right" data-wow-duration="1.5s">
					<h5>ПУСТАЯ КАРТА</h5>
					<p>Во время игры может сложиться ситуация, когда обе клетки с названием одного региона уже закрыты, а карта с соответствующим городом все еще не сброшена. Такая карта называется пустой. Если вы обнаружили у себя пустую карту, вам следует прежде дождаться своей очереди. Затем вы показываете пустую карту всем участникам игры, сбрасываете ее и берете новую карту из общей колоды. После этого вы делаете свой ход.</p>
				</div>
				<figure class="wow slideInLeft side_left" data-wow-duration="1.5s"><img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-2.jpg" alt="ПУСТАЯ КАРТА"></figure>
			</article>
			<article class="clearfix">
				<div class="wow slideInLeft text-box side_left" data-wow-duration="1.5s">
					<h5>ШТРАФНЫЕ САНКЦИИ </h5>
					<p>Если вы забыли взять карту из общей колоды, а следующий участник игры уже сделал свой ход, то вам придется заканчивать игру с меньшим количеством карт на руках.
Игроки одной команды не имеют права переговариваться или подавать друг другу знаки с целью повлиять на ход игры. В случае нарушения этого правила все представители провинившейся команды должны выложить по одной карте (по своему выбору) и заканчивать игру с меньшим количеством карт на руках. Освободившиеся таким образом карты смешиваются с общей колодой. </p>
				</div>
				<figure class="wow slideInRight side_right" data-wow-duration="1.5s"><img src="<?php bloginfo('template_url'); ?>/pics/fed_rules-img-1.jpg" alt="ШТРАФНЫЕ САНКЦИИ "></figure>
			</article>
			<a class="btn-rules" href="<?php echo the_field('link1'); ?>">Скачать правила игры</a>
		</div>
	</section>
	<section class="rules-order">
		<div class="container">
			<div class="row clearfix">
				<div class="cols col-6 col-6-md wrap-box">
					<span class="big-text">
						Вы можете заказать игру на нашем сайте, заполнив форму ниже. Доставка в любую точку России в подарок!
					</span>
					<div class="wow slideInLeft box-form">
						<form class="main-form" action="index.html" method="post">
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
				<div class="cols col-6 col-6-md wrap-box">
					<img src="<?php bloginfo('template_url'); ?>/pics/fed_ruls-img-1.png" alt="">
				</div>

			</div>
		</div>
	</section>
</main>

<?php

get_footer();

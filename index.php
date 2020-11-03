<!DOCTYPE html>
<html>
	<head>
		<title>Тест</title>
		<meta charset="utf-8">

		<?php
			require_once "php/check_mobile.php";
			if ( check_mobile() ) {
				?>
					<link rel="stylesheet" type="text/css" href="styles/mobile/styles.css">
					<link rel="stylesheet" type="text/css" href="styles/mobile/main.css">
				<?php
			}
			else {
				?>
					<link rel="stylesheet" type="text/css" href="styles/styles.css">
					<link rel="stylesheet" type="text/css" href="styles/main.css">
				<?php
			}
		?>
	</head>
	<body>
		<header>
			<img class="logo_lifehacker" src="images/logo_lifehacker.svg">
			<img class="logo_cordiant" src="images/logo_cordiant.svg">
		</header>
		<main>
			<div class="main_block">
				<div class="title">
					<p>Узнаете ли вы Россию</p>
					<p>по дорогам?</p>
				</div>
				<div class="description">
					<p class="text">Мы составили этот тест вместе с производителем шин <a href="https://cordiant.ru/">Cordiant</a>, чтобы вы проверили, сможете ли отличить российские дороги от остальных. Активируйте внутреннего Шерлока и вперёд! Пройдёте тест до конца — получите <a>скидку 15%</a> на зимнюю резину.</p>
					<button class="start_button" onclick="location.href = 'test.php'">Пройти тест!</button>
				</div>
			</div>
		</main>
		<footer>
			<div class="social">
				<a href="https://twitter.com/ru_lh?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="item" target="blank"><img src="images/social/twitter.svg"></a>
				<a href="https://vk.com/lifehacker_ru" class="item" target="blank"><img src="images/social/vk.svg"></a>
				<a href="https://www.facebook.com/lifehacker.ru" class="item" target="blank"><img src="images/social/facebook.svg"></a>
			</div>
			<div class="madeby">
				<p class="text"><a href="https://lifehacker.ru/" target="blank">Лайфхакер</a> | <a href="https://cordiant.ru/" target="blank">Cordiant</a> © 2020</p>
			</div>
		</footer>
	</body>
</html>
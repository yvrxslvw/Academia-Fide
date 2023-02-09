<?php session_start(); require_once '../assets/vendor/init.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="shortcut icon" href="/assets/images/ico.png" type="image/png">
	<title>Academia Fide</title>
</head>
<body>
	<div class="wrapper">
		<div class="cookie _hidden">
			<img src="/assets/images/cookie.png">
			<h3>Файлы cookie</h3>
			<div class="cookie__body">
				<p>Этот веб-сайт использует файлы cookie, чтобы обеспечить Вам максимальное удобство на нашем веб-сайте.</p>
				<button>Принять</button>
				<a href="/ru/cookie">Узнать больше</a>
			</div>
			<div class="cookie__error"><p>Cookie не были установлены. Разрешите своему браузеру устанавливать cookie.</p></div>
		</div>
		<header>
			<div class="container">
				<div class="logo__row">
					<a href="/ru"><img src="/assets/images/logo.png"></a>
					<p class="header__number">
						<i class="fa fa-mobile"></i>
						<a href="tel:+34722369868">+34 722 369 868</a>
					</p>
				</div>
				<div class="header__menu">
					<button class="menu__bars"><i class="fa fa-bars"></i></button>
					<div class="menu__body">
						<div hidden class="menu__title">Меню</div>
						<div class="menu__item"><a href="/ru">Начало</a></div>
						<div class="menu__item"><a href="/ru/about">О нас</a></div>
						<div class="menu__item"><a href="/ru/doing">Что мы делаем</a></div>
						<div class="menu__item"><a href="/ru/classes">Активные еженедельные занятия</a></div>
						<div class="menu__item"><a href="/ru/shop">Магазин</a></div>
						<div class="menu__item"><a href="/ru/terms">Юридические термины</a></div>
						<div class="menu__item"><a href="/ru/contact">Связь с нами</a></div>
						<nav class="lang">
							<button class="lang__button">Язык <i class="fa fa-bars"></i></button>
							<ul hidden class="lang__list">
								<li><button onclick="changeLanguage('es')">Español</button></li>
								<li><button onclick="changeLanguage('en')">English</button></li>
								<li><button onclick="changeLanguage('ru')">Русский</button></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<main>
			<div class="slider">
				<img class="_active" src="/assets/images/chess1.jpg">
				<img src="/assets/images/chess2.jpg">
				<img src="/assets/images/chess3.jpg">
				<div class="slider__body">
					<div class="slider__item _active">
						<h2>Высокоэффективные еженедельные занятия</h2>
						<h3>Онлайн групповые занятия Академии Fide предназначенные для турнирных игроков, особенно рекомендуемые для игроков от 2000 до 2400 рейтинга...</h3>
						<a href="/ru/classes">УЗНАТЬ БОЛЬШЕ</a>
					</div>
					<div class="slider__item">
						<h2>О НАС</h2>
						<h3>Наша история после многих лет тренерской работы...</h3>
						<a href="/ru/about">УЗНАТЬ БОЛЬШЕ</a>
					</div>
					<div class="slider__item">
						<h2>МАГАЗИН</h2>
						<h3>Теперь вы можете увидеть все семинары, проводимые в Academia Fide...</h3>
						<a href="/ru/shop">УЗНАТЬ БОЛЬШЕ</a>
					</div>
					<div class="slider__nav">
						<button class="nav _active" id="navFirst"></button>
						<button class="nav" id="navSecond"></button>
						<button class="nav" id="navThird"></button>
					</div>
				</div>
			</div>

			<div class="description">
				<div class="container">
					<div class="description__row">
						<div class="description__item">
							<div class="description__img"><img src="/assets/images/chess1.jpg"></div>
							<h3>ВЫСОКОЭФФЕКТИВНЫЕ ЕЖЕНЕДЕЛЬНЫЕ ЗАНЯТИЯ</h3>
							<h4>Групповые онлайн-классы Академии Fide Предназначены для турнирных игроков, особенно рекомендуется для игроков с рейтингом между 2000 и 2400. Различные темы разных фаз игры будут изучаться в основном посредством игрового анализа. Будет применен практический подход, ориентированный на решение проблем, с которыми мы сталкиваемся в <a href="/ru/classes">[...]</a></h4>
						</div>
						<div class="description__item">
							<div class="description__img"><img src="/assets/images/chess2.jpg"></div>
							<h3>О НАС</h3>
							<h4>Наша история После многих лет работы тренерами MF и FT Адриан Рандаццо и GM и FT Фернандо Перальта решили объединить усилия в проекте, который позволил бы нам оптимально передать наши знания и опыт. Видение Адриана, имеющего большой опыт работы тренером и преподавателем, дополняется видением <a href="/ru/about">[...]</a></h4>
						</div>
						<div class="description__item">
							<div class="description__img"><img src="/assets/images/chess3.jpg"></div>
							<h3>МАГАЗИН</h3>
							<h4>Теперь вы можете увидеть все семинары, проводимые в Academia Fide, а также получить качественные технические видео, сделанные нашими мастерами и гроссмейстерами. Мы даем вам возможность оплатить их различными способами, такими как безопасная оплата с помощью дебетовой / кредитной карты, Paypal или банковского перевода <a href="/ru/shop">[...]</a></h4>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="content__row">
					<div class="content">
						<?php
							$result = mysqli_query($connect, "SELECT * FROM `latest posts`");
						
							for($i = 0; $i < mysqli_num_rows($result); $i++) {
								$row = mysqli_fetch_assoc($result);

								echo '<div class="post__item">';
									echo '<img src="' . $row['image'] . '">';
									echo '<h2>' . $row['title_ru'] . '...</h2>';
									echo '<a href="classes/" class="item__readMore">Узнать больше</a>';
								echo '</div>';
							}
						?>
					</div>
					<div class="sidebar">
						<div class="donate">
							<div class="donate__title">Поддержать нас</div>
							<div class="donate__widget">
								<form action="https://www.paypal.com/donate" method="post" target="_top">
									<input type="hidden" name="hosted_button_id" value="4A25D4GBUZYWW" />
									<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Botón Donar con PayPal" />
									<img alt="" border="0" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1" />
								</form>
							</div>
						</div>

						<div class="search">
							<div class="search__title">Поиск по сайту:</div>
							<div class="search__input">
								<input type="text" placeholder="Лекции по...">
								<button>Поиск</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div class="footer__info">
				<div class="container">
					<div class="info__body">
						<div class="info__item">
							<h3>Что мы делаем в Академии Fide</h3>
							<p>Организация семинаров Fide для получения титулов тренера от Международной Шахматной Федерации. Продажа видео и шахматного материала.</p>
						</div>
						<div class="info__item">
							<h3>Последние публикации</h3>
							<?php
								$result = mysqli_query($connect, "SELECT * FROM `latest posts`");
								
								for($i = 0; $i < mysqli_num_rows($result); $i++) {
									$row = mysqli_fetch_assoc($result);
									
									echo '<div class="messages__item">';
										echo '<a href="' . $row['title link'] . '">' . $row['title_ru'] . '</a>';
										echo '<p>' . linkIt($row['text_ru']) . '</p>';
									echo '</div>';
								}
							?>
						</div>
						<div class="info__item">
							<h3>ГДЕ МЫ</h3>
							<p>Телефон: <a href="tel:+34722369868">+34 722 369 868</a></p>
							<p>Эл.почта: <a href="mailto:fideacademia@gmail.com" target="_blank">fideacademia@gmail.com</a></p>
							<p>Сайт: <a href="https://www.academiafide.com">https://www.academiafide.com</a></p>
							<div class="info__links">
								<a href="https://www.facebook.com/academiafide"><div class="info__circle"><i class="fa fa-facebook"></i></div></a>
								<a href="https://twitter.com/academia_fide"><div class="info__circle"><i class="fa fa-twitter"></i></div></a>
								<a href="https://www.instagram.com/fideacademia/"><div class="info__circle"><i class="fa fa-instagram"></i></div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer__rights">
				<div class="container">
					<p>© 2023 Academia Fide. Все права защищены.</p>
				</div>
			</div>
		</footer>
	</div>

	<script src="/assets/js/script.js"></script>
	<script src="/assets/js/slider.js"></script>
</body>
</html>
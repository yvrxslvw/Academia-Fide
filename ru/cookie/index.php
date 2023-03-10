<?php session_start(); require_once '../../assets/vendor/init.php'; ?>

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
						<div class="menu__item"><a href="/ru/activity">Деятельность</a></div>
						<div class="menu__item"><a href="/ru/classes">Продвинутый уровень</a></div>
						<div class="menu__item"><a href="/ru/shop">Магазин</a></div>
						<div class="menu__item"><a href="/ru/terms">Условия</a></div>
						<div class="menu__item"><a href="/ru/contact">Контакты</a></div>
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
			<div class="content">
				<div class="container">
					<div class="post__item">
						<h2>Что такое Cookie файлы?</h2>
						<p>Cookie файлы - это фрагменты настроек пользователя для упрощения работы и для удобства пользования веб-сайтом, например, чтобы запомнить язык, на котором будет отображаться сайт, предпочтения, сохранённый товар в корзине и т.д.</p>
					</div>
					<div class="post__item">
						<h2>Зачем мы используем эти файлы?</h2>
						<p>В нашем случае, мы используем Cookie-файлы чтобы запоминать выбор языка веб-сайта для каждого пользователя. Таким образом Вам не придется каждый раз при использовании веб-сайта менять язык на свой.</p>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div class="footer__info">
				<div class="container">
					<div class="info__body">
						<div class="info__item">
							<h3>О нас</h3>
							<p>Организация семинаров для получения титула гроссмейстера. Продажа видеоматериалов с курсами по шахматам.</p>
						</div>
						<div class="info__item">
							<h3>Последние публикации</h3>
							<?php
								$result = mysqli_query($connect, "SELECT * FROM `latest posts`");
								
								for($i = 0; $i < mysqli_num_rows($result); $i++) {
									$row = mysqli_fetch_assoc($result);
									
									echo '<div class="messages__item">';
										echo '<a href="' . $row['title link'] . '">' . $row['title_ru'] . '</a>';
									echo '</div>';
								}
							?>
						</div>
						<div class="info__item">
							<h3>Контакты</h3>
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
</body>
</html>
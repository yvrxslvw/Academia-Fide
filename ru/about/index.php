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
						<div class="menu__item _there">О нас</div>
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
					<h1>О нас</h1>
					<div class="post__item">
						<h2>Наша краткая история</h2>
						<p>После многих лет работы тренерами MF и FT Adrián Randazzo и GM и FT Fernando Peralta решили объединить усилия в проекте, который позволил бы нам оптимально передавать наши знания и опыт. Видение Adrián'а, имеющего большой опыт работы тренером и преподавателем, дополняется видением Fernando, высококонкурентного тренера и профессионального игрока.</p>
						<p>В марте 2016 года Академия одобрила деятельность «Академии FIDE команданте Luis Piedra Buena», первой официальной академии, признанной Международной шахматной федерацией во всей Латинской Америке.</p>
						<p>Это позволило нам иметь соответствующие инструменты для обучения игроков, а также для обучения преподавателей, всегда с международно признанным содержанием, методами работы и квалификационными званиями.</p>
					</div>
					<div class="post__item">
						<h2>Наш опыт в качестве Академии</h2>
						<p>Несмотря на наше недолгое существование, Академия FIDE очень активна. У нас была возможность организовать многочисленные семинары, на которых присуждались степени, признанные Академией, как лично, так и онлайн. Мы работаем в течение всего учебного года, обучая учителей разных учебных заведений, обеспечивая их программой работы и непрерывным контролем их деятельности.</p>
					</div>
					<div class="post__item">
						<h2>Некоторые данные:</h2>
						<p>- Мы проводим онлайн-мастер-классы от известных международных квалифицированных игроков;</p>
						<p>- В наших занятиях и семинарах приняли участие студенты из Аргентины, Боливии, Чили, Колумбии, Эквадора, Испании, Мексики, Парагвая, Перу и Уругвая;</p>
						<p>- Было присвоено 89 официальных титулов FIDE;</p>
						<p>- В течение учебного года мы непрерывно обучаем более 160 учителей начальных, средних и высших учебных заведений.</p>
					</div>
					<h1>Встречайте нашу команду:</h1>
					<div class="post__item">
						<h2>Adrián Randazzo</h2>
						<img src="/assets/images/adrian.jpg">
						<p>- Основатель и Мастер FIDE;</p>
						<p>- Тренер FIDE;</p>
						<p>- Тренер и мастер Международной шахматной федерации;</p>
						<p>- Опыт работы тренером и учителем шахмат более 20 лет.</p>
					</div>
					<div class="post__item">
						<h2>Fernando Peralta</h2>
						<img src="/assets/images/fernando.jpg">
						<p>- Международный гроссмейстер;</p>
						<p>- Тренер FIDE;</p>
						<p>- Международный гроссмейстер по шахматам;</p>
						<p>- Представитель Аргентины на 7 Олимпиадах;</p>
						<p>- Дважды чемпион Аргентины;</p>
						<p>- Победитель многочисленных международных открытых турниров в Европе и Америке;</p>
						<p>- Опыт работы преподавателем и тренером по шахматам более 15 лет;</p>
						<p>- Зарегистрирован в официальном реестре спортивных профессионалов Каталонии как профессиональный спортивный тренер по шахматам.</p>
					</div>
					<div class="post__item">
						<h2>Alejo de Dovitiis</h2>
						<img src="/assets/images/Alejo.jpg">
						<p>- Международный мастер и тренер ФИДЕ (ФИДЕ).</p>
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
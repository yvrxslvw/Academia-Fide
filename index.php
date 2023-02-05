<!DOCTYPE html>
<html>
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
			<h3><span lng-cookie-title>Consentimiento de cookies</span></h3>
			<div class="cookie__body">
				<p><span lng-cookie-subtitle>Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web.</span></p>
				<button><span lng-cookie-accept>Aceptar</span></button>
				<a href="/cookie"><span lng-cookie-more>Aprende más</span></a>
			</div>
			<div class="cookie__error"><p><span lng-cookie-error>No se han establecido cookies. Permita que su navegador establezca cookies.</span></p></div>
		</div>
		<header>
			<div class="container">
				<div class="logo__row">
					<a href="/"><img src="/assets/images/logo.png"></a>
					<p class="header__number">
						<i class="fa fa-mobile"></i>
						<a href="tel:+34722369868">+34 722 369 868</a>
					</p>
				</div>
				<div class="header__menu">
					<button class="menu__bars"><i class="fa fa-bars"></i></button>
					<div class="menu__body">
						<div hidden class="menu__title"><span lng-menu-title>menú</span></div>
						<div class="menu__item"><a href="/beginning"><span lng-menu-beginning>Inicio</span></a></div>
						<div class="menu__item"><a href="/about"><span lng-menu-aboutus>Quiénes Somos</span></a></div>
						<div class="menu__item"><a href="/doing"><span lng-menu-whatdowedo>A qué nos dedicamos</span></a></div>
						<div class="menu__item"><a href="/classes"><span lng-menu-classes>Clases semanales de alto rendimiento</span></a></div>
						<div class="menu__item"><a href="/shop"><span lng-menu-shop>Tienda</span></a></div>
						<div class="menu__item"><a href="/terms"><span lng-menu-terms>Términos legales</span></a></div>
						<div class="menu__item"><a href="/contact"><span lng-menu-contactus>Contáctenos</span></a></div>
						<nav class="lang">
							<button class="lang__button"><span lng-menu-language>Idioma</span> <i class="fa fa-bars"></i></button>
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
						<h2><span lng-slider-title_first>CLASES SEMANALES DE ALTO RENDIMIENTO</span></h2>
						<h3><span lng-slider-subtitle_first>Clases Grupales Online de Academia FIDE Dirigidas al jugador de torneo, recomendadas especialmente para jugadores entre 2000 y 2400 de ranking...</span></h3>
						<a href="/classes"><span lng-slider-button1>LEER MÁS</span></a>
					</div>
					<div class="slider__item">
						<h2><span lng-slider-title_second>QUIÉNES SOMOS</span></h2>
						<h3><span lng-slider-subtitle_second>Nuestra Historia Después de muchos años como entrenadores...</span></h3>
						<a href="/about"><span lng-slider-button2>LEER MÁS</span></a>
					</div>
					<div class="slider__item">
						<h2><span lng-slider-title_third>TIENDA</span></h2>
						<h3><span lng-slider-subtitle_third>Ahora puedes ver todos los seminarios realizados en Academia Fide...</span></h3>
						<a href="/shop"><span lng-slider-button3>LEER MÁS</span></a>
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
							<h3><span lng-description-first_title>CLASES SEMANALES DE ALTO RENDIMIENTO</span></h3>
							<h4><span lng-description-first_subtitle>Clases Grupales Online de Academia FIDE Dirigidas al jugador de torneo, recomendadas especialmente para jugadores entre 2000 y 2400 de ranking. Se estudiarán diversos temas de las diferentes fases del juego a través principalmente del análisis de partidas. Se aplicará un enfoque práctico, orientado a resolver los problemas con los que nos encontramos en las</span> <a href="/classes">[...]</a></h4>
						</div>
						<div class="description__item">
							<div class="description__img"><img src="/assets/images/chess2.jpg"></div>
							<h3><span lng-description-second_title>QUIÉNES SOMOS</span></h3>
							<h4><span lng-description-second_subtitle>Nuestra Historia Después de muchos años como entrenadores el MF y FT Adrián Randazzo y el GM y FT Fernando Peralta decidimos juntar esfuerzos en un proyecto que nos permitiera transmitir de manera óptima nuestros conocimientos y experiencia. La visión Adrián con una larga experiencia como entrenador y educador docente se complementa con la de</span> <a href="/about">[...]</a></h4>
						</div>
						<div class="description__item">
							<div class="description__img"><img src="/assets/images/chess3.jpg"></div>
							<h3><span lng-description-third_title>TIENDA</span></h3>
							<h4><span lng-description-third_subtitle>Ahora puedes ver todos los seminarios realizados en Academia Fide , como así también obtener videos de alta calidad técnica realizado por nuestros Maestros y Grandes Maestros. Te damos la posibilidad de realizar el pago de los mismos en diferentes modalidades como pago seguro con tarjeta de debito/crédito, Paypal o bien transferencia bancaria</span> <a href="/shop">[...]</a></h4>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="content__row">
					<div class="content">
						
					</div>
					<div class="sidebar">
						<div class="donate">
							<div class="donate__title"><span lng-donate-title>Apoyanos</span></div>
							<div class="donate__widget"></div>
						</div>

						<div class="search">
							<div class="search__title"><span lng-search-title>Búsqueda de sitio</span>:</div>
							<div class="search__input">
								<input type="text" placeholder="Clases..." lng-search-placeholder>
								<button><span lng-search-button>Buscar</span></button>
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
							<h3><span lng-footer-whatwedo_title>QUÉ HACEMOS EN ACADEMIA FIDE</span></h3>
							<p><span lng-footer-whatwedo_subtitle>Organización de Seminarios FIDE para la obtención de Títulos de Entrenadores de la Federación Internacional de Ajedrez. Venta de videos y material de ajedrez.</span></p>
						</div>
						<div class="info__item">
							<h3><span lng-footer-lastpost_title>ÚLTIMAS PUBLICACIONES</span></h3>
							<div class="messages__item">
								<a href="#"><span lng-footer-lastpost_first_title>AJEDREZ Y EMPRESAS</span></a>
								<p><span lng-footer-lastpost_first_subtitle>El pasado miércoles 19 de Junio tuvo lugar en nuestra plataforma la Conferencia Ajedrez y Empresas por el Dr. y MI Alejo De Dovitiis. Academia FIDE te da la oportunidad de verla en el siguiente enlace</span>: <a href="https://youtu.be/NzmWz1qo2PE">https://youtu.be/NzmWz1qo2PE</a></plng-footer-lastpost_first_title>
							</div>
							<div class="messages__item">
								<a href="#"><span lng-footer-lastpost_second_title>CLASES DE ELITE CON EL GM SERGEY TIVIAKOV</span></a>
								<p><span lng-footer-lastpost_second_subtitle>Crea tu repertorio de aperturas y mejora tu comprensión en el medio juego y final con los consejos de un Gran Maestro de gran prestigio internacional Curso en idioma español. Nivel: recomendado para jugadores de torneo. Horario: semanal Sesiones por clase: 90 minutos a coordinar con el GM. Total de horas del curso: 6. Precio</span> <a href="#">[...]</a></p>
							</div>
						</div>
						<div class="info__item">
							<h3><span lng-footer-whereweare_title>DÓNDE ESTAMOS</span></h3>
							<p><span lng-footer-whereweare_number>Teléfono</span>: <a href="tel:+34722369868">+34 722 369 868</a></p>
							<p><span lng-footer-whereweare_mail>Correo electrónico</span>: <a href="mailto:fideacademia@gmail.com" target="_blank">fideacademia@gmail.com</a></p>
							<p><span lng-footer-whereweare_website>Website</span>: <a href="https://www.academiafide.com">https://www.academiafide.com</a></p>
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
					<p>© 2023 Academia Fide. <span lng-footer-rights>Todos los Derechos Reservados</span>.</p>
				</div>
			</div>
		</footer>
	</div>

	<script src="/assets/js/lang.js"></script>
	<script src="/assets/js/script.js"></script>
	<script src="/assets/js/slider.js"></script>
</body>
</html>
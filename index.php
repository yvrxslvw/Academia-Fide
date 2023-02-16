<?php session_start(); require_once 'assets/vendor/init.php'; ?>

<!DOCTYPE html>
<html lang="es">
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
			<h3>Consentimiento de cookies</h3>
			<div class="cookie__body">
				<p>Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web.</p>
				<button>Aceptar</button>
				<a href="/cookie">Aprende más</a>
			</div>
			<div class="cookie__error"><p>No se han establecido cookies. Permita que su navegador establezca cookies.</p></div>
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
						<div hidden class="menu__title">menú</div>
						<div class="menu__item _there">Inicio</div>
						<div class="menu__item"><a href="/about">Quiénes Somos</a></div>
						<div class="menu__item"><a href="/activity">A qué nos dedicamos</a></div>
						<div class="menu__item"><a href="/classes">Clases semanales de alto rendimiento</a></div>
						<div class="menu__item"><a href="/shop">Tienda</a></div>
						<div class="menu__item"><a href="/terms">Términos legales</a></div>
						<div class="menu__item"><a href="/contact">Contáctenos</a></div>
						<nav class="lang">
							<button class="lang__button">Idioma <i class="fa fa-bars"></i></button>
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
						<h2>CLASES SEMANALES DE ALTO RENDIMIENTO</h2>
						<a href="/classes">LEER MÁS</a>
					</div>
					<div class="slider__item">
						<h2>QUIÉNES SOMOS</h2>
						<a href="/about">LEER MÁS</a>
					</div>
					<div class="slider__item">
						<h2>TIENDA</h2>
						<a href="/shop">LEER MÁS</a>
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
							<h3>CLASES SEMANALES DE ALTO RENDIMIENTO</h3>
							<a href="/classes">Leer más...</a>
						</div>
						<div class="description__item">
							<div class="description__img"><img src="/assets/images/chess2.jpg"></div>
							<h3>QUIÉNES SOMOS</h3>
							<a href="/about">Leer más...</a>
						</div>
						<div class="description__item">
							<div class="description__img"><img src="/assets/images/chess3.jpg"></div>
							<h3>TIENDA</h3>
							<a href="/shop">Leer más...</a>
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
									echo '<img src="' . $row['image'] . '" class="post__img">';
									echo '<h2>' . $row['title'] . '...</h2>';
									echo '<a href="classes/" class="item__readMore">Leer más</a>';
								echo '</div>';
							}
						?>
					</div>
					<div class="sidebar">
						<div class="donate">
							<div class="donate__title">Apoyanos</div>
							<div class="donate__widget">
								<form action="https://www.paypal.com/donate" method="post" target="_top">
									<input type="hidden" name="hosted_button_id" value="4A25D4GBUZYWW" />
									<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Botón Donar con PayPal" />
									<img alt="" border="0" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1" />
								</form>
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
							<h3>QUÉ HACEMOS EN ACADEMIA FIDE</h3>
							<p>Organización de Seminarios FIDE para la obtención de Títulos de Entrenadores de la Federación Internacional de Ajedrez. Venta de videos y material de ajedrez.</p>
						</div>
						<div class="info__item">
							<h3>ÚLTIMAS PUBLICACIONES</h3>
							<?php
								$result = mysqli_query($connect, "SELECT * FROM `latest posts`");
								
								for($i = 0; $i < mysqli_num_rows($result); $i++) {
									$row = mysqli_fetch_assoc($result);
									
									echo '<div class="messages__item">';
										echo '<a href="' . $row['title link'] . '">' . $row['title'] . '</a>';
									echo '</div>';
								}
							?>
						</div>
						<div class="info__item">
							<h3>DÓNDE ESTAMOS</h3>
							<p>Teléfono: <a href="tel:+34722369868">+34 722 369 868</a></p>
							<p>Correo electrónico: <a href="mailto:fideacademia@gmail.com" target="_blank">fideacademia@gmail.com</a></p>
							<p>Website: <a href="https://www.academiafide.com">https://www.academiafide.com</a></p>
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
					<p>© 2023 Academia Fide. Todos los Derechos Reservados.</p>
				</div>
			</div>
		</footer>
	</div>

	<script src="/assets/js/script.js"></script>
	<script src="/assets/js/slider.js"></script>
</body>
</html>
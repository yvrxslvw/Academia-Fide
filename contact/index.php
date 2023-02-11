<?php session_start(); require_once '../assets/vendor/init.php'; ?>

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
						<div class="menu__item"><a href="/">Inicio</a></div>
						<div class="menu__item"><a href="/about">Quiénes Somos</a></div>
						<div class="menu__item"><a href="/doing">A qué nos dedicamos</a></div>
						<div class="menu__item"><a href="/classes">Clases semanales de alto rendimiento</a></div>
						<div class="menu__item"><a href="/shop">Tienda</a></div>
						<div class="menu__item"><a href="/terms">Términos legales</a></div>
						<div class="menu__item _there">Contáctenos</div>
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
			<div class="content">
				<div class="container">
					<div class="post__item">
						<h2>Para contactarnos usa:</h2>
						<p>Teléfono <a href="tel:+34722369868">+34 722 369 868</a></p>
						<p>Correo electrónico <a href="mailto:fideacademia@gmail.com">fideacademia@gmail.com</a></p>
						<p>Facebook <a href="https://www.facebook.com/academiafide">https://www.facebook.com/academiafide</a></p>
						<p>Twitter <a href="https://twitter.com/academia_fide">https://twitter.com/academia_fide</a></p>
						<p>Instagram <a href="https://www.instagram.com/fideacademia/">https://www.instagram.com/fideacademia</a></p>
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
</body>
</html>
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
						<div class="menu__item _there">A qué nos dedicamos</div>
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
			<div class="content">
				<div class="container">
					<h1>A qué nos dedicamos</h1>
					<div class="post__item">
						<h2>Enseñanza Básica y Alto Rendimiento</h2>
						<p>- Organización de Campus de Entrenamiento de Ajedrez con certificados de participación oficiales;</p>
						<p>- Dictado de cursos grupales e individuales, tanto de manera presencial como online, abarcando todas las fases del desarrollo ajedrecístico, desde la escolar, hasta el entrenamiento de alto rendimiento para competencia.</p>
					</div>
					<div class="post__item">
						<h2>Academia de Instructores</h2>
						<p>- Organización de Seminarios para la obtención de Títulos de Entrenadores de la Federación Internacional de Ajedrez.</p>
					</div>
					<div class="post__item">
						<h2>Organización de Torneos</h2>
						<p>- Organización de torneos internos y/o abiertos con validez para el Ránking Internacional (ELO).</p>
					</div>
					<div class="post__item">
						<h2>Difusión del Ajedrez</h2>
						<p>- Academia Fide dedica su tiempo a la difusión del ajedrez como herramienta educativa, formando profesores de ajedrez con bases internacionales. Ellos desarrollarán proyectos de clases de ajedrez en diferentes establecimientos educativos en todo el mundo;</p>
						<p>- También Academia Fide difunde el ajedrez de alta competencia, funcionando como escuela de alto rendimiento en Ajedrez. Es organizadora de diferentes competencias y actividades nacionales e internacionales, de manera presencial y online;</p>
						<p>- No importa donde estés, nosotros te brindaremos las herramientas para que puedas formarte y progresar en la práctica del juego.</p>
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
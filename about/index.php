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
						<div class="menu__item _there">Quiénes Somos</div>
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
			<div class="content">
				<div class="container">
					<h1>Quiénes Somos</h1>
					<div class="post__item">
						<h2>Nuestra breve historia</h2>
						<p>Después de muchos años como entrenadores el MF y FT Adrián Randazzo y el GM y FT Fernando Peralta decidimos juntar esfuerzos en un proyecto que nos permitiera transmitir de manera óptima nuestros conocimientos y experiencia. La visión Adrián con una larga experiencia como entrenador y educador docente se complementa con la de Fernando, entrenador de alta competencia y jugador profesional.</p>
						<p>En marzo de 2016, la Academia aprobó el funcionamiento de la “Academia FIDE Comandante Luis Piedra Buena”, la primera Academia oficial reconocida por la Federación Internacional de Ajedrez en toda Latinoamérica.</p>
						<p>Esto nos permitió contar con las herramientas adecuadas para formar y entrenar jugadores así como capacitar educadores, siempre con contenidos, formas de trabajo y títulos habilitantes con reconocimiento internacional.</p>
					</div>
					<div class="post__item">
						<h2>Nuestra experencia como Academia</h2>
						<p>A pesar de nuestra corta existencia Academia FIDE es muy activa. Hemos tenido oportunidad de organizar numerosos seminarios que otorgaron títulos reconocidos por la Academia tanto de manera presencial como online. Trabajamos durante todo el año lectivo escolar capacitando profesores de diferentes instituciones educativas, brindándoles un programa de trabajo y un seguimiento continuo en sus actividades.</p>
					</div>
					<div class="post__item">
						<h2>Algunos datos:</h2>
						<p>- Dictamos clases magistrales online a cargo de reconocidos jugadores internacionales titulados;</p>
						<p>- Participaron en nuestras clases y seminarios alumnos de Argentina, Bolivia, Chile, Colombia, Ecuador, España, México, Paraguay, Perú y Uruguay;</p>
						<p>- Se otorgaron 89 títulos oficiales de FIDE;</p>
						<p>- Capacitamos de manera continuada durante todo el año lectivo a más de 160 docentes de establecimientos educativos primarios, secundarios y universitarios.</p>
					</div>
					<h1>Conoce nos equipo</h1>
					<div class="post__item">
						<h2>Adrián Randazzo</h2>
						<img src="/assets/images/adrian.jpg">
						<p>- Fundador y Maestro FIDE;</p>
						<p>- FIDE Trainer ejecutivo;</p>
						<p>- Entrenador y Maestro de la Federación Internacional de Ajedrez;</p>
						<p>- Mas de 20 años de experiencia en el trabajo como entrenador y profesor de Ajedrez.</p>
					</div>
					<div class="post__item">
						<h2>Fernando Peralta</h2>
						<img src="/assets/images/fernando.jpg">
						<p>- Gran Maestro Internacional;</p>
						<p>- FIDE Trainer;</p>
						<p>- Gran Maestro Internacional de ajedrez;</p>
						<p>- Representante argentino en 7 Olimpiadas;</p>
						<p>- Campeón de Argentina en dos ocasiones;</p>
						<p>- Ganador de numerosos abiertos internacionales en Europa y América;</p>
						<p>- Más de 15 años de experiencia como profesor y entrenador de ajedrez de alto rendimiento;</p>
						<p>- Inscripto en el registro oficial de profesionales del deporte de Catalunya como monitor deportivo profesional y entrenador profesional de ajedrez.</p>
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
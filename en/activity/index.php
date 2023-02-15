<?php session_start(); require_once '../../assets/vendor/init.php'; ?>

<!DOCTYPE html>
<html lang="en">
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
			<h3>Cookie consent</h3>
			<div class="cookie__body">
				<p>This website uses cookies to ensure that you get the best experience on our website.</p>
				<button>Accept</button>
				<a href="/en/cookie">Learn more</a>
			</div>
			<div class="cookie__error"><p>Cookies have not been set. Allow your browser to set cookies.</p></div>
		</div>
		<header>
			<div class="container">
				<div class="logo__row">
					<a href="/en"><img src="/assets/images/logo.png"></a>
					<p class="header__number">
						<i class="fa fa-mobile"></i>
						<a href="tel:+34722369868">+34 722 369 868</a>
					</p>
				</div>
				<div class="header__menu">
					<button class="menu__bars"><i class="fa fa-bars"></i></button>
					<div class="menu__body">
						<div hidden class="menu__title">Menu</div>
						<div class="menu__item"><a href="/en">Beginning</a></div>
						<div class="menu__item"><a href="/en/about">About us</a></div>
						<div class="menu__item _there">What do we do</div>
						<div class="menu__item"><a href="/en/classes">High performance weekly classes</a></div>
						<div class="menu__item"><a href="/en/shop">Shop</a></div>
						<div class="menu__item"><a href="/en/terms">Legal terms</a></div>
						<div class="menu__item"><a href="/en/contact">Contact us</a></div>
						<nav class="lang">
							<button class="lang__button">Language <i class="fa fa-bars"></i></button>
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
					<h1>Our activity</h1>
					<div class="post__item">
						<h2>Basic Education and Advanced Education</h2>
						<p>- Organization of Chess Training Camps with official participation certificates;</p>
						<p>- Teaching group and individual courses, both in person and online, covering all phases of chess development, training from school to advanced for competition.</p>
					</div>
					<div class="post__item">
						<h2>Instructors Academy</h2>
						<p>- Organization of Seminars to obtain Coaches Titles of the International Chess Federation.</p>
					</div>
					<div class="post__item">
						<h2>Organization of Tournaments</h2>
						<p>- Organization of internal and/or open tournaments valid for the International Ranking (ELO).</p>
					</div>
					<div class="post__item">
						<h2>Diffusion of Chess</h2>
						<p>- Academia Fide dedicates its time to the dissemination of chess as an educational tool, training chess teachers with international bases. They will develop chess class projects in different educational establishments around the world;</p>
						<p>- Academia also spreads highly competitive chess, functioning as a high performance Chess school. It is the organizer of different national and international competitions and activities, in person and online;</p>
						<p>- No matter where you are, we will provide you with the tools so, that you can train and progress in the practice of the game.</p>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div class="footer__info">
				<div class="container">
					<div class="info__body">
						<div class="info__item">
							<h3>WHAT WE DO AT FIDE ACADEMY</h3>
							<p>Organization of Fide Seminars to obtain Coaches Titles from the International Chess Federation. Sale of videos and chess material.</p>
						</div>
						<div class="info__item">
							<h3>LATEST POSTS</h3>
							<?php
								$result = mysqli_query($connect, "SELECT * FROM `latest posts`");
								
								for($i = 0; $i < mysqli_num_rows($result); $i++) {
									$row = mysqli_fetch_assoc($result);
									
									echo '<div class="messages__item">';
										echo '<a href="' . $row['title link'] . '">' . $row['title_en'] . '</a>';
									echo '</div>';
								}
							?>
						</div>
						<div class="info__item">
							<h3>WHERE WE ARE</h3>
							<p>Phone: <a href="tel:+34722369868">+34 722 369 868</a></p>
							<p>Email: <a href="mailto:fideacademia@gmail.com" target="_blank">fideacademia@gmail.com</a></p>
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
					<p>© 2023 Academia Fide. All rights reserved.</p>
				</div>
			</div>
		</footer>
	</div>

	<script src="/assets/js/script.js"></script>
</body>
</html>
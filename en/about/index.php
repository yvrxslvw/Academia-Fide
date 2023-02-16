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
						<div class="menu__item _there">About us</div>
						<div class="menu__item"><a href="/en/activity">What do we do</a></div>
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
					<h1>About us</h1>
					<div class="post__item">
						<h2>Our brief history</h2>
						<p>After many years as coaches, MF and FT Adrián Randazzo and GM and FT Fernando Peralta decided to join forces in a project that would allow us to optimally transmit our knowledge and experience. Adrián's vision, with extensive experience as a coach and teacher educator, is complemented by that of Fernando, a highly competitive coach and professional player.</p>
						<p>In March 2016, the Academy approved the operation of the "FIDE Comandante Luis Piedra Buena Academy", the first official Academy recognized by the International Chess Federation in all of Latin America.</p>
						<p>This allowed us to have the appropriate tools to educate and train players as well as train educators, always with content, ways of working and qualifications with international recognition.</p>
					</div>
					<div class="post__item">
						<h2>Our experience as an Academy</h2>
						<p>Despite our short existence, FIDE Academy is very active. We have had the opportunity to organize numerous seminars that awarded degrees recognized by the Academy both in person and online. We work throughout the school year training teachers from different educational institutions, providing them with a work program and continuous monitoring of their activities.</p>
					</div>
					<div class="post__item">
						<h2>Some data:</h2>
						<p>- We give online master classes by renowned international qualified players;</p>
						<p>- Students from Argentina, Bolivia, Chile, Colombia, Ecuador, Spain, Mexico, Paraguay, Peru and Uruguay participated in our classes and seminars;</p>
						<p>- 89 official FIDE titles were awarded;</p>
						<p>- We continuously train more than 160 teachers from primary, secondary and university educational establishments throughout the school year.</p>
					</div>
					<h1>Meet our team</h1>
					<div class="post__item">
						<h2>Adrián Randazzo</h2>
						<img src="/assets/images/adrian.jpg">
						<p>- Founder and FIDE Master;</p>
						<p>- FIDE Executive Trainer;</p>
						<p>- Trainer and Master of the International Chess Federation;</p>
						<p>- More than 20 years of experience working as a coach and Chess teacher.</p>
					</div>
					<div class="post__item">
						<h2>Fernando Peralta</h2>
						<img src="/assets/images/fernando.jpg">
						<p>- International Grandmaster;</p>
						<p>- FIDE Trainer;</p>
						<p>- International Chess Grand Master;</p>
						<p>- Argentine representative in 7 Olympics;</p>
						<p>- Argentine Champion twice;</p>
						<p>- Winner of numerous international open in Europe and America;</p>
						<p>- More than 15 years of experience as a high performance chess teacher and coach;</p>
						<p>- Registered in the official register of sports professionals in Catalonia as a professional sports monitor and professional chess coach.</p>
					</div>
					<div class="post__item">
						<h2>Alejo de Dovitiis</h2>
						<img src="/assets/images/Alejo.jpg">
						<p>- International Master and FIDE Trainer (FIDE).</p>
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
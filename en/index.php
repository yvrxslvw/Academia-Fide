<?php session_start(); require_once '../assets/vendor/init.php'; ?>

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
						<div class="menu__item _there">Beginning</div>
						<div class="menu__item"><a href="/en/about">About us</a></div>
						<div class="menu__item"><a href="/en/doing">What do we do</a></div>
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
			<div class="slider">
				<img class="_active" src="/assets/images/chess1.jpg">
				<img src="/assets/images/chess2.jpg">
				<img src="/assets/images/chess3.jpg">
				<div class="slider__body">
					<div class="slider__item _active">
						<h2>HIGH PERFORMANCE WEEKLY CLASSES</h2>
						<h3>Fide Academy Online Group Classes Aimed at tournament players, especially recommended for players between 2000 and 2400 ranking...</h3>
						<a href="/en/classes">READ MORE</a>
					</div>
					<div class="slider__item">
						<h2>ABOUT US</h2>
						<h3>Our Story After many years as coaches...</h3>
						<a href="/en/about">READ MORE</a>
					</div>
					<div class="slider__item">
						<h2>SHOP</h2>
						<h3>Now you can see all the seminars held at Academia Fide...</h3>
						<a href="/en/shop">READ MORE</a>
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
							<h3>HIGH PERFORMANCE WEEKLY CLASSES</h3>
							<h4>Fide Academy Online group classes aimed at tournament players, especially recommended for players between 2000 and 2400 ranking. Various topics of the different phases of the game will be studied mainly through game analysis. A practical approach will be applied, oriented to solve the problems that we find ourselves in the <a href="/en/classes">[...]</a></h4>
						</div>
						<div class="description__item">
							<div class="description__img"><img src="/assets/images/chess2.jpg"></div>
							<h3>ABOUT US</h3>
							<h4>Our History After many years as coaches, MF and FT Adrián Randazzo and GM and FT Fernando Peralta decided to join forces in a project that would allow us to optimally transmit our knowledge and experience. Adrián\'s vision, with extensive experience as a trainer and teacher educator, is complemented by that of <a href="/en/about">[...]</a></h4>
						</div>
						<div class="description__item">
							<div class="description__img"><img src="/assets/images/chess3.jpg"></div>
							<h3>SHOP</h3>
							<h4>Now you can see all the seminars held at Academia Fide, as well as obtain high quality technical videos made by our Masters and Grand Masters. We give you the possibility of paying them in different ways such as secure payment with debit/credit card, Paypal or bank transfer <a href="/en/shop">[...]</a></h4>
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
									echo '<h2>' . $row['title_en'] . '...</h2>';
									echo '<a href="classes/" class="item__readMore">Read more</a>';
								echo '</div>';
							}
						?>
					</div>
					<div class="sidebar">
						<div class="donate">
							<div class="donate__title">Support us</div>
							<div class="donate__widget">
								<form action="https://www.paypal.com/donate" method="post" target="_top">
									<input type="hidden" name="hosted_button_id" value="4A25D4GBUZYWW" />
									<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Botón Donar con PayPal" />
									<img alt="" border="0" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1" />
								</form>
							</div>
						</div>

						<div class="search">
							<div class="search__title">Site search:</div>
							<div class="search__input">
								<input type="text" placeholder="Classes...">
								<button>Search</button>
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
	<script src="/assets/js/slider.js"></script>
</body>
</html>
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
						<div class="menu__item"><a href="/en/activity">What do we do</a></div>
						<div class="menu__item"><a href="/en/classes">High performance weekly classes</a></div>
						<div class="menu__item"><a href="/en/shop">Shop</a></div>
						<div class="menu__item _there">Legal terms</div>
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
					<div class="post__item">
						<p>All copyrights for this web resource www.academiafide.com (hereinafter referred to as the website), as well as for video lessons, video materials and personal sessions with trainers, are registered and owned by the Academia FIDE organization.</p>
						<p>Under these rights, you may not copy/distribute for personal use the video tutorials and videos sold on this website. It is also prohibited to copy/use for personal purposes the design and content of the website.</p>
					</div>
					<div class="post__item">
						<p>The price category for each video lesson or video material, as well as for courses for each level, is indicated in advance on the website's store page.</p>
						<p>When buying personal lessons with FIDE trainers, the price and conditions are negotiated in advance.</p>
						<p>If the visitor of the website (hereinafter referred to as the client) did not receive the video material as such, then he has the right to receive back the money spent on the purchase of any material.</p>
						<p>The quality of teaching in personal lessons, in video materials, in video lessons and in seminars is not subject to appeal.</p>
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
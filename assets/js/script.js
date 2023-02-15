// COOKIE
const cookie = document.querySelector('.cookie');
const cookieButton = document.querySelector('.cookie button');
if(document.cookie.indexOf('cookieAccepted=true') === -1) cookie.classList.remove('_hidden');
else setTimeout(hideCookie, 700);

cookieButton.addEventListener('click', () => {
	document.cookie = 'cookieAccepted=true; path=/; max-age=' + 60*60*24*15;
	if(!document.cookie) {
		document.querySelector('.cookie__body').classList.add('_hidden');
		document.querySelector('.cookie__error').classList.add('_active');
		setTimeout(() => {
			cookie.classList.add('_hidden');
			setTimeout(hideCookie, 700);
		}, 2000);
	} else {
		cookie.classList.add('_hidden');
		setTimeout(hideCookie, 700);
	}
});

function hideCookie() {
	cookie.style.display = 'none';
}



// LANGUAGE
let language;
if(document.cookie.indexOf('Language') !== -1) {
	language = document.cookie.split('; ').find((row) => row.startsWith('Language=')).split('=')[1];
	if(language !== 'es' && window.location.pathname.indexOf(language) === -1) {
		window.location.href = '/' + language + window.location.pathname;
	}
}

function changeLanguage(lang) {
	window.location.href = '/';
	document.cookie = `Language=${lang}; path=/; max-age=` + 60*60*24*15;
}



// MENUS & IMAGES
const langChange = document.querySelector('.lang');
const menu = document.querySelector('.header__menu');
const postImg = document.querySelector('.post__img');
document.addEventListener('click', (event) => {
	if(event.target.closest('.lang__button')) {
		langChange.classList.toggle('_active');
	}
	if(!event.target.closest('.lang')) {
		langChange.classList.remove('_active');
	}

	if(event.target.closest('.menu__bars')) {
		menu.classList.toggle('_active');
	}
	if(!event.target.closest('.header__menu')) {
		menu.classList.remove('_active');
	}
});
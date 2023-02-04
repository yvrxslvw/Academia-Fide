// LANGUAGE
let language;
if(document.cookie.indexOf('Language') === -1) {
	language = window.location.hash.slice(1);
	if(langs.indexOf(language) === -1) {
		location.href = window.location.pathname + '#es';
		location.reload();
	}
} else {
	language = document.cookie.split('; ').find((row) => row.startsWith('Language=')).split('=')[1];
}
location.href = window.location.pathname + '#' + language;

const langChange = document.querySelector('.lang');
const menu = document.querySelector('.header__menu');
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

function changeLanguage(lang) {
	location.href = window.location.pathname + '#' + lang;
	document.cookie = `Language=${lang}; max-age=` + 60*60*24*15;
	location.reload();
}

// Translator
var currPage = window.location.pathname.slice(1).split('.')[0];
for(let chapter in langArr[currPage]) {
	for(let key in langArr[currPage][chapter][language]) {
		document.querySelector(`[lng-${chapter}-${key}]`).innerHTML = langArr[currPage][chapter][language][key];
		if(chapter === 'search') document.querySelector(`[lng-${chapter}-placeholder]`).placeholder = langArr[currPage][chapter][language][key];
	}
}
for(let chapter in langArr['all']) {
	for(let key in langArr['all'][chapter][language]) {
		document.querySelector(`[lng-${chapter}-${key}]`).innerHTML = langArr['all'][chapter][language][key];
	}
}



// COOKIE
const cookie = document.querySelector('.cookie');
const cookieButton = document.querySelector('.cookie button');
document.cookie.indexOf('cookieAccepted=true') !== -1 ? cookie.classList.add('_hidden') : cookie.classList.remove('_hidden');

cookieButton.addEventListener('click', () => {
	document.cookie = 'cookieAccepted=true; max-age=' + 60*60*24*15;
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



// OTHER
if(currPage === 'index') document.querySelector('main').style.margin = '0px 0px 50px 0px';
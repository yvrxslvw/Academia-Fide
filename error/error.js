let language;
if(document.cookie.indexOf('Language') !== -1) language = document.cookie.split('; ').find((row) => row.startsWith('Language=')).split('=')[1];
else language = 'es';

if(language === 'en') {
	document.querySelector('.error__body h2').innerHTML = 'The requested page was not found. :(';
	document.querySelector('.error__body p').innerHTML = 'Click the button below to return to the main page: ';
	document.querySelector('.error__body button').innerHTML = 'Return';
} else if(language === 'ru') {
	document.querySelector('.error__body h2').innerHTML = 'Запрашиваемая страница не найдена. :(';
	document.querySelector('.error__body p').innerHTML = 'Нажмите кнопку ниже, чтобы вернуться на главную страницу: ';
	document.querySelector('.error__body button').innerHTML = 'Вернуться';
}
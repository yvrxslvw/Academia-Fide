// COOKIE
const cookie = document.querySelector('.cookie');
const cookieButton = document.querySelector('.cookie button');
if(document.cookie.indexOf('cookieAccepted=true') === -1) cookie.classList.remove('_hidden');

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



// OTHER
const currPage = window.location.pathname;

if(currPage === '/' || currPage === '/en/' || currPage === '/ru/') document.querySelector('main').style.margin = '0px 0px 50px 0px';
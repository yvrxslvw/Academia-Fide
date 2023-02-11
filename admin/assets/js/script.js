const main = document.querySelector('.main');
const regAdm = document.querySelector('.regAdm');
const latestPosts = document.querySelector('.latestPosts');
const shop = document.querySelector('.shop');

function openMenu(key) {
	switch(key) {
		case 'regAdm':
			document.cookie = 'aPage=regAdm';
			main.classList.remove('_active');
			regAdm.classList.add('_active');
			latestPosts.classList.remove('_active');
			shop.classList.remove('_active');
		break;

		case 'shop':
			document.cookie = 'aPage=shop';
			main.classList.remove('_active');
			regAdm.classList.remove('_active');
			latestPosts.classList.remove('_active');
			shop.classList.add('_active');
		break;

		case 'latestPosts':
			document.cookie = 'aPage=latestPosts';
			main.classList.remove('_active');
			regAdm.classList.remove('_active');
			latestPosts.classList.add('_active');
			shop.classList.remove('_active');
		break;
		
		case 'main':
			document.cookie = 'aPage=main';
			main.classList.add('_active');
			regAdm.classList.remove('_active');
			latestPosts.classList.remove('_active');
			shop.classList.remove('_active');
		break;
	}
}

openMenu(document.cookie.split('; ').find((row) => row.startsWith('aPage=')).split('=')[1]);
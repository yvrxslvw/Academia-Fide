const main = document.querySelector('.main');
const regAdm = document.querySelector('.regAdm');
const latestPosts = document.querySelector('.latestPosts');

function openMenu(key) {
	switch(key) {
		case 'regAdm':
			document.cookie = 'aPage=regAdm';
			main.classList.remove('_active');
			regAdm.classList.add('_active');
			latestPosts.classList.remove('_active');
			break;
		case 'latestPosts':
			document.cookie = 'aPage=latestPosts';
			main.classList.remove('_active');
			regAdm.classList.remove('_active');
			latestPosts.classList.add('_active');
			break;
		case 'main':
			document.cookie = 'aPage=main';
			main.classList.add('_active');
			regAdm.classList.remove('_active');
			latestPosts.classList.remove('_active');
			break;
	}
}

openMenu(document.cookie.split('; ').find((row) => row.startsWith('aPage=')).split('=')[1]);
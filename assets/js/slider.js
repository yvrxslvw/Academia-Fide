// SLIDER
const navs = document.querySelectorAll('.nav');
const sliderImage = document.querySelectorAll('.slider img');
const sliderText = document.querySelectorAll('.slider__item');
let sliderItem = 0;

setInterval(() => {
	for(let i = 0; i < sliderImage.length; i++) {
		sliderImage[i].classList.remove('_active');
		navs[i].classList.remove('_active');
		sliderText[i].classList.remove('_active');
	}

	if(sliderItem === 0) {
		sliderImage[1].classList.add('_active');
		sliderText[1].classList.add('_active');
		navs[1].classList.add('_active');
		sliderItem++;
	} else if(sliderItem === 1) {
		sliderImage[2].classList.add('_active');
		sliderText[2].classList.add('_active');
		navs[2].classList.add('_active');
		sliderItem++;
	} else if(sliderItem === 2) {
		sliderImage[0].classList.add('_active');
		sliderText[0].classList.add('_active');
		navs[0].classList.add('_active');
		sliderItem = 0;
	}
}, 5000);

for(let nav of navs) {
	nav.addEventListener('click', () => {
		for(let i = 0; i < sliderImage.length; i++) {
			sliderImage[i].classList.remove('_active');
			navs[i].classList.remove('_active');
			sliderText[i].classList.remove('_active');
		}

		nav.classList.add('_active');

		if(nav.id === 'navFirst') {
			sliderImage[0].classList.add('_active');
			sliderText[0].classList.add('_active');
			sliderItem = 0;
		}
		else if(nav.id === 'navSecond') {
			sliderImage[1].classList.add('_active');
			sliderText[1].classList.add('_active');
			sliderItem = 1;
		}
		else if(nav.id === 'navThird') {
			sliderImage[2].classList.add('_active');
			sliderText[2].classList.add('_active');
			sliderItem = 2;
		}
	});
}
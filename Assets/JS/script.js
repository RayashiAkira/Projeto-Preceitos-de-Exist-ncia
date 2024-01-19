const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopupLink = document.querySelector('.loginbuttonPt');
const iconcloseLink = document.querySelector('.ico-close');

registerLink.addEventListener('click', ()=> {
	wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
	wrapper.classList.remove('active');
});

btnPopupLink.addEventListener('click', ()=> {
	wrapper.classList.add('active-popup');
});

iconcloseLink.addEventListener('click', ()=> {
	wrapper.classList.remove('active-popup');
});


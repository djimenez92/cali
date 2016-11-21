$(".button-collapse").sideNav();

var tab_link_login = document.querySelector('.tab-link-login');
var tab_link_signup = document.querySelector('.tab-link-signup');
var login = document.querySelector('.login');
var signup = document.querySelector('.signup');

tab_link_login.addEventListener('click', function(){
	tab_link_signup.classList.remove('tab-link-selected');
	this.classList.add('tab-link-selected');
	signup.style.display = 'none';
	login.style.display = 'block';
});
tab_link_signup.addEventListener('click', function(){
	tab_link_login.classList.remove('tab-link-selected');
	this.classList.add('tab-link-selected');
	login.style.display = 'none';
	signup.style.display = 'block';
});
// Toggle Menu to display Nav
const nav = document.querySelector('.main-nav');
const btnMenu = document.querySelector('.btn-menu');

btnMenu.addEventListener('click', function () {
    console.log("clicked");
    nav.classList.toggle('show');
});
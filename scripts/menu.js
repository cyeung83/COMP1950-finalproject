// Toggle Menu to display Nav
const nav = document.querySelector('.main-nav');
const btnMenu = document.querySelector('.btn-menu');
const sidenav = document.querySelector('.side-nav');
const lessonsBtn = document.querySelector('#side-nav-button');

btnMenu.addEventListener('click', function () {
    console.log("clicked");
    nav.classList.toggle('show');
});

lessonsBtn.addEventListener('click', function () {
    console.log("side-nav clicked");
    sidenav.classList.toggle('show');
});
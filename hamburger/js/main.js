// responsive menu
const menu = document.getElementById('js-menu');
const overlay = document.getElementById('js-overlay');
const body = document.querySelector('body');
const sidebar = document.getElementById('js-sidebar');
const menuCloseIcon = document.getElementById('js-menuClose-icon');

menu.addEventListener('click', ()=>{
    overlay.classList.toggle('is-active');
    body.classList.toggle('is-noScroll');
    sidebar.classList.toggle('is-active');
});

overlay.addEventListener('click', (e)=>{
    e.target.classList.remove('is-active');
    body.classList.remove('is-noScroll');
    sidebar.classList.remove('is-active');
});

menuCloseIcon.addEventListener('click', (e) => {
    overlay.classList.remove('is-active');
    body.classList.remove('is-noScroll');
    sidebar.classList.remove('is-active');
});

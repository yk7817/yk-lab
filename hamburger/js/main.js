// responsive menu close
const sidebar = document.getElementById('js-sidebar');
const mql = window.matchMedia('(max-width: 1200px)');

mql.addEventListener('change', e => {
    if ( e.matches ) {
        sidebar.classList.add('is-close');
    }else {
        sidebar.classList.remove('is-close');
    }
});
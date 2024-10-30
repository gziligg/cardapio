const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.sepnavtop');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})
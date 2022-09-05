const menuToggler = document.querySelector('.menu-toggler');
const navbar = document.querySelector('.navbar');
const collapsibleMenu = document.querySelector('.collapsible-menu');


menuToggler.addEventListener('click', () => {
    navbar.classList.toggle('show-menu');
    if(navbar.classList.contains('show-menu')){
        collapsibleMenu.style.maxHeight = collapsibleMenu.scrollHeight + 'px';
        setTimeout( () => {
            collapsibleMenu.style.display = '';
        }, 300)
    }else{
        collapsibleMenu.style.maxHeight = '';
        collapsibleMenu.style.overflow = 'none';
    }
})


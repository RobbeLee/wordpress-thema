//script voor het submenu
const hasSubmenu = document.querySelectorAll('.menu-item-has-childeren');

for(let i=0; i<hasSubmenu.length; i++) {
    const submenu     = hasSubmenu[i].querySelector('.sub-menu');
    const linkSubMenu = hasSubmenu[i].querySelector('a');
    
    submenu.classList.toggle('menu-hide');
    linkSubMenu.addEventListener('click', (e) => {
        e.preventDefault();
        submenu.classList.toggle('menu-hide');
        linkSubMenu.classList.toggle('menu-open');
    })
}

//placeholder searchbar
let searchbar = document.getElementById('s');
searchbar.setAttribute('placeholder', 'zoeken...')
searchbar.setAttribute('type', 'search')

// script submenu
const heeftSubmenu = document.querySelectorAll('.menu-item-has-children');

for (let i = 0; i < heeftSubmenu.length; i++) {

	const submenu 		= heeftSubmenu[i].querySelector('.sub-menu');
	const linkSubmenu 	= heeftSubmenu[i].querySelector('a');

	// submenu verbergen
	submenu.classList.toggle('verbergen-sub-menu');

	linkSubmenu.addEventListener('click', (e) => {
		e.preventDefault();
		submenu.classList.toggle('verbergen-sub-menu');
		linkSubmenu.classList.toggle('menu-open');
	});

}

// placeholder text en type zoekvenster
let zoekVenster = document.getElementById('s');
zoekVenster.setAttribute('placeholder', 'Zoeken...');
zoekVenster.setAttribute('type', 'search');

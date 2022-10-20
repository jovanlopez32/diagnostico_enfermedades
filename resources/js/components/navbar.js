const button_navbar = document.getElementById('button-navbar');
const navbar = document.getElementById('navbar');


button_navbar.addEventListener('click', function(x) {

    console.log(navbar);
    navbar.classList.toggle('-right-full');
    navbar.classList.toggle('right-0');


} );
console.log(button_navbar);

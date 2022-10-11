


/* Navigation */
var button_nav = document.getElementById('button-nav');
var nav = document.getElementById('nav');


button_nav.addEventListener('click', function() {
    nav.classList.toggle('-right-full');
    nav.classList.toggle('right-0');
    console.log(nav);
});


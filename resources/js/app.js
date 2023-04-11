import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

var botonMenu = document.getElementById("boton-menu");
var menu = document.getElementById("menu");

botonMenu.addEventListener("click", function() {
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
});

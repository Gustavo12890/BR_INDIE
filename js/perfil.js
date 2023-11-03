
var dropdown = document.getElementById("myDropdown");
var timeout;

dropdown.addEventListener("mouseenter", function() {
  clearTimeout(timeout); // Limpa qualquer atraso anterior
  this.querySelector(".dropdown-menu").classList.add("show");
});

dropdown.addEventListener("mouseleave", function() {
  var menu = this.querySelector(".dropdown-menu");
  timeout = setTimeout(function() {
    menu.classList.remove("show");
  }, 500); // Define o atraso em milissegundos (neste caso, 500 ms ou meio segundo)
});

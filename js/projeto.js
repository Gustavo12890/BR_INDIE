function countClicks(type) {
  // Obtém o elemento do contador com base no tipo de botão
  var contador = document.getElementById("contador-" + type);
  // Obtém o valor atual do contador e converte para um número
  var contadorAtual = parseInt(contador.textContent);
  // Incrementa o contador em 1
  contadorAtual += 1;
  // Atualiza a cor do número
  contador.style.color = "#6a88ff";
  // Atualiza o texto do contador com o novo valor
  contador.textContent = contadorAtual;
  }

function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
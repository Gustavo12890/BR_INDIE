//Esta primeira linha guarda o carregamento completo do DOM antes de executar o código.
document.addEventListener("DOMContentLoaded", function() {

  //Declarando variáveis que se referem ao modal.
  var modal = document.getElementById('myModal');
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");

  //Essa variável obtém uma lista de todas as imagens com esta classe, para adicionar eventos de clique a elas.
  var images = document.getElementsByClassName("myImg");
  
  //Este For é um loop que percorre todas as imagens com a classe "myImg" e adicionar um evento de clique a cada uma.
  for (var i = 0; i < images.length; i++) {
      images[i].addEventListener("click", function() {

          //Quando uma das imagens é clicada o modal é exibido. (display="block") A imagem do modal recebe o "src" da imagem clicada e o texto alternativo.
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
      });
  }

  //Esta linha obtém o elemento com a classe "close".
  var span = document.getElementsByClassName("close")[0];

  //Quando o botão de fechar é clicado, o modal é fechado (display="none").
  span.onclick = function() { 
      modal.style.display = "none";
  }
});

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
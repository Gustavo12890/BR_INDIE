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

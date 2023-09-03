// Adicionando um ouvinte de evento para o formulário quando ele for enviado
document.getElementById('jogo-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impedindo o comportamento padrão do envio do formulário
    
    // Capturando os valores dos campos do formulário
    const capaImage = document.getElementById('capa-image').value;
    const titulo = document.getElementById('titulo').value;
    const descricao = document.getElementById('descricao').value;
    const image1 = document.getElementById('image-1').value;
    const image2 = document.getElementById('image-2').value;
    const image3 = document.getElementById('image-3').value;
    const genero1 = document.getElementById('genero-1').value;
    const genero2 = document.getElementById('genero-2').value;
    const backgroundColor = document.getElementById('background-color').value;
    
    // Aqui você pode processar os valores capturados do formulário, como enviá-los para um servidor
    // ou executar outras ações com eles.


      

    
});

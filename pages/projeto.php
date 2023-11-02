<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../css/projeto.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <script src="../bootstrap/js/bootstrap.js"></script>
  <script src="../js/projeto.js"></script>
  <title>Projetos</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div id="navBar" class="container-fluid w-100">
        <a class="navbar-brand logo link-hover" href="index.php"><img src="../img/img_landing/logo.png" alt="" style="width: 50px; height: auto;"> INDIE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="../img/img_landing/list.svg">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center mx-auto fs-5">
            <li class="nav-item">
              <a class="nav-link link-hover" aria-current="page" href="home.php">Encontrar Jogos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-hover" href="enviarProjeto.php">Enviar Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-hover" href="sobre.php">Sobre</a>
            </li>
          </ul>
          <a class="text-decoration-none" href="perfil.php">
            <div class="icone-perfil d-flex align-items-center justify-content-center">
              <p class="me-3 text-white fs-6 mt-3">Jolyne Kujo</p>
              <img class="perfil-foto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK5DBjWALBpiHnluwrjZHhF8oSrmkVdHUcFQ&usqp=CAU" alt="Foto de Perfil">
            </div>
          </a>
        </div>
      </div>
    </nav>
  </header>

<div class="container" style="background-color: #2e0523;">
  <div class="row">
    <div class="col-md-12 col-12 p-0 text-white">
      <img class="w-100" src="../img/img_projeto/celeste.png" alt="Capa">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h1 class="titulo mt-4 mb-4 fs-1 text-center">CELESTE</h1>
      <p class="texto-projeto">Celeste é um jogo eletrônico de plataforma desenvolvido pelos canadenses Maddy Thorson e Noel Berry, com arte feita pelo estúdio brasileiro MiniBoss. O jogo foi originalmente criado como um protótipo de quatro dias durante uma game jam, e depois foi expandido para o seu lançamento completo. Celeste foi lançado em janeiro de 2018 para Microsoft Windows, Nintendo Switch, PlayStation 4, Xbox One, macOS, e Linux. O jogo recebeu aclamação da crítica e foi premiado como "Melhor Jogo Independente" e "Jogo Mais Impactante" no The Game Awards 2018, além de ter sido indicado para "Jogo do Ano" e "Melhor Trilha Sonora" nesta mesma premiação.</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-7 col-12 d-flex justify-content-center">
      <p class="texto-projeto">Celeste é um jogo de plataforma no qual os jogadores controlam uma garota chamada Madeline enquanto ela sobe em uma montanha, evitando vários obstáculos mortais. Além de pular e escalar paredes por um período limitado de tempo, Madeline tem a capacidade de realizar um traço (dash, em inglês) no chão ou no meio do ar nas oito direções cardeais. Este movimento só pode ser realizado uma vez e deve ser reabastecido, seja aterrissando no chão ou atingindo certos objetos, como cristais (embora o jogador receba uma segunda colisão mais tarde no jogo). Ao longo de cada nível, o jogador encontrará mecânicas adicionais, como molas que lançam o jogador ou penas que permitem um breve voo, e objetos mortais como espinhos que matam Madeline (retornando-a para o início da seção). Jogadores menos habilidosos também podem acessar um "Modo de Assistência", onde podem alterar alguns atributos sobre a física do jogo. Algumas delas incluem: traços aéreos infinitos, invencibilidade ou retardar a velocidade do jogo. Escondidos em cada nível estão os morangos opcionais, obtidos através de desafiadoras seções de plataformas ou quebra-cabeças, que afetam levemente o final do jogo dependendo de quantos são coletados. Além disso, existem fitas cassetes que desbloqueiam variações mais difíceis de "B-Side" de certos níveis, e corações de cristal usados ​​para acessar o conteúdo pós-jogo. Vencendo todos os "B-Sides", em seguida, desbloqueia as versões "C-Side", que consiste em muito duras, mas pequenas variações sobre os níveis. Ao limpar todos os "C-Sides", o jogador pode acessar o menu Variantes. O menu Variantes permite que os jogadores alterem a física do jogo de maneira similar ao Modo de Assistência. Algumas dessas configurações "variantes" incluem: acelerar o jogo, 360 graus e baixa fricção em todas as superfícies planas. Essas configurações servem para tornar o jogo mais desafiador ou mais divertido. O protótipo original do "Celeste Classic" para o console Pico-8 também pode ser encontrado como um minigame escondido.</p>
    </div>
    <div class="imagens-projeto col-lg-4 col-12 col-md-12">
        <img class="hover-shadow cursor mb-4 img-fluid" src="../img/img_projeto/cenario.png" alt="Imagem 1" style="width:100%" onclick="openModal();currentSlide(1)">
        <img class="hover-shadow cursor mb-4 img-fluid" src="../img/img_projeto/cenario2.png"alt="Imagem 2" style="width:100%" onclick="openModal();currentSlide(2)">
        <img class="hover-shadow cursor img-fluid" src="../img/img_projeto/cenario3.png" alt="Imagem 3" style="width:100%" onclick="openModal();currentSlide(3)">
    </div>
      
      <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
      
          <div class="mySlides">
            <div class="numbertext">1 / 3</div>
            <img src="../img/img_projeto/cenario.png" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">2 / 3</div>
            <img src="../img/img_projeto/cenario2.png" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">3 / 3</div>
            <img src="../img/img_projeto/cenario3.png" style="width:100%">
          </div>
          
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
          <div class="caption-container">
            <p id="caption"></p>
          </div>
      
          <div>
            <div class="column">
              <img class="demo cursor" src="../img/img_projeto/cenario.png" style="width:100%" onclick="currentSlide(1)" alt="Imagem 1">
            </div>
            <div class="column">
              <img class="demo cursor" src="../img/img_projeto/cenario2.png" style="width:100%" onclick="currentSlide(2)" alt="Imagem 2">
            </div>
            <div class="column">
              <img class="demo cursor" src="../img/img_projeto/cenario3.png" style="width:100%" onclick="currentSlide(3)" alt="Imagem 3">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 d-flex justify-content-center mt-5">

          <button class="like-projeto" id="like" onclick="countClicks('like')"> <!--Passando um parametro do tipo string, para determinar qual botão foi clicado.-->
            <div class="label">
              <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
              Curtir
            </div>
            <div class="number" id="contador-like">0</div>
          </button>

          <button class="like-projeto" id="dislike" onclick="countClicks('dislike')">
            <div class="label">
              <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 14V4M8 14L4 14V4.00002L8 4M8 14L13.1956 20.0615C13.6886 20.6367 14.4642 20.884 15.1992 20.7002L15.2467 20.6883C16.5885 20.3529 17.1929 18.7894 16.4258 17.6387L14 14H18.5604C19.8225 14 20.7691 12.8454 20.5216 11.6078L19.3216 5.60779C19.1346 4.67294 18.3138 4.00002 17.3604 4.00002L8 4" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>             
              Deslike
            </div>
            <div class="number" id="contador-dislike">0</div>
          </button>

          <button class="like-projeto" id="favoritar" onclick="countClicks('favoritar')">
            <div class="label">
              <svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M22,10.1c0.1-0.5-0.3-1.1-0.8-1.1l-5.7-0.8L12.9,3c-0.1-0.2-0.2-0.3-0.4-0.4C12,2.3,11.4,2.5,11.1,3L8.6,8.2L2.9,9C2.6,9,2.4,9.1,2.3,9.3c-0.4,0.4-0.4,1,0,1.4l4.1,4l-1,5.7c0,0.2,0,0.4,0.1,0.6c0.3,0.5,0.9,0.7,1.4,0.4l5.1-2.7l5.1,2.7c0.1,0.1,0.3,0.1,0.5,0.1l0,0c0.1,0,0.1,0,0.2,0c0.5-0.1,0.9-0.6,0.8-1.2l-1-5.7l4.1-4C21.9,10.5,22,10.3,22,10.1z"></path></g></svg>             
              Favoritar
            </div>
            <div class="number" id="contador-favoritar">0</div>
          </button>

      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="comment-box text-white">
          <h2>Deixe um comentário:</h2>
          <textarea></textarea>
          <br>
          <button>Enviar</button>
        </div>
      </div>
    </div>
</div>

<footer class="bg-dark text-center text-white">
  <div class="container p-4">
    <section class="mb-4">
      <p>
        Nós somos BR Indie, uma plataforma gratuita, e independente, onde os jogadores e desenvolvedores de jogos podem se expressar e mostrar a sua criatividade. Temos como objetivo fomentar essa grande comunidade de criadores independentes.
      </p>
    </section>
    <section>
      <div class="row d-flex justify-content-center">
        <div class="col-6 col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-3 titulo-footer">Páginas</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-2">
              <a href="#!" class="link-footer text-decoration-none">início</a>
            </li>
            <li>
              <a href="#!" class="link-footer text-decoration-none">Sobre nós</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-3 titulo-footer">Contato</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-2">
              <a href="#!" class="link-footer text-decoration-none">br-indie@gmail.com</a>
            </li>
            <li>
              <a href="#!" class="link-footer text-decoration-none">(13)99999-9999</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-3 titulo-footer">Redes Sociais</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-2">
              <a href="#!" class="link-footer text-decoration-none">LinkedIn</a>
            </li>
            <li>
              <a href="#!" class="link-footer text-decoration-none">GitHub</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    ©2023 BR Indie Enterprises
    <a class="text-white" href="index.php">BR Indie</a>
  </div>
</footer>

</body>
</html>

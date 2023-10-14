<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <title>BR INDIE</title>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div id="navBar" class="container-fluid">
      <a class="navbar-brand logo link-hover" href="#"><img src="../img/img_landing/logo.png" alt="" style="width: 50px; height: auto;"> INDIE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img src="../img/img_landing/list.svg">
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center mx-auto fs-5" >
          <li class="nav-item">
            <a class="nav-link link-hover" aria-current="page" href="home.php">Encontrar Jogos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-hover" href="sobre.php">Sobre</a>
          </li>
        </ul>
        <form class="d-flex justify-content-center" action="login.php">
          <button class="btn btn-primary botao-login rounded-4 me-4" type="submit" style="width: 80px;">Entrar</button>
        </form>
      </div>
    </div>
  </nav>
</header>
<div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 textos">
        <h2 class="titulo fs-1 text-break"><span>CRIE, CONHEÇA, DIVIRTA-SE<p>E COMPARTILHE</p></span></h2>
        <p class="frase fs-3"><span>Um mundo de possibilidades infinitas.</span></p>
        <a href="criarConta.php"><button class="botao-cadastro p-2 rounded-4 mt-2 fs-5" type="submit">Cadastre-se</button></a>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6">
        <div class="ms-5">
        <img class="img-fluid img1" src="../img/img_landing/celeste2.png" alt="" width="600px" height="auto">
      </div>
      </div>
    </div>
  </div>
<div class="container">
  <div class="row d-flex flex-row-reverse row-objetivo">
    <div class="col-sm-6 col-md-6 col-lg-6 textos">
      <h2 class="titulo-objetivo fs-1 text-end text-center"><span>OBJETIVO</span></h2>
       <p class="texto-objetivo text-light float-end fs-4 mt-3">Estamos aqui para apoiar desenvolvedores independentes, proporcionando a eles uma plataforma onde podem exibir suas ideias inovadoras. Através da interação direta com os jogadores, buscamos refinamento constante, visando elevar a qualidade dos jogos nacionais. Faça parte dessa jornada conosco e contribua para o crescimento do mercado de games no Brasil.</p>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6">
      <img class="img-fluid img1 mt-5" src="../img/img_landing/personagem.png" alt="">
    </div>
  </div>
</div>
<section class="secao-cards">
  <div class="container reveal text-center">
    <h2 class="titulo-contas fs-1 text-center mb-5">TIPOS DE CONTAS</h2>
    <div class="cards row g-5">
      <div class="col">
        <div class="text-card">
          <h3 class="titulos-cards">Comum</h3>
          <img class="mx-auto d-block mb-4 mt-4" src="../img/img_landing/usuario.png" alt="" width="120px" height="120px">
          <p>Com uma conta comum, você pode fazer comentários, curtir e favoritar projetos.</p>
        </div>
      </div>
      <div class="col">
        <div class="text-card">
          <h3 class="titulos-cards">Desenvolvedor</h3>
          <img class="mx-auto d-block mb-4 mt-3" src="../img/img_landing/desenvolvedor.png" alt="" width="130px" height="130px">
          <p>A conta de desenvolvedor permite que você, além das ações de uma conta comum, possa criar seu próprio projeto.</p>
        </div>
      </div>
      <div class="col">
        <div class="text-card">
          <h3 class="titulos-cards">Assinante</h3>
          <img class="mx-auto d-block mb-4 mt-4" src="../img/img_landing/assinante.png" alt="" width="120px" height="120px">
          <p>Ao assinar o patreon do site, seus projetos terão uma seção especial na página principal, além de outros benefícios como acesso a demos e maior personalização. Visite nosso patreon para mais informações.</p>
        </div>
      </div>
    </div>
  </div>
</section>

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
    <a class="text-white" href="index.html">BR Indie</a>
  </div>
</footer>

  <script type="text/javascript">
    window.addEventListener('scroll', reveal);
    function reveal() {
      var reveals = document.querySelectorAll('.reveal')
      for(var i = 0; i < reveals.length; i++) {
          var windowheight = window.innerHeight;
          var revealtop = reveals[i].getBoundingClientRect().top;
          var revealpoint = 150;

          if (revealtop < windowheight - revealpoint) {
              reveals[i].classList.add('active');
          }
          else {
              reveals[i].classList.remove('active');
          }
      }
    } 
  </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/home.js"></script>
  <title>BR INDIE</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div id="navBar" class="container-fluid">
        <a class="navbar-brand logo link-hover" href="index.php"><img src="../img/img_landing/logo.png" alt=""
            style="width: 50px; height: auto;"> INDIE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="../img/img_landing/list.svg">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center mx-auto fs-5">
            <li class="nav-item">
              <a class="nav-link link-hover" aria-current="page" href="#">Encontrar Jogos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-hover" href="enviarProjeto.php">Enviar Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-hover" href="sobre.php">Sobre</a>
            </li>
          </ul>
          <a class="text-decoration-none" href="perfil.php">
            <div class="icone-perfil d-flex align-items-center justify-content-end">
              <p class="me-3 text-white fs-6 mt-3">Jolyne Kujo</p>
              <img class="perfil-foto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK5DBjWALBpiHnluwrjZHhF8oSrmkVdHUcFQ&usqp=CAU" alt="Foto de Perfil">
            </div>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="titulo fs-1 text-break text-center"><span>DESCUBRA, JOGUE, APAIXONE-SE PELO INESPERADO!</span>
        </h2>
        <div class="d-flex flex-row mt-4 w-75 mx-auto" style="margin-bottom: 6rem;">
          <input type="search" class="form-control barra" placeholder="Pesquisar por jogos" aria-label="Pesquisar por jogos"
            aria-describedby="button-addon2">
          <button class="btn btn-primary btn-login ms-2 rounded-5" type="button" id="button-addon2">Pesquisar</button>
        </div>
      </div>
    </div>

    <div class="row justify-content-center gap-3 mt-3 mb-cards">
      <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto">
        <div class="card">
          <img class="card-img-top" id="gif" onmouseover="trocar()" onmouseout="trocar()" src="../img/img_home/momodora.avif" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-titulo">Momodora</h5>
            <div class="d-flex justify-content-center mb-2">
              <a href="#" class="btn btn-success">Plataforma</a>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto">
        <div class="card">
          <a href="../pages/projeto.php"><img class="card-img-top" src="../img/img_home/celeste.png" alt="Card image cap"></a>
          <div class="card-body">
            <h5 class="card-titulo">Celeste</h5>
            <div class="d-flex justify-content-center mb-2">
              <a href="#" class="btn btn-success">Plataforma</a>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto">
        <div class="card">
          <img class="card-img-top"
            src="../img/img_home/rocketBravery.jpg"
            alt="Card image cap">
          <div class="card-body">
            <h5 class="card-titulo">Pocket Bravery</h5>
            <div class="d-flex justify-content-center mb-2">
              <a href="#" class="btn btn-danger">Luta</a>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>

    </div>

    <div class="row justify-content-center gap-3 mt-3 mb-cards">
      <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto">
        <div class="card">
          <img class="card-img-top"
            src="../img/img_home/UNSIGHTED.avif"
            alt="Card image cap">
          <div class="card-body">
            <h5 class="card-titulo">Unsighted</h5>
            <div class="d-flex justify-content-center mb-2">
              <a href="#" class="btn btn-info">Aventura</a>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>
      <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto">
        <div class="card">
          <img class="card-img-top"
            src="../img/img_home/dandyAce.avif"
            alt="Card image cap">
          <div class="card-body">
            <h5 class="card-titulo">Dandy Ace</h5>
            <div class="d-flex justify-content-center mb-2">
              <a href="#" class="btn btn-primary">Ação</a>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
        </div>
      </div>

      <div class="col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto">
        <div class="card">
          <img class="card-img-top"
            src="../img/img_home/chromaSquad.avif"
            alt="Card image cap">
          <div class="card-body">
            <h5 class="card-titulo">Chroma Squad</h5>
            <div class="d-flex justify-content-center mb-2">
              <a href="#" class="btn btn-warning">RPG</a>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
          </div>
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
              <a href="#!" class="link-footer text-decoration-none">br-inde@gmail.com</a>
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

<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
</script>
</body>
</html>
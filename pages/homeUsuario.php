<?php 
$time = 2 * 60 * 60; // Definido 2 horas.
session_set_cookie_params($time);
session_start();
if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
    require ("../php/conexao.php");
    $tipo_acesso = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];
} else {
    header ('location: index.php');
  }
?>
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
        <a class="navbar-brand logo link-hover" href="homeUsuario.php"><img src="../img/img_landing/logo.png" alt=""
            style="width: 50px; height: auto;"> INDIE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="../img/img_landing/list.svg">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center mx-auto fs-5">
            <li class="nav-item">
              <a class="nav-link link-hover" aria-current="page" href="homeUsuario.php">Encontrar Jogos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-hover" href="sobreUsuario.php">Sobre</a>
            </li>
          </ul>
          <p class=" nav-nome me-3 text-white fs-6 mt-3"><?php echo $nome; ?></p>
          <div class="dropdown show" id="myDropdown">
            <div class="d-flex justify-content-end">
              <span class="dropright text-decoration-none" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="icone-perfil d-flex align-items-center">
                  <img class="perfil-nav-foto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK5DBjWALBpiHnluwrjZHhF8oSrmkVdHUcFQ&usqp=CAU" alt="Foto de Perfil">
                </div>
              </span>
            </div>
            <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
              <a class="dropdown-txt dropdown-item" href="perfilUsuario.php">Perfil</a>
              <a class="dropdown-txt dropdown-item" href="../php/logout.php">Sair</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="titulo fs-1 text-break text-center"><?php echo "Bem vindo(a), ". $_SESSION["usuario"][0]?></span>
        </h2>
        <div class="d-flex flex-row mt-4 w-75 mx-auto" style="margin-bottom: 6rem;">
          <input type="search" class="form-control barra" placeholder="Pesquisar por jogos" aria-label="Pesquisar por jogos"
            aria-describedby="button-addon2">
          <button class="btn btn-primary btn-login ms-2 rounded-5" type="button" id="button-addon2">Pesquisar</button>
        </div>
      </div>
    </div>

    <div class="row justify-content-center gap-3 mt-3 mb-cards">
    <?php
      $mysqli = new mysqli ($server, $usuario, $senha, $banco);

      if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());

      $sql = 'SELECT cd_projeto, nm_projeto, img_capa, ds_projeto, nm_genero1 FROM tb_projeto';
      $query = $mysqli->query($sql);
      while ($projeto = $query->fetch_array()){
          $titulo_limitado = substr($projeto['nm_projeto'], 0, 50); // Limita o título a 50 caracteres
          $texto_limitado = substr($projeto['ds_projeto'], 0, 100); // Limita o texto a 100 caracteres

          echo "<div class='col-auto col-sm-12 col-md-auto col-lg-auto col-xl-auto'>
        <div class='card'>
          <a href='../pages/projetoUsuario.php?id_projeto=$projeto[cd_projeto]'><img class='card-img-top' src='$projeto[img_capa]' alt='Card image cap'></a>
          <div class='card-body'>
            <h5 class='card-titulo'>$titulo_limitado</h5>
            <div class='d-flex justify-content-center mb-2'>
              <a href='#' class='btn btn-success genero-home'>$projeto[nm_genero1]</a>
            </div>
            <p class='card-text'>$texto_limitado</p>
          </div>
        </div>
      </div>";
      }
  ?>

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
    <a class="text-white" href="index.php">BR Indie</a>
  </div>
</footer>
  <script src="../js/perfil.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
</script>
</body>
</html>
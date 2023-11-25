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
    <link rel="stylesheet" href="../css/sobre.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <title>Sobre Nós</title>
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
  <!-- Tamanho da imagem deve ser 1974x1579 redimensione aqui: https://www.iloveimg.com/pt/redimensionar-imagem#resize-options,pixels !-->
    <section class="mb-5">
        <div class="container d-flex align-self-center flex-column gap-5 mt-5">
        <h1 class="titulo-plataforma d-flex justify-content-center mt-2">BR Indie: uma plataforma para promover os jogos independentes nacionais</h1>
        <p class="text-white apelido fs-5">O BR Indie é a nossa resposta à necessidade de um espaço dedicado e gratuito para os talentosos desenvolvedores brasileiros apresentarem suas criações ao mundo. Inspirados pelo sucesso do itch.io, nossa plataforma se compromete a ser uma vitrine online, proporcionando visibilidade e oportunidades para os criativos que moldam o futuro dos jogos independentes no Brasil.</p>

        <p class="text-white apelido fs-5">Para os jogadores, oferecemos uma jornada emocionante rumo ao desconhecido, onde a descoberta de jogos inovadores é garantida. Para os desenvolvedores, o BR Indie é mais do que uma plataforma; é um parceiro dedicado, oferecendo suporte para impulsionar seus projetos ao estrelato.</p>

        <p class="text-white apelido fs-5">Junte-se a nós nessa aventura onde a comunidade de jogos independentes brasileiros se encontra, e descubra um universo de criatividade, originalidade e paixão. Seja bem-vindo ao BR Indie, onde os jogos nacionais encontram seu merecido destaque.</p>

            <div class="row d-flex justify-content-center"> 
                <div clas="col-12">
                    <h1 class="titulo d-flex justify-content-center mt-2">Desenvolvedores</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-8 col-md-4">
                    <img class="w-100 rounded-4" src="../img/img_sobre/caio.png">
                </div>
                <div class="col d-flex flex-column align-self-center ms-5">
                    <div class="col d-flex flex-row">
                        <p class="nome textos fs-4">Caio Freitas</p>
                        <p class="text-white apelido fs-4">"Gigaton, o mago"</p>
                    </div>
                    <p class="textos fs-6">Estudante de Desenvolvimento de Sistemas</p>
                    <p class="text-white textos fs-6">Alguma descrição muito boa sobre algo que vão colocar depois pra preencher espaço na tela</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-8 col-md-4">
                    <img class="w-100 rounded-4" src="../img/img_sobre/vitor.png">
                </div>
                <div class="col d-flex flex-column align-self-center ms-5">
                    <div class="col d-flex flex-row">
                        <p class="nome textos fs-4">Vitor Mamédio</p>
                        <p class="text-white apelido fs-4">"Gordão Foguetes"</p>
                    </div>
                    <p class="textos fs-6">Estudante de Desenvolvimento de Sistemas</p>
                    <p class="text-white textos fs-6">Alguma descrição muito boa sobre algo que vão colocar depois pra preencher espaço na tela</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="col-8 col-md-4">
                  <img class="w-100 rounded-4" src="../img/img_sobre/sergio.jpg">
              </div>
              <div class="col d-flex flex-column align-self-center ms-5">
                  <div class="col d-flex flex-row">
                      <p class="nome textos fs-4">Sergio Sobral</p>
                      <p class="text-white apelido fs-4">"Mexicano"</p>
                  </div>
                  <p class="textos fs-6">Estudante de Desenvolvimento de Sistemas</p>
                  <p class="text-white textos fs-6">Tenho 22 anos e sou amante de jogos RPG de ação e jogos de luta. Sou formado como técnico em edificações e, embora goste de arquitetura, acabei despertando muito interesse na programação. Sou responsável pela documentação do projeto, elaborando o caderno e os diários de bordo. Além disso, também contribuo no desenvolvimento do front-end do projeto.</p>
              </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-8 col-md-4">
                    <img class="w-100 rounded-4" src="../img/img_sobre/gustavo.png">
                </div>
                <div class="col d-flex flex-column align-self-center ms-5">
                    <div class="col d-flex flex-row">
                        <p class="nome textos fs-4">Gustavo Oliveira</p>
                    </div>
                    <p class="textos fs-6">Estudante de Desenvolvimento de Sistemas</p>
                    <p class="text-white textos fs-6">Alguma descrição muito boa sobre algo que vão colocar depois pra preencher espaço na tela</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-8 col-md-4">
                    <img class="w-100 rounded-4" src="../img/img_sobre/lincoln.png">
                </div>
                <div class="col d-flex flex-column align-self-center ms-5">
                    <div class="col d-flex flex-row">
                        <p class="nome textos fs-4">Lincoln Vinícius</p>
                    </div>
                    <p class="textos fs-6">Estudante de Desenvolvimento de Sistemas</p>
                    <p class="text-white textos fs-6">Tenho 23 anos. Faço parte do grupo de TCC BR Indie, e estou contribuindo com o back-end do projeto, mas também ajudo nas outras partes do nosso projeto.</p>
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
</body>
</html>

<?php 
$time = 2 * 60 * 60; // Definido 2 horas.
session_set_cookie_params($time);
session_start();
if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
    require ("../../php/conexao.php");
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
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/bootstrap.js"></script>
  <link rel="stylesheet" href="../../css/perfil.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <title>Perfil do Usuário</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div id="navBar" class="container-fluid">
        <a class="navbar-brand logo link-hover" href="../../pages/index.php"><img src="../../img/img_landing/logo.png" alt=""
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

    <img class="capa-foto" src="../../img/img_perfil/teste2.jpg" alt="">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 ">

          <div class="d-flex flex-column flex-lg-row">
              <img class="foto-perfil ms-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK5DBjWALBpiHnluwrjZHhF8oSrmkVdHUcFQ&usqp=CAU" alt="">
              <div class="box-perfil">
                  <h2 class="nome-perfil ms-3 mt-4"><?php echo $nome ?></h2>
                  <p class="text-white ms-3 fs-6">01 de setembro de 2023</p>
                  <p class="text-white ms-3">Imagine alguma descrição muito boa aqui.</p>
              </div>
              <div style="margin-right: 2rem" class="ms-auto">
                  <div class="mt-4 d-flex justify-content-end">
                    <button class="bseguir-perfil">+ Seguir</button>
                  </div>
                  <div class="mt-4 d-flex gap-5">
                      <div>
                          <h5 style="color: #8BA2FF">Seguidores</h5>
                          <p class="qt-seguidores">1000</p>
                      </div>
                      <div>
                          <h5 style="color: #8BA2FF">Projetos criados</h5>
                          <p class="qt-seguidores">01</p>
                      </div>
                  </div>
              </div>
           </div>
          
        </div>
      </div>

      <div class="container-swiper">
  <div class="col-md-4 projeto-txt">
    <h3 style="color: #8BA2FF" class="mt-5 ms-5">Projetos</h3>
    <p class="text-white ms-5">Alguns dos meus jogos criados.</p>
  </div>
  <div class="swiper-tamanho">
    <div class="swiper-dos-crias">
      <div class="slider mySwiper">
        <div class="image-items swiper-wrapper">
          <div class="swiper-slide">
            <img class="swiper-img" src="../../img/img_login_cadastro/carrosel1.png" alt="">
            <p>Dandy Ace</p>
          </div>
          <div class="swiper-slide">
            <img class="swiper-img" src="../../img/img_login_cadastro/carrosel2.jpg" alt="">
            <p>Dandara Trials of Fear Edition</p>
          </div>
          <div class="swiper-slide">
            <img class="swiper-img" src="../..//img/img_login_cadastro/carrosel3.jpg" alt="">
            <p>Horizon Chase Turbo</p>
          </div>
          <div class="swiper-slide">
            <img class="swiper-img" src="../../img/img_login_cadastro/carrosel4.png" alt="">
            <p>Unsighted</p>
          </div>
        </div>
        <div class="swiper-button-next arrowButton right"></div>
        <div class="swiper-button-prev arrowButton left"></div>
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



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerGroup: 1,
          loop: true,
          fade: true,
          grabCursor: true,
          loopFillGroupWithBlank: true,   
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },

          autoplay: {
          delay: 3500,
          disableOnInteraction: true,
          },
          
          breakpoints: {
            500: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            868: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            1250: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
          },
        });

        
    </script>
    <script src="../../js/perfil.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
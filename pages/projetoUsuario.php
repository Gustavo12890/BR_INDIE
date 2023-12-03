<?php 
$time = 2 * 60 * 60; // Definido 2 horas.
session_set_cookie_params($time);
session_start();
if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
  require ("../php/conexao.php");
    $tipo_acesso = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];
    $foto_usuario = $_SESSION["usuario"][2];
    $capa_usuario = $_SESSION["usuario"][3];
    $id_usuario = $_SESSION["usuario"][4];
} else {
    header ('location: index.php');
  }
  include("../php/conexao.php");

  $mysqli = new mysqli ($server, $usuario, $senha, $banco);

  if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());

  $id_projeto = $_GET['id_projeto'];

  $sql = "SELECT cd_projeto, nm_projeto, fonte_titulo, cor_titulo, img_capa, img_1, img_2, img_3, jogo, ds_projeto, ds_historia, fonte_descricao, cor_descricao, nm_genero1, nm_cor, nm_corL FROM tb_projeto WHERE cd_projeto = '$id_projeto'";
  $query = $mysqli->query($sql);
  $projeto = $query->fetch_array()
?>

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
<body style="background-color: <?php echo $projeto['nm_corL']?>;">
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div id="navBar" class="container-fluid w-100">
        <a class="navbar-brand logo link-hover" href="homeUsuario.php"><img src="../img/img_landing/logo.png" alt="" style="width: 50px; height: auto;"> INDIE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                  <img class="perfil-nav-foto" src="<?php echo $foto_usuario?>" alt="Foto de Perfil">
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
<div class="container" style="background-color: <?php echo $projeto['nm_cor']?>;">
  <div class="row">
    <div class="col-md-12 col-12 p-0 text-white">
      <img class="w-100" src="<?php echo $projeto['img_capa']?>" alt="Capa">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h1 class="titulo mt-4 mb-4 fs-1 text-center" style="color: <?php echo $projeto['cor_titulo']?>; font-family: <?php echo $projeto['fonte_titulo']?>;"><?php echo $projeto['nm_projeto']?></h1>
      <p class="texto-projeto" style="color: <?php echo $projeto['cor_descricao']?>; font-family: <?php echo $projeto['fonte_descricao']?>;"><?php echo $projeto['ds_projeto']?></p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-7 col-12 d-flex justify-content-center">
      <p class="texto-projeto"><?php echo $projeto['ds_historia']?></p>
    </div>
    <div class="imagens-projeto col-lg-4 col-12 col-md-12">
      <!--A classe "myImg" está sendo usada para identificar as imagens que abrirão no modal.-->
      <img class="hover-shadow cursor mb-4 img-fluid" src="<?php echo $projeto['img_1']?>" style="width:100%" onclick="openModal();currentSlide(1)" alt="Imagem 1">
      <img class="hover-shadow cursor mb-4 img-fluid" src="<?php echo $projeto['img_2']?>" style="width:100%" onclick="openModal();currentSlide(2)" alt="Imagem 2">
      <img class="hover-shadow cursor img-fluid" src="<?php echo $projeto['img_3']?>" style="width:100%" onclick="openModal();currentSlide(3)" alt="Imagem 3">
    </div>
      
      <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
      
          <div class="mySlides">
            <div class="numbertext">1 / 3</div>
            <img src="<?php echo $projeto['img_1']?>" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">2 / 3</div>
            <img src="<?php echo $projeto['img_2']?>" style="width:100%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">3 / 3</div>
            <img src="<?php echo $projeto['img_3']?>" style="width:100%">
          </div>
          
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
          <div class="caption-container">
            <p id="caption"></p>
          </div>
      
          <div style="background-color: black;" class="d-flex justify-content-center">
            <div class="column">
              <img class="demo cursor" src="<?php echo $projeto['img_1']?>" style="width:100%" onclick="currentSlide(1)" alt="Imagem 1">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo $projeto['img_2']?>" style="width:100%" onclick="currentSlide(2)" alt="Imagem 2">
            </div>
            <div class="column">
              <img class="demo cursor" src="<?php echo $projeto['img_3']?>" style="width:100%" onclick="currentSlide(3)" alt="Imagem 3">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 d-flex justify-content-end mt-5">
      <ul id="botoesProjeto" class="list-unstyled">
        <li>
          <button class="like-projeto" id="like" onclick="countClicks('like')"> <!--Passando um parametro do tipo string, para determinar qual botão foi clicado.-->
            <div class="label">
              <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 10V20M8 10L4 9.99998V20L8 20M8 10L13.1956 3.93847C13.6886 3.3633 14.4642 3.11604 15.1992 3.29977L15.2467 3.31166C16.5885 3.64711 17.1929 5.21057 16.4258 6.36135L14 9.99998H18.5604C19.8225 9.99998 20.7691 11.1546 20.5216 12.3922L19.3216 18.3922C19.1346 19.3271 18.3138 20 17.3604 20L8 20" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
              Curtir
            </div>
            <div class="number" id="contador-like">0</div>
          </button>
        </li>
        <li>
          <button class="like-projeto" id="dislike" onclick="countClicks('dislike')">
            <div class="label">
              <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 14V4M8 14L4 14V4.00002L8 4M8 14L13.1956 20.0615C13.6886 20.6367 14.4642 20.884 15.1992 20.7002L15.2467 20.6883C16.5885 20.3529 17.1929 18.7894 16.4258 17.6387L14 14H18.5604C19.8225 14 20.7691 12.8454 20.5216 11.6078L19.3216 5.60779C19.1346 4.67294 18.3138 4.00002 17.3604 4.00002L8 4" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>             
              Deslike
            </div>
            <div class="number" id="contador-dislike">0</div>
          </button>
        </li>
        <li>
          <button class="like-projeto" id="favoritar" onclick="countClicks('favoritar')">
            <div class="label">
              <svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M22,10.1c0.1-0.5-0.3-1.1-0.8-1.1l-5.7-0.8L12.9,3c-0.1-0.2-0.2-0.3-0.4-0.4C12,2.3,11.4,2.5,11.1,3L8.6,8.2L2.9,9C2.6,9,2.4,9.1,2.3,9.3c-0.4,0.4-0.4,1,0,1.4l4.1,4l-1,5.7c0,0.2,0,0.4,0.1,0.6c0.3,0.5,0.9,0.7,1.4,0.4l5.1-2.7l5.1,2.7c0.1,0.1,0.3,0.1,0.5,0.1l0,0c0.1,0,0.1,0,0.2,0c0.5-0.1,0.9-0.6,0.8-1.2l-1-5.7l4.1-4C21.9,10.5,22,10.3,22,10.1z"></path></g></svg>             
              Favoritar
            </div>
            <div class="number" id="contador-favoritar">0</div>
          </button>
        </li>
      </ul>
      </div>
    </div>
    <?php 
    if ($id_projeto == $projeto['jogo']) {
    echo "<div>
    <iframe src='$projeto[jogo]' height='600' width='980'>
    </iframe>
    </div>";
  } else {
    echo "<div>
    <iframe src='$projeto[jogo]' height='600' width='980'>
    </iframe>
    </div>";
  }
    ?>
   <?php
	
  require('../php/conexao.php');

  if (isset($_POST['post_comment'])) {

    $message = $_POST['message'];
    $id_projeto = $_POST['id_projeto'];
    


    $sql = "INSERT INTO tb_comentario (ds_mensagem, cd_projeto, cd_perfil)
          VALUES ('$message', '$id_projeto', '$id_usuario')";

  if ($conexao->query($sql) === TRUE){
    echo "";
  } 
}
?>
<div class="conteudo-comentario">
  <?php
  $id_projeto = $_GET['id_projeto'];

  $sql = "SELECT
    tb_comentario.id_comentario,
    tb_comentario.ds_mensagem,
    tb_usuarios.nm_usuario,
    tb_usuarios.fotoperfil
  FROM
    tb_comentario
  INNER JOIN
    tb_usuarios
  ON
    tb_comentario.cd_perfil = tb_usuarios.id_usuario
  WHERE
    tb_comentario.cd_projeto = $id_projeto";
    $result = $conexao->query($sql);

  if ($result->rowCount() > 0) {
      // output data of each row
      while($row = $result->fetch(PDO::FETCH_ASSOC)) {

          // Recupera a foto do usuário
          $foto_usuario = $row['fotoperfil'];

          // Exibe a mensagem do usuário
         
          echo "<div conteudo-comentario>
          <div>
          <p><img class='foto-usuario' src='$foto_usuario' alt='Foto do usuário'>
          </div>
          <div class='nomeuser'>
          <b>{$row['nm_usuario']}</b>: {$row['ds_mensagem']}</p>
          </div>
          </div>";
        } } ?>
</div>

<div class="row">
      <div class="col-12">
        <div class="comment-box text-white">
          <h2>Deixe um comentário:</h2>
          <form action="" method="post" class="form">
          <input type="hidden" name="id_projeto" value="<?php echo $id_projeto; ?>">
          <textarea name="message" class="caixacomentario"></textarea>
          <br>
          <button type="submit" class="btn btn-light" name="post_comment">Enviar</button>
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
<script src="../js/perfil.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

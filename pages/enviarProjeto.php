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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/enviarProjeto.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>Criar Jogo</title>
</head>
<body>
    <!--BARRA DE NAVEGAÇÃO-->
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
              <a class="nav-link link-hover" aria-current="page" href="home.php">Encontrar Jogos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-hover" href="enviarProjeto.php">Enviar Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-hover" href="sobre.php">Sobre</a>
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
              <a class="dropdown-txt dropdown-item" href="perfil.php">Perfil</a>
              <a class="dropdown-txt dropdown-item" href="../php/logout.php">Sair</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!--BARRA DE NAVEGAÇÃO-->
    <!--Formulário--> 
    <div class="background-container">
    <img class="img-cadastro" src="../img/img_criar_jogo/celestewp.png" alt="fundo">
        <div class="container mt-4">
            <form id="jogo-form" action="../php/uploadarquivos.php"  enctype="multipart/form-data" method="post">
                <label class="form-titulo" for="titulo">Título:</label>
                <input class="caixa-titulo"  type="text"  name="titulo" id="titulo" required>
                <label class="form-texto" for="descricao">História:</label>
                <textarea class="caixa-input" name="descricao" id="descricao" rows="5" maxlength="5000" required></textarea>
                <label class="form-texto" for="descricao">Descrição:</label>
                <textarea class="caixa-input" name="historia" id="historia" rows="15" maxlength="8000" required></textarea>
                    <!--Primeiro genero-->
                    <div class="form-genero-container">
                        <div class="form-genero">
                            <label class="form-texto" for="genero-1">Gênero 1:</label>
                            <select class="input-genero"  name="genero-1" id="genero-1" required>
                                <option value="" disabled selected>Selecione um gênero</option>
                                <option value="Ação">Ação</option>
                                <option value="Aventura">Aventura</option>
                                <option value="RPG">RPG</option>
                                <option value="FPS">FPS</option>
                                <option value="Simulação">Simulação</option>
                                <option value="Terror">Terror</option>
                                <option value="Plataforma">Plataforma</option>
                                <option value="Quebra-Cabeças">Quebra-Cabeças</option>
                                <option value="Esportes">Esportes</option>
                                <option value="Corrida">Corrida</option>
                                <option value="Luta">Luta</option>
                                <option value="MMORPG">MMORPG</option>
                                <option value="Roguelike">Roguelike</option>
                                <option value="Mundo Aberto">Mundo Aberto</option>
                                <option value="Battle Royale">Battle Royale</option>
                                <option value="Stealth">Stealth</option>
                                <option value="Música e Ritmo">Música e Ritmo</option>
                                <option value="Visual Novel">Visual Novel</option>
                                <option value="Cartas">Cartas</option>
                            </select>
                    <!--Primeiro genero-->
                        </div>
                        <!--Segundo genero-->
                        <div class="form-genero">
                            <label class="form-texto" for="genero-2">Gênero 2 (opcional):</label>
                            <select class="input-genero"  name="genero-2" id="genero-2">
                                <option value="" selected>Nenhum</option>
                                <option value="Ação">Ação</option>
                                <option value="Aventura">Aventura</option>
                                <option value="RPG">RPG</option>
                                <option value="FPS">FPS</option>
                                <option value="Simulação">Simulação</option>
                                <option value="Terror">Terror</option>
                                <option value="Plataforma">Plataforma</option>
                                <option value="Quebra-Cabeças">Quebra-Cabeças</option>
                                <option value="Esportes">Esportes</option>
                                <option value="Corrida">Corrida</option>
                                <option value="Luta">Luta</option>
                                <option value="MMORPG">MMORPG</option>
                                <option value="Roguelike">Roguelike</option>
                                <option value="Mundo Aberto">Mundo Aberto</option>
                                <option value="Battle Royale">Battle Royale</option>
                                <option value="Stealth">Stealth</option>
                                <option value="Música e Ritmo">Música e Ritmo</option>
                                <option value="Visual Novel">Visual Novel</option>
                                <option value="Cartas">Cartas</option>
                            </select>
                            <!--Segundo genero-->
                        </div>
                    </div> 
                <div class="txt-img-container-capa">
                    <p class="img-texto-capa"><strong>Imagem da capa:</strong></p>
                    <label class="btn-img" for="capa-image" >Enviar arquivo</label>
                </div>      
                <input class="form-texto" type="file" name="arquivo[0]" id="capa-image" onchange="previewCapa()"  accept="image/*"><br>
                <img class="img-capa" id="input-capa"  class="w-100">

                    <div class="img-adicional">
                    <div class="txt-img-container">
                        <p class="img-texto"><strong>Imagem 1:</strong></p>
                        <label class="btn-img-adicional" for="image-1">Enviar arquivo</label>
                    </div>
                        <input class="form-texto-img" type="file" name="arquivo[1]"  id="image-1" onchange="previewImagem1()" accept="image/*"><br>
                        <img class="form-img" id="input-img1"  class="input-img">
                    </div>
                    
                    <div class="img-adicional">
                        <div class="txt-img-container">
                            <p class="img-texto"><strong>Imagem 2:</strong></p>
                            <label class="btn-img-adicional"for="image-2">Enviar arquivo</label>
                        </div>
                        <input class="form-texto-img" type="file" name="arquivo[2]" id="image-2" onchange="previewImagem2()" accept="image/*"><br>
                        <img  class="form-img" id="input-img2"  class="input-img">
                    </div>
                
                    <div class="img-adicional">
                        <div class="txt-img-container">
                        <p class="img-texto"><strong>Imagem 3:</strong></p>
                        <label class="btn-img-adicional" for="image-3">Enviar arquivo</label>
                        </div>
                        <input  class="form-texto-img" type="file" name="arquivo[3]" id="image-3" onchange="previewImagem3()" accept="image/*"><br>
                        <img  class="form-img" id="input-img3"  class="input-img">
                    </div>
                    <!-- <div class="img-adicional">
                        <div class="txt-img-preview-container">
                        <p class="img-texto-preview"><strong>Preview do jogo (opcional):</strong></p>
                        <label class="btn-img-adicional" for="gif">Enviar arquivo</label>
                        </div>
                        <input  class="form-texto-img" type="file" name="arquivo[4]" id="gif" onchange="previewgif()" accept="image/*"><br>
                        <img  class="form-img" id="input-gif"  class="input-img">
                    </div> -->
                    <div id="color-pickers">
                        <div class="form-cor-container">
                            <div class="form-cor-esquerdo">
                                <label class="form-texto-cor">Cor de Background:</label>
                                <input class="formcor-tamanho color-selector" id="cor" type="color" name="cor" value="#ffffff">
                                <input class="hex-input" type="text" name="hex_input">
                            </div>
                            <div class="form-cor">
                                <label class="form-texto-cor" for="background-color">Cor das bordas:</label>
                                <input class="formcor-tamanho color-selector" type="color" name="border-color" value="#ffffff">
                                <input class="hex-input" type="text" name="hex_input2">
                            </div>
                        </div>
                        <div class="form-btn-container">
                            <button class="form-btn" name="submit" type="submit">Enviar</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <script>
        function previewCapa() {
            var capa = document.getElementById('capa-image').files[0];
            var preview = document.getElementById('input-capa');
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (capa) {
                reader.readAsDataURL(capa);
            } else {
                preview.src = "";
            }
         }

        function previewImagem1() {
            var imagem1 = document.getElementById('image-1').files[0];
            var preview1 = document.getElementById('input-img1');
            var reader1 = new FileReader();

            reader1.onloadend = function () {
                preview1.src = reader1.result;
            }

            if (imagem1) {
                reader1.readAsDataURL(imagem1);
            } else {
                preview1.src = "";
            }
        }

        function previewImagem2() {
            var imagem2 = document.getElementById('image-2').files[0];
            var preview2 = document.getElementById('input-img2');
            var reader2 = new FileReader();

            reader2.onloadend = function () {
                preview2.src = reader2.result;
            }

            if (imagem2) {
                reader2.readAsDataURL(imagem2);
            } else {
                preview2.src = "";
            }
        }

        function previewImagem3() {
            var imagem3 = document.getElementById('image-3').files[0];
            var preview3 = document.getElementById('input-img3');
            var reader3 = new FileReader();

            reader3.onloadend = function () {
                preview3.src = reader3.result;
            }

            if (imagem3) {
                reader3.readAsDataURL(imagem3);
            } else {
                preview3.src = "";
            }
        }

        function previewgif() {
            var gif = document.getElementById('gif').files[0];
            var previewgif = document.getElementById('input-gif');
            var readergif = new FileReader();

            readergif.onloadend = function () {
                previewgif.src = readergif.result;
            }

            if (gif) {
                readergif.readAsDataURL(gif);
            } else {
                previewgif.src = "";
            }
        }
    </script>
    <script src="../js/perfil.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/cor.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/criarConta.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>Criar conta</title>
</head>
<body>
    <header class="header-login">
        <a class="navbar-brand logo fs-5 ms-4" href="index.php"><img src="../img/img_landing/logo.png" alt="" style="width: 60px; height: auto;"> INDIE</a>
    </header>
    <div class="background d-flex position-relative justify-content-center align-items-center" >
        <div id="carouselExampleSlidesOnly" class="background-img" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../img/img_login_cadastro/carrosel1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../img/img_login_cadastro/carrosel2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../img/img_login_cadastro/carrosel3.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../img/img_login_cadastro/carrosel4.png" alt="Third slide">
              </div>
            </div>
        </div>

        <div class="form-container mt-5">
            <div class="form-cadastro">
            <form action="../php/cadastro.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 px-4 form-esquerdo mt-4">
                    <label class="label-cadastro">Nome de usuário:</label>
                    <input class="input-cadastro" type="text" name="nome" id="nome" required><br><br>

                    <label class="label-cadastro">Email:</label>
                    <input class="input-cadastro" type="email" name="email" id="email" required><br><br>

                    <label class="label-cadastro">Senha:</label>
                    <input class="input-cadastro" type="password" name="senha" id="senha" required><br><br>

                    <label class="label-cadastro">Confirmação de Senha:</label>
                    <input class="input-cadastro" type="password" id="confirmSenha" required><br><br>
                </div>

                <div class="col-md-6 px-4 mt-1">
                    <label class="label-cadastro nascimento" for="nascimento">Data de Nascimento:</label>
                    <input class="input-cadastro" type="date" id="nascimento" required><br><br>

                    <label class="label-cadastro nascimento" for="nascimento">Foto de perfil:</label>
                    <input class="input-cadastro" name="arquivo[0]" type="file" required><br><br>
                    
                    <label class="label-cadastro nascimento" for="nascimento">Foto de capa:</label>
                    <input class="input-cadastro" name="arquivo[1]" type="file" required><br><br>
                    
                    <label class="label-cadastro ms-1">Qual o tipo de conta?</label>
                    <select class="input-genero rounded ms-2"  name="tipoconta" required>
                    <option value="Comum" >Comum</option>
                     <option value="Desenvolvedor">Desenvolvedor</option>
                     </select>

                    <button class="btn btn-cadastro btn-lg float-right" name="submit">Cadastrar</button>
                    <p class="label-cadastro mt-2">Já possui uma conta? <a class="link-login" href="../pages/login.php">Entre</a></p>

                </div>
            </div>
            <p class="label-cadastro termos mt-3 text-center">Ao se cadastrar, você aceita os 
                <a class="link-login" href="#">Termos de Uso</a> e a 
                <a class="link-login" href="#">Política de Privacidade</a>
            </p>
        </form>

            </div>
        </div>
    </div>
    
<script type="text/javascript" src="../js/criarConta.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <title>Formulário de Login</title>
</head>
<body>
  <header class="header-login">
    <a class="navbar-brand logo fs-5 ms-4" href="index.php"><img src="../img/img_landing/logo.png" style="width: 60px; height: auto;"> INDIE</a>
  </header>
  <div class="container-fluid d-flex position-relative justify-content-center align-items-center" style="min-height: 100vh;">
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
    <div class="container-fluid d-flex justify-content-center align-items-center">
      <div class="card-login">
        <h1 id="tituloLogin">Login</h1>
        <form id="formLogin" action="../php/logar.php" method="POST">
          <label class="label-login" for="emailOrUsername">Email ou Usuário:</label>
          <input class="input-login" type="text" id="emailUsuario" name="email" required>
          <label class="label-login" for="password">Senha:</label>
          <input class="input-login" type="password" name="senha" required>
          <button id="btnLogin" type="submit" value="Entrar">Entrar</button>
        </form>
        <p style="color: white">Não tem uma conta?
          <a id="linkLogin" href="../pages/criarConta.php">Crie uma agora mesmo</a>
        </p>
      </div>
    </div>
  </div>
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
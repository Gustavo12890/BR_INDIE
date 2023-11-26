<?php
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_brindie";

$nomeusuario = $_POST['nome'];
$emailusuario = $_POST['email'];
$senhausuario = $_POST['senha'];
$tipoacesso = $_POST['tipoconta'];


try {
$conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
  // set the PDO error mode to exception
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO tb_usuarios (nm_usuario, email_usuario, senha_usuario, tipo_acesso) VALUES ('$nomeusuario', '$emailusuario', '$senhausuario', '$tipoacesso')";
  // use exec() because no results are returned
  $conexao->exec($sql);
  echo "Cadastro feito com sucesso!";
  header('Location: ../pages/login.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
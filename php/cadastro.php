<?php
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_brindie";

$nomeusuario = $_POST['nome'];
$emailusuario = $_POST['email'];
$senhausuario = $_POST['senha'];



try {
$conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
  // set the PDO error mode to exception
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO tb_usuarios (nm_usuario, email_usuario, senha_usuario) VALUES ('$nomeusuario', '$emailusuario', '$senhausuario')";
  // use exec() because no results are returned
  $conexao->exec($sql);
  echo "Cadastro feito com sucesso!";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
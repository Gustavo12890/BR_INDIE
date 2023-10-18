<?php 
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_brindie";

try {
$conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $erro) {
    echo "Ocorreu um erro de conexão: {$erro->getMessage()}";
    $conexao = null;
}


?>
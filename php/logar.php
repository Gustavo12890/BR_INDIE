<?php 
require ("conexão.php");

if(isset($_POST["email"]) && ($_POST["senha"]) && $conexao != null) {
   $query =  $conexao->prepare("SELECT * FROM tb_usuarios WHERE email_usuario = ? AND senha_usuario = ?");
   $query->execute(array($_POST["email"], $_POST["senha"]));

if ($query->rowCount()){
    $user = $query->fetchAll(PDO::FETCH_ASSOC)[0]; 

    session_start();
    $_SESSION["usuario"] = array($user["nm_usuario"], $user["tipo_acesso"]);

    if ($user["tipo_acesso"] == 1) {
    header('Location: ../pages/desenvolvedor.php');
    die();
} 

    elseif ($user=["tipo_acesso"] != 1) {
        header('Location: ../pages/home.php');
        die();
    }

} else {
    header('Location: ../login.php');
    die();
}

} else {
    header('Location: ../index.php');
    die();
}

?>
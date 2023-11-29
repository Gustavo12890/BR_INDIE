<?php 
require ("conexao.php");

if(isset($_POST["email"]) && ($_POST["senha"]) && $conexao != null) {
   $query =  $conexao->prepare("SELECT * FROM tb_usuarios WHERE email_usuario = ? AND senha_usuario = ?");
   $query->execute(array($_POST["email"], $_POST["senha"]));

if ($query->rowCount()){
    $user = $query->fetchAll(PDO::FETCH_ASSOC)[0]; 

    session_start();
    $_SESSION["usuario"] = array($user["nm_usuario"], $user["tipo_acesso"], $user["fotoperfil"], $user["fotocapa"]);

    if ($user['tipo_acesso'] == 'Comum') {
    header('Location: ../pages/homeUsuario.php');
    die();
    } 
    elseif ($user['tipo_acesso'] == 'Desenvolvedor') {
    header('Location: ../pages/homeDev.php');
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


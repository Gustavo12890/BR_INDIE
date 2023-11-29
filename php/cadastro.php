<?php
$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_brindie";

if (isset($_POST['submit'])) {
    $arquivo = $_FILES["arquivo"];
    $pasta = "../arquivos/";
    $count = 0;
    // Aqui é criado um array das imagens
    $imagens = array();

    foreach ($_FILES["arquivo"]["name"] as $f => $name) {
        //Gerando nome aleatório pra imagem (vi q daria problema se deixasse o nome original)
        $newName = uniqid();
        //Pegando a extensão
        $extensao = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        //Formando o caminho
        $path = $pasta . $newName . "." . $extensao;

        // A inserção será feita uma vez só então retirei a query de dentro do foreach

        if (move_uploaded_file($arquivo["tmp_name"][$f], $path)) {

            // Inseri a imagem no array... E isso sera feito sempre até acabar...
            array_push($imagens, $path);

            $count++;
        }
    }
    // e ai insiro as imagens de uma vez só no mesmo registro...
$fotoperfil = $imagens[0];
$fotocapa = $imagens[1];
$nomeusuario = $_POST['nome'];
$emailusuario = $_POST['email'];
$senhausuario = $_POST['senha'];
$tipoacesso = $_POST['tipoconta'];

try {
$conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
  // set the PDO error mode to exception
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO tb_usuarios (nm_usuario, email_usuario, senha_usuario, tipo_acesso, fotoperfil, fotocapa) VALUES ('$nomeusuario', '$emailusuario', '$senhausuario', '$tipoacesso', '$fotoperfil', '$fotocapa')";
  // use exec() because no results are returned
  $conexao->exec($sql);
  echo "Cadastro feito com sucesso!";
  header('Location: ../pages/login.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
}
?>
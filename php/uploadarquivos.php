<?php
include("../php/conexao.php");
session_start();
$id_usuario = $_SESSION["usuario"][4];
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
    $imgcapa = $imagens[0];
    $img1 = $imagens[1];
    $img2 = $imagens[2];
    $img3 = $imagens[3];
    $titulo = $_POST['titulo'];
    $fonteTitulo = $_POST['fonte_titulo'];
    $corTitulo = $_POST ['cor-titulo'];
    $descricao = $_POST['descricao'];
    $fonteDescricao = $_POST['fonte_descricao'];
    $corDescricao = $_POST['cor-descricao'];
    $genero1 = $_POST['genero-1'];
    $genero2 = $_POST['genero-2'];
    $hexCode = $_POST['hex_input'];
    $hexCode2 = $_POST['hex_input2'];
    $historia = $_POST['historia'];
    $projeto = $_POST['linkjogo'];

    $conexao->query("INSERT INTO `tb_projeto` (`cd_projeto`, `cd_perfil`, `nm_projeto`, `fonte_titulo`, `cor_titulo`, `ds_projeto`, `fonte_descricao`, `cor_descricao`, `nm_genero1`, `nm_genero2`, `img_capa`, `img_1`, `img_2`, `img_3`, `jogo`, `data_temp`, `nm_cor`, `nm_corL`, `dt_projeto`, `qt_curtida`, `ds_historia`, `qt_ruim`) VALUES (NULL, '$id_usuario', '$titulo', '$fonteTitulo', '$corTitulo', '$descricao', '$fonteDescricao', '$corDescricao', '$genero1', '$genero2', '$imgcapa', '$img1', '$img2', '$img3', '$projeto', '', '$hexCode', '$hexCode2', '', '', '$historia', '');");
}
header('Location: ../pages/homeDev.php');

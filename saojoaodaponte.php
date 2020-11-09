<?php
$host = "localhost";
$user = "busca903_projeto";
$pass = "jf91500290";
$banco = "busca903_projeto_x";

$conexao = mysqli_connect($host, $user, $pass, $banco);



function buscaurl($conexao){

    $query = "SELECT url from urls where urls_id = 7";   

    $resultado = mysqli_query($conexao, $query);
    $tipo = mysqli_fetch_assoc($resultado);
    $tipo = implode($tipo);
    return $tipo;
}

@$url = buscaurl($conexao);

?>

<meta http-equiv="refresh" content="1; URL=<?= $url ?>"/>
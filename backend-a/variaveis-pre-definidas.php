<?php

//var_dump exibe informacoes sovre a variavel,como o tipo, o valor e etc
//$_GET e $_POST é um array que recebe os paramentros passados pela requisicao
//$_GET pega da URL
//var_dump($_GET);

$nome = $_GET["nome"];
$idade = $_GET["idade"];
$anoNascimento = 2021 - $idade;

if($_GET["fez-aniversario"] === "on"){

}

echo "<h1>Ola, $nome voce nasceu em $anoNascimento</h1>";


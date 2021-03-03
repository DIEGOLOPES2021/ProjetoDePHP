<?php

$nome = $_GET["nome"];
$salario = $_GET["salario"];

if($salario < 5000){

    $descontoDeVintePorcento = 20 * $salario /100 + $salario ;
    $descontoDePorcento = 20 * $salario /100 ;

    echo "<h1>Valor do aumento: $descontoDePorcento</h1>";
    echo "<h1>Seu salario atual: $descontoDeVintePorcento</h1>";

}else{

    $descontoDeVintePorcento = 10 * $salario /100 + $salario ;
    $descontoDeePorcento = 10 * $salario /100 ;

    echo "<h1>Valor do aumento: $descontoDeePorcento</h1>";
    echo "<h1>Seu salario atual: $descontoDeVintePorcento</h1>";


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>

        Salario antigo: <?=$salario?>

    </h1>
    
</body>
</html>
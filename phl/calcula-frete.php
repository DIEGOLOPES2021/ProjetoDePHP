<?php

const VALOR_PEDAGIO = 9.4;
const VALOR_KM = 6;

$origem = $_GET["origem"];
$destino = $_GET["destino"];
$distancia = $_GET["distancia"];
$pedagios = $_GET["pedagios"];

$custoDoPedagio = $pedagios * VALOR_PEDAGIO;
$custoDoKm = $distancia * VALOR_KM;
$total = $custoDoPedagio + $custoDoKm;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles-global.css" />
    
    <title>Document</title>
</head>
<body>
    <?php

    if($custoDoPedagio > 100){
        echo " <h1 style='color: red'> o valor é  $custoDoPedagio  ";
    }else{
        echo "<h1 style='color:#004f1d'> o valor é  $custoDoPedagio  </h1>";
    }

    ?>
    <h1>
        A viagem de <?= $origem ?> á <?= $destino ?>ira custar o vai custar
        o valor total de R$ <em><?= $total?></em>
    </h1>
    
</body>
 </html>
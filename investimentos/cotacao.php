<?php

$reais= $_GET["reais"];
$euros= 6.57;
$dolares=5.41;
$sistema= isset($_GET['sistema']) ? $_GET['sistema'] : NULL;

if($sistema == "dolares"){
    $resultado = $reais / $dolares;
    echo "$resultado";
}
else if ($sistema == "euros"){
    $resultado = $reais / $euros;
    echo "$resultado";

}

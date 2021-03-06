<?php

$reais = $_GET["reais"];
$euros = $reais / 6.57 ;
$dolares = $reais / 5.66;


if($dolares == $dolares){

    $conta =   $reais / $dolares   ;
    echo "$conta";

}else{

    $contaa =   $reais / $euros  ;
    echo "$contaa";
}






?>
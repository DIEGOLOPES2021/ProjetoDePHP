<?php

function somarInteiros(array $vetoresInteiros){

    $soma = 0;

    foreach($vetoresInteiros as $numeros){

        $soma = $soma + $numeros;
    }
return $soma;

}

$inteiros = [30, 30, 30];

echo somarInteiros($inteiros);
<?php

function estaContido(array $vetor, array $vetorContido){

    foreach($vetorContido as $valorVetor2){
        $encontrado = false;
        foreach($vetor as $valorVetor1){
                if($valorVetor1 == $valorVetor2){
                    $encontrado = true;
                    break;
            }
        }
        if(!$encontrado){
            return false;
        }
    }
    return true;
}

$vetor1 = [1,2,3,4];
$vetor2= [5,9];

if(estaContido($vetor1, $vetor2)){
    echo "sim!";
}
else{
    echo "nao";
}

<?php

function getKeys(array $vetor){
    $chaves = [];

    foreach($vetor as $key => $value){
        $chaves[]= $key;
    }
    return $chaves;
}
$vetorQualquer = [
    "chave1" => "valor1",
    999 => "valor2",
    "abobrinha" => "valor3"
];

$vetoreDeChaves = getKeys($vetorQualquer);

print_r($vetoreDeChaves);
<?php

function calcularMedia(array $notas){
    $soma =0;
    foreach($notas as $nota){
$soma += $nota;
    }
    // *count* ele conta os elementos do vetor
    $media = $soma/ count($notas);
    return $media;
}

$notasAlunos =[44,434,344,3,23,233,2];
$mediaDaSala = calcularMedia($notasAlunos);
//niumber format
echo "media ie igual a:". number_format($mediaDaSala, 0);

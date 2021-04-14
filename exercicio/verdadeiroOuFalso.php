<?php 

function deleteElemento($vetor, $elDeletar){

    foreach($vetor as $chave => $el){
        if($el == $elDeletar){
            unset($vetor[$chave]);

            return $vetor;
        }
    }
    return false;
}

$vetor = [1,2,3,4,"enpinar","garu"];

$novoVetor = deleteElemento($vetor, "enpinar");
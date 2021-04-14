<?php

function encontarNome(array $vetor, $nomeProcurardo){

    foreach($vetor as $nome){

        if($nome == $nomeProcurardo){
            return true;
        }
    }
    return false;
}
$nome = ["gabriel","diego","julia"];

if(encontarNome($nome, "beatriz")){
    echo "beatriz";
    
}else{
     echo " nao";
}
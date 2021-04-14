<?php

function ehPrimo(int $numero){
    for($i = 2; $i <= $numero; $i++){
        $resto = $numero /$i;

        if($resto == 0){
            return "nao é primo";
        }
    }
    return "O $numero é primo";
}

echo ehPrimo(5);
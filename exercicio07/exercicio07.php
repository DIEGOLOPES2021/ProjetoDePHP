<?php 
function getMaiorMenosr (array $inteiros){
    $maior =$inteiros[0];
    $menor=$inteiros[0];
    foreach($inteiros as $numero){
        if($numero > $maior){
            $maior = $numero;
        }
        if($numero < $menor){
            $menor = $numero;
        }
    }
    return [$maior, $menor];
}

$vetor = [ 100,444,22,3643,90,4596,688];
print_r(getMaiorMenosr($vetor));
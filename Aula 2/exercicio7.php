<?php 
error_reporting(E_ERROR);

$vetor =[];
$soma_par = 0;
$soma_impar =0;

for ($i=0; $i <15 ; $i++) { 
    $vetor[] = rand(1,100);
}

for ($i=0; $i <15 ; $i++) { 
    if ($vetor[$i] % 2 == 0) {
        $soma_par += $vetor[$i];
    }
    else{
        $soma_impar += $vetor[$i];
    }
}

print_r($vetor);

echo "soma dos pares : $soma_par ";
echo "soma impar: $soma_impar";






?>
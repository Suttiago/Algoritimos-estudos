<?php 
error_reporting(E_ERROR);

$vetor =[];
$quantidade_par= 0;
$quantidade_impar =0;

for ($i=0; $i <15 ; $i++) { 
    $vetor[] = rand(1,100);
}

for ($i=0; $i <15 ; $i++) { 
    if ($vetor[$i] % 2 == 0) {
        $quantidade_par ++;
    }
    else{
        $quantidade_impar ++;
    }
}

print_r($vetor);

echo"a quantidade de números par é: $quantidade_par\n";
echo "a quantidade de números impar é: $quantidade_impar"





?>
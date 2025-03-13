<?php 
error_reporting(E_ERROR);

$vetor = [];

for ($i=0; $i <10 ; $i++) { 
   $vetor[] = (int) readline("Digite um número:\n ");
}

$tem;

for ($i=0; $i <10 ; $i++) { 
    if ($vetor[$i] == 2) {
        $tem = true;
        break;
    }
}

if ($tem) {
    echo "O vetor contém o número 2.\n";
} else {
    echo "O vetor não contém o número 2.\n";
}




?>
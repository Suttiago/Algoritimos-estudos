<?php 
 error_reporting(E_ERROR);


$matriz = [];

for ($l=0; $l <4 ; $l++) { 
    $linha = [];
    for ($c=0; $c <3 ; $c++) { 
        echo"digite o valor da posição [$i][$j]:";
        $output = (int) readline("digite o valor");
        $linha[] = is_numeric($output) ? (int)$output : 0;

    }
    $matriz[] = $linha;
}


for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriz[$i][$j] . "\t";
    }
    echo "\n";
}









?>
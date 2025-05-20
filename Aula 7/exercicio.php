<?php 
error_reporting(E_ERROR);

function lerMatriz3x3() {
    $matriz = [];
    for ($l = 0; $l < 3; $l++) { 
        $linha = [];
        for ($c = 0; $c < 3; $c++) { 
            $output = (int) readline("Digite o valor da posição [$l][$c]: ");
            $linha[] = is_numeric($output) ? (int)$output : 0;
        }
        $matriz[] = $linha;
    }
    return $matriz;
}

function imprimirMatriz($matriz) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $matriz[$i][$j] . "\t";
        }
        echo "\n";
    }
}

function somaMatriz($matriz) {
    $soma = 0;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $soma += $matriz[$i][$j];
        }
    }
    return $soma;
}

function somaDiagonal($matriz) {
    $soma_Diagonal = 0;
    for ($i = 0; $i < 3; $i++) {
        $soma_Diagonal += $matriz[$i][$i];
    }
    return $soma_Diagonal;
}

function somaLinhas($matriz) {
    $somas = [];
    for ($i = 0; $i < 3; $i++) {
        $somaLinha = 0;
        for ($j = 0; $j < 3; $j++) {
            $somaLinha += $matriz[$i][$j];
        }
        $somas[] = $somaLinha;
    }
    return $somas;
}

function somaColunas($matriz) {
    $somas = [];
    for ($j = 0; $j < 3; $j++) {
        $somaColuna = 0;
        for ($i = 0; $i < 3; $i++) {
            $somaColuna += $matriz[$i][$j];
        }
        $somas[] = $somaColuna;
    }
    return $somas;
}



$matriz = lerMatriz3x3();

echo "\nMatriz digitada:\n";
imprimirMatriz($matriz);

echo "\nSoma total: " . somaMatriz($matriz) . "\n";
echo "Soma da diagonal principal: " . somaDiagonal($matriz) . "\n";

echo "\nSoma de cada linha:\n";
foreach (somaLinhas($matriz) as $i => $soma) {
    echo "Linha $i: $soma\n";
}

echo "\nSoma de cada coluna:\n";
foreach (somaColunas($matriz) as $j => $soma) {
    echo "Coluna $j: $soma\n";
}
?>
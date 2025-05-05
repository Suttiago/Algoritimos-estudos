<?php 

function definir_vetor($tamanho){
    $vetor = [];
    for ($i=0; $i <$tamanho ; $i++) { 
        $vetor[] = rand(1,100);
    }
    return $vetor;
}

function bubble_sort(array $vetor) : array{
    $j = count($vetor);
    for ($i=$j -1; $i >0 ; $i--) { 
        for ($q=0; $q <$i ; $q++) { 
            if ($vetor[$q]> $vetor[$q +1]){
                $temp = $vetor[$q];
                $vetor[$q] = $vetor[$q + 1];
                $vetor[$q+1] = $temp;
            }
        }
    }
    return $vetor;
}



$tamanho = (int) readline("diga o tamanho do vetor: ");
$vetor1 = definir_vetor($tamanho);
$vetor_ordenado = bubble_sort($vetor1);
print_r($vetor1);
print_r($vetor_ordenado)
?>
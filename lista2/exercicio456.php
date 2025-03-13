<?php 
$vetor = [];

for ($i=0; $i <10 ; $i++) { 
    $vetor[] = rand(1,100);
}


for ($i=0; $i <10 ; $i++) { 
    $vetor_copia[] = $vetor[$i] * $vetor[$i];
    
}


print_r($vetor);
print_r($vetor_copia);

//5
$soma = 0;

for ($i=0; $i <10 ; $i++) { 
    $soma += $vetor_copia[$i];
}
echo "a soma do itens do vetor é: $soma";

//5
for ($i=0; $i < 10 ; $i++) { 
    $vetor_ao_cubo[] = $vetor[$i] * $vetor[$i] * $vetor[$i];
}
print_r($vetor_ao_cubo)

?>
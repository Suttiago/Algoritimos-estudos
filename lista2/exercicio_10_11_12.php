<?php 
$vetor = [];

for ($i=0; $i <4 ; $i++) { 
    $vetor[] = rand(1,10);
}

print_r($vetor);

$soma = 0;

for ($i=0; $i <4 ; $i++) { 
    $soma += $vetor[$i];
}

$media = $soma/4;

if ($media >= 7) {
    echo "Aluno aprovado com a média: $media\n";
}
else{
    echo"Aluno reprovado com a média: $media\n";
}

$notas_acima_da_media = 0;
$notas_abaixo_da_media = 0;
for ($i = 0; $i < 4; $i++) { 
    if ($vetor[$i] > $media) {
        $notas_acima_da_media++;
    } elseif ($vetor[$i] < $media) {
        $notas_abaixo_da_media++;
    }
}

echo "Quantidade de notas acima da média: $notas_acima_da_media\n";
echo "Quantidade de notas abaixo da média: $notas_abaixo_da_media\n";
?>
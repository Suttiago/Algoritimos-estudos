<?php 
error_reporting(E_ERROR);




echo "<h2> exercício 1 </h2>";
//eXERCICIO 1 
$vetor1 = [];

for ($i = 0; $i < 10; $i++) {
    $vetor1[] = rand(1,100);
    
}
print_r($vetor1);
echo "Numeros na ordem inversa :\n";

for ($i = 9; $i >= 0; $i--) {
    echo $vetor1[$i] . "\n";
}
echo "<br>";


echo"<h2> exercício 2 </h2>";
$soma = 0;
$vetor2 = [];

for ($i = 0; $i < 10; $i++) {
    $vetor2[] = rand(1,100);
    $soma += $vetor2[$i];
}
print_r($vetor2);
echo "<br>";
echo("\n a soma do vetor é ".$soma);

echo"<br>";



echo"<h2> exercício 3 </h2>";
$vetor3 = [];
for ($i=0; $i <10 ; $i++) { 
    $vetor3[] = rand(1,100);
}

$maior = max($vetor3);
$min = min($vetor3);

print_r($vetor3);
echo("\n O maior número é: ".$maior);
echo("\n O menor número é: ".$min);

/*
$maior = $vetor3[0];
$menor = $vetor3[0];

for ($i=1; $i < 10 ; $i++) { 
    if ($vetor3[$i]> $maior) {
        $maior = $vetor3[$i];
    }

    elseif( $vetor3 < $menor){
        $menor = $vetor3[$i];
    }
}   */


echo "<br>";


echo "<h2> exercício 4 </h2>";
$vetor4 =[] ;
$tamanho_maximo = 10;

for ($i = 0; $i < $tamanho_maximo; $i++) {
  $vetor4[] = rand(1,100);
}
$soma = 0;

for ($i=0; $i <10 ; $i++) {
    $soma+= $vetor4[$i];
}

$media = $soma / $tamanho_maximo;

print_r($vetor4);
echo "<br>";
echo("A média do vetor é: ".$media);




echo "<br>";
echo "<h2> exercício 5</h2>";
//exercicio 5
$tamanho_maximo = 10;
$vetor5 = [];

for ($i=0; $i < $tamanho_maximo; $i++) { 
    $vetor5[] = rand(1,100); 
}

$vetor6 = array_merge($vetor5); 
print_r($vetor5);
print_r($vetor6);







?>
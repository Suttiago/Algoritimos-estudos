<?php 
error_reporting(E_ERROR);
//1
$vetor1 = [4,5,3,2,6,8,0,6,3,7];

print_r($vetor1);

echo "<br>";
for ($i=9; $i >=0 ; $i--) { 
   var_dump($vetor1[$i]);
}


//exerciico 3
$vetor2 = [];
for ($i=0; $i <10 ; $i++) { 
   $vetor2[] = (int) readline("Digite um número:\n ");

   echo "\n $i";  
}
print_r($vetor2);
?>
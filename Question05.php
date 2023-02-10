<!-- 05 - Faça um algoritmo PHP que receba os valores A e B, 
imprima-os em ordem crescente em relação aos seus valores. 
Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". -->

<?php

echo "Digite um numero: \n";
$A = readline();

echo "Digite um segundo número: ";
$B = readline();

if ($A > $B) {
  echo $B . ' ' . $A;
} else {
  echo $A . ' ' . $B;
}
?>
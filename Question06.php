<!-- 06 - Faça um algoritmo em PHP onde verifica se o valor da variável A é maior
 ou menor que o valor da variável B. A mensagem a ser impressa deve ser 
 "A maior que B" ou "A menor que B". -->

<?php

echo "um algoritmo em PHP onde verifica se o valor da variável A é maior
ou menor que o valor da variável B. \n";

echo "A) Digite um numero: \n";
$A = readline();

echo "B) Digite um segundo número: \n";
$B = readline();

if ($A > $B) {
  echo "A é maior que B";
} else {
  echo "A é menor que B";
}
?>
<!-- 27 - UTILIZAR LAÇOS DE REPETIÇÃO – for() – while() e Funções de String
Faça um Exercício em PHP Ler 3 números, 
os possíveis lados de um triângulo, 
e imprimir a classificação de acordo com tamanho dos lados. 
-->

<?php

echo "Insira 3 números para descobrir qual triângulo é. \n Insira o primeiro número: ";
$n1 = readline();

echo "Insira o segundo número: ";
$n2 = readline();

echo "Insira o terceiro número: ";
$n3 = readline();

if ($n1 == $n2 && $n2 == $n3) {
  echo "Triângulo Equilátero.";
} elseif ($n1 == $n2 || $n2 == $n3 || $n1 == $n3) {
  echo "Triângulo Isósceles.";
} else {
  echo "Triângulo Escaleno.";
}

?>
<!-- 24 - UTILIZAR LAÇOS DE REPETIÇÃO – for() – while() e Funções de String
Faça um algoritmo PHP que receba duas strings, 
e descubra se elas são iguais ou diferentes, 
imprimindo “IGUAL” ou “DIFERENTE” respectivamente. 
-->

<?php

echo "Digite qualquer palavra: ";
$string1 = readline();

echo "Digite a mesma palavra ou uma palavra diferente: ";
$string2 = readline();

if (strcmp($string1, $string2) == 0) {
  echo "IGUAL";
} else {
  echo "DIFERENTE";
}

?>
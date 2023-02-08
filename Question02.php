<!-- 02 - Crie um algoritmo que solicite a entrada de um número, 
e exiba a tabuada de 0 a 10 de acordo com o número solicitado. -->

<?php

echo "Digite um número: ";
$num = readline();

for ($i = 0; $i <= 10; $i++) {
  $resultado = $num * $i;
  echo "$num x $i = $resultado \n";
}

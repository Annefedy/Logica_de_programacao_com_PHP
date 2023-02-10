<!-- 22 - UTILIZAR LAÇOS DE REPETIÇÃO – for() – while() e Funções de String
Efetue um algoritmo PHP que receba dois valores quaisquer 
e imprime todos os valores intermediários a ele, 
veja exemplo: Primeiro Valor = 5 Segundo Valor = 15 
Imprime: 6 7 8 9 10 11 12 13 14 -->

<?php

echo "Dgite o primeiro valor: ";
$valor1 = readline();

echo "Dgite o segundo valor: ";
$valor2 = readline();

for ($i = $valor1 + 1; $i < $valor2; $i++) {
  echo "$i ";
}

?>
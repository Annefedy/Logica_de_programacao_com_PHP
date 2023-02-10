<!-- 29 - UTILIZAR LAÇOS DE REPETIÇÃO – for() – while() e Funções de String
Chico tem 1,50m e cresce 2 centímetros por ano, 
enquanto Juca tem 1,10m e cresce 3 centímetros por ano. 
Construir um algoritmo que calcule 
e imprima quantos anos serão necessários para que Juca seja maior que Chico. 
-->


<?php

$alturaChico = 1.50;
$alturaJuca = 1.10;
$taxaChico = 2;
$taxaJuca = 3;
$anos = 0;

while ($alturaChico >= $alturaJuca) {
  $alturaChico += ($taxaChico / 100);
  $alturaJuca += ($taxaJuca / 100);
  $anos++;
}

echo "Serão necessários $anos anos para que Juca seja maior que Chico.";

?>
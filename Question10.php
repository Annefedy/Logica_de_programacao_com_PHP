<!-- 10 - Faça um script que converta metros para centímetros. -->


<?php
echo "Insira qualquer valor em metros para convertir esse valor em centímetros: ";
$metros = fgets(STDIN);


$centimetros = $metros * 100;

echo "A conversão de {$metros}m para centímetros é de {$centimetros}cm";

?>
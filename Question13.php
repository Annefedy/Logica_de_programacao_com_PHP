<!-- 13 - Faça um script que peça a temperatura em graus Farenheit, 
transforme e mostre a temperatura em graus Celsius. -->

<?php

// Declaração da variável para armazenar a temperatura em Farenheit
$tempFarenheit = 0;

// Pede a temperatura em Farenheit e armazena na variável
echo "Digite a temperatura em graus Farenheit: ";
$tempFarenheit = readline();

// Calcula a temperatura em Celsius
$tempCelsius = ($tempFarenheit - 32) * 5 / 9;

// Exibe o resultado
echo "A temperatura em Celsius é: $tempCelsius";

?>
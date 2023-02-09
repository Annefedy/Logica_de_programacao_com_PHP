<!-- 12 - Faça um script que pergunte quanto você ganha por hora 
e o número de horas trabalhadas no mês. 
Calcule e mostre o total do seu salário no referido mês. -->


<?php

echo "Quantos você ganha por hora? \n";
$ganhoPorHora = readline();

echo "Quantas horas você trabalhou no mês? \n";
$horasTrabalhadas = readline();

$salarioMensal = $ganhoPorHora * $horasTrabalhadas;

echo "Seu salário no mês foi de R$ " . $salarioMensal;

?>
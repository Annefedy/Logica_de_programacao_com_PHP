<!-- 07 - Crie um algoritmo para calcular a média final de um aluno, 
para isso, solicite a entrada de três notas e as insira em um array, 
por fim, calcule a média geral. Caso a média seja maior ou igual a seis,
exiba aprovado, caso contrário, exiba reprovado. 
Exiba também a média final calculada. 
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado] -->


<?php

//Solicita a entrada de três notas
$nota1 = floatval(readline('Digite a nota 1: '));
$nota2 = floatval(readline('Digite a nota 2: '));
$nota3 = floatval(readline('Digite a nota 3: '));

//Inserindo as notas em um array
$notas = array($nota1, $nota2, $nota3);

//Calculando a média geral
$mediaGeral = array_sum($notas) / count($notas);

//Verificando se foi aprovado ou reprovado
if ($mediaGeral >= 6) {
  echo 'Média geral: ' . $mediaGeral . ' [Aprovado]' . PHP_EOL;
} else {
  echo 'Média geral: ' . $mediaGeral . ' [Reprovado]' . PHP_EOL;
}

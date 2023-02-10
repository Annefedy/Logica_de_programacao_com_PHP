<!-- 19 - Resolva um algoritmo PHP que receba quatro notas de um aluno, 
calcule e imprima a média aritmética das notas 
e a mensagem de aprovado para média superior ou igual a 7.0 
ou a mensagem de reprovado para média inferior a 7.0. -->

<?php

echo "Dgite a primeira nota: ";
$nota1 = readline();

echo "Dgite a segunda nota: ";
$nota2 = readline();

echo "Dgite a terceira nota: ";
$nota3 = readline();

echo "Dgite a primeira nota: ";
$nota4 = readline();

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media >= 7.0) {
  echo "Parabéns, você foi aprovado com média " . $media;
} else {
  echo "Infelizmente, você foi reprovado com média " . $media;
}
?>
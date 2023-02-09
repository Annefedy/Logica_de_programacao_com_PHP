<!-- 14 - Tendo como dado de entrada a altura (h) de uma pessoa, 
construa um script que calcule seu peso ideal, utilizando as seguintes fórmulas:
    Fórumla para homens: (72.7*h) - 58
    Fórumla para mulheres: (62.1*h) - 44.7 -->

<?php
echo "Qual é sua altura: ";

$h = readline();

$pesoIdealHomens = (72.7 * $h) - 58;
echo "Peso Ideal para homens: $pesoIdealHomens kg \n";

$pesoIdealMulheres = (62.1 * $h) - 44.7;
echo "Peso Ideal para mulheres: $pesoIdealMulheres kg \n";

?>
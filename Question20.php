<!-- 20 - Realize um algoritmo PHP que calcule e imprima 
o salário reajustado de um funcionário de acordo com a seguinte regra:
• salários até 300, reajuste de 50%
• salários maiores que 300, reajuste de 30%
-->

<?php
echo "Qual é seu salario? ";
$salario = readline();

if ($salario <= 300) {
  $salario_reajustado = $salario + ($salario * 0.5);
  echo "O salário reajustado é: " . $salario_reajustado;
} else {
  $salario_reajustado = $salario + ($salario * 0.3);
  echo "O salário reajustado é: " . $salario_reajustado;
}
?>
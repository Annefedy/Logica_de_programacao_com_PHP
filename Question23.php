<!-- 23 - UTILIZAR LAÇOS DE REPETIÇÃO – for() – while() e Funções de String
Resolva um Exercício em PHP que receba dois valores quaisquer 
e efetue sua multiplicação utilizando para isso apenas o operador "+", 
visto que: (3 * 5) = 5 + 5 + 5 (4 * 12) = 12 + 12 + 12 + 12 -->

<?php

echo "Digite o primeiro valor: ";
$num1 = readline();

echo "Dgite o segundo valor: ";
$num2 = readline();

$resultado = 0;

for ($i = 0; $i < $num2; $i++) {
  $resultado = $resultado + $num1;
}

echo "A multiplicação de $num1 x $num2 é igual a $resultado";

?>
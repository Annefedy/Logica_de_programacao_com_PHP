<!-- 18 - Resolva um Exercício em PHP que receba os valores A, B, C e D. 
Efetue a soma entre A e C, 
a multiplicação entre B e D 
e verifique se o resultado da soma é maior, 
menor ou igual ao da multiplicação.
Imprima: "A+C é maior que B+D", "A+C é menor que B+D", "A+C é igual a B+D". -->

<?php
echo "Digite um valor A: ";
$A = readline();

echo "Digite um valor B: ";
$B = readline();

echo "Digite um valor C: ";
$C = readline();

echo "Digite um valor D: ";
$D = readline();

$soma = $A + $C;
$multiplicacao = $B * $D;

if ($soma > $multiplicacao) {
  echo "A+C é maior que B+D";
} elseif ($soma < $multiplicacao) {
  echo "A+C é menor que B+D";
} else {
  echo "A+C é igual a B+D";
}
?>
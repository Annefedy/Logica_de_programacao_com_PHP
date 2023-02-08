 <!-- Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo,
 negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". -->

 <?php
  $num = intval(readline("Digite um número:"));

  if ($num > 0) {
    echo "valor positivo\n";
  } elseif ($num < 0) {
    echo "Valor negativo\n";
  } else {
    echo "Igual a Zero\n";
  }
  ?>
<!-- 04 - Solicite a entrada de um número e descubra se um número digitado é par
 ou ímpar. -->

<?php

$numero = readline('Digite um número: ');

if ($numero % 2 == 0) {
  echo "O número é par";
} else {
  echo "O número é ímpar";
}

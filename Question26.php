<!-- 26 - UTILIZAR LAÇOS DE REPETIÇÃO – for() – while() e Funções de String
Entrar com um número e informar se ele é divisível 
por 10, por 5, por 2 ou se não é divisível por nenhum destes 
-->


<?php

echo "Informar qualquer número: ";
$numero = readline();

if ($numero % 10 == 0) {
  echo "O número $numero é divisível por 10.";
} else if ($numero % 5 == 0) {
  echo "O número $numero é divisível por 5.";
} else if ($numero % 2 == 0) {
  echo "O número $numero é divisível por 2.";
} else {
  echo "O número $numero não é divisível por 10, 5 ou 2.";
}
?>
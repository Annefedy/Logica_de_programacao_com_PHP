<!-- 25 - Efetue um algoritmo PHP que receba uma string 
e um caractere de busca e descubra o número de ocorrências 
deste caractere dentro da string. 
Para isso utilize laço de repetição, e as funções de string “strlen” e “substr”.
 -->


<?php

echo "um algoritmo PHP que receba uma string 
e um caractere de busca 
e descubra o número de ocorrências 
este caractere dentro da string. \n";

echo "Digite uma frase: \n";
$string = readline();

echo "Qual caractere você deseja saber quantas ocorrências existem na frase: \n";
$caractere = readline();

$numeroOcorrencias = 0;

for ($i = 0; $i < strlen($string); $i++) {
  $caractereAtual = substr($string, $i, 1);

  if ($caractereAtual == $caractere) {
    $numeroOcorrencias++;
  }
}

echo "O caractere '$caractere' aparece $numeroOcorrencias vezes na frase.";

?>
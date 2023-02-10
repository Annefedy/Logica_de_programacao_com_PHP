<!-- 28 - UTILIZAR LAÇOS DE REPETIÇÃO – for() – while() e Funções de String
A biblioteca de uma universidade deseja fazer um algoritmo 
que leia o nome do livro que será emprestado, 
o tipo de usuário (professor ou aluno) 
e possa imprimir um recibo conforme mostrado a seguir.
Considerar que o professor tem 10 dias para devolver o livro 
o aluno somente 3 dias. 
-->

<?php

//Declaração de variáveis
$nomeLivro = '';
$tipoUsuario = '';
$diasDevolucao = 0;

//Recebendo os dados do usuário
echo "Digite o nome do livro: ";
$nomeLivro = readline();

echo "Digite o tipo de usuário [Professor/Aluno]: ";
$tipoUsuario = readline();

//Verificando o tipo de usuário
if ($tipoUsuario == "Professor") {
  $diasDevolucao = 10;
} elseif ($tipoUsuario == "Aluno") {
  $diasDevolucao = 3;
}

//Impressão do recibo

echo "========== Recibo de empréstimo ==========" . PHP_EOL;
echo "Nome do livro: " . $nomeLivro . PHP_EOL;
echo "Tipo de usuário: " . $tipoUsuario . PHP_EOL;
echo "Dias para devolução: " . $diasDevolucao . PHP_EOL;
echo "Data de devolução: " . date('d/m/Y', strtotime('+' . $diasDevolucao . 'days')) . PHP_EOL;
echo "Obrigado por utilizar nossos serviços!" . PHP_EOL;
echo "============================";

?>
<!-- 15 - João Papo-de-Pescador, homem de bem, 
comprou um microcomputador para controlar o rendimento diário de seu trabalho. 
Toda vez que ele traz um peso de peixes maior que o estabelecido
pelo regulamento de pesca do estado de São Paulo (50 quilos) deve pagar 
uma multa de R$ 4,00 por quilo excedente.
João precisa que você faça um script que leia a variável peso (peso de peixes) 
e calcule o excesso.
Gravar na variável excesso a quantidade de quilos além do limite 
e na variável multa o valor da multa que João deverá pagar. 
Imprima os dados do script com as mensagens adequadas. -->


<?php
echo "Digite o peso do peixe: ";
$peso = readline();

$limite = 50;

$multa = 4;

$excesso = $peso - $limite;
$valorMulta = $excesso * $multa;

if ($peso > 50) {
  echo "João excedeu o limite de $limite quilos em $excesso quilos. \nA multa a ser paga é de R$ $valorMulta.";
} else {
  echo "Você não excede o limite da regulamentação pesqueira do Estado de São Paulo";
}
?>
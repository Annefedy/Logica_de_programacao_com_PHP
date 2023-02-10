<!-- 17 - Faça um script para uma loja de tintas. 
O script deverá pedir o tamanho em metros quadrados da área a ser pintada. 
Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados 
e que a tinta é vendida em latas de 18 litros, 
que custam R$ 80,00 ou em galões de 3,6 litros, 
que custam R$ 25,00.
Informe ao usuário as quantidades de tinta a serem compradas 
e os respectivos preços em 3 situações:
comprar apenas latas de 18 litros;
comprar apenas galões de 3,6 litros;
misturar latas e galões, de forma que o preço seja o menor. 
Acrescente 10% de folga e sempre arredonde os valores para cima, 
isto é, considere latas cheias. -->

<?php

$area = readline("Qual é o tamanho em metros quadrados da área, você quer pintar? ");

// Cálculo do litros de tinta necessários
$litros = $area / 6;

// Cálculo de latas de 18 litros
$latas = ceil($litros / 18);

// Cálculo de galões de 3,6 litros
$galoes = ceil($litros / 3.6);

// Cálculo de mistura de latas e galões
$multiplicadorLata = ceil($litros / 18);
$resto = $litros % 18;
$multiplicadorGalao = ceil($resto / 3.6);

// Preços
$precoLata = $latas * 80;
$precoGalao = $galoes * 25;
$precoMistura = ($multiplicadorLata * 80) + ($multiplicadorGalao * 25);

// Adiciona 10% de folga
$litrosFolga = $litros * 1.1;
$latasFolga = ceil($litrosFolga / 18);
$galoesFolga = ceil($litrosFolga / 3.6);
$multiplicadorLataFolga = ceil($litrosFolga / 18);
$restoFolga = $litrosFolga % 18;
$multiplicadorGalaoFolga = ceil($restoFolga / 3.6);
$precoLataFolga = $latasFolga * 80;
$precoGalaoFolga = $galoesFolga * 25;
$precoMisturaFolga = ($multiplicadorLataFolga * 80) + ($multiplicadorGalaoFolga * 25);

echo "Para pintar uma área de $area metros quadrados, serão necessários $litros litros de tinta. \n";
echo "Opção 1: Comprar apenas latas de 18 litros ($latas latas). Preço total: R$$precoLata.\n";
echo "Opção 2: Comprar apenas galões de 3,6 litros ($galoes galões). Preço total: R$$precoGalao.\n";
echo "Opção 3: Misturar latas e galões ($multiplicadorLata latas e $multiplicadorGalao galões). Preço total: R$$precoMistura.\n";
echo "Com 10% de folga:\n";
echo "Opção 1: Comprar apenas latas de 18 litros ($latasFolga latas). Preço total: R$$precoLataFolga.\n";
echo "Opção 2: Comprar apenas galões de 3,6 litros ($galoesFolga galões). Preço total: R$$precoGalaoFolga.\n";
echo "Opção 3: Misturar latas e galões ($multiplicadorLataFolga latas e $multiplicadorGalaoFolga galões). Preço total: R$$precoMisturaFolga.\n";

?>
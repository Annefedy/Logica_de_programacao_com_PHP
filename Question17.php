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

// Adiciona 10% de folga
$litrosFolga = $litros * 1.1;
// calcula quantidade latas
$latasFolga = floor($litrosFolga / 18);
//calcula o restante de litros eliminando as latas já separadas
$QtdResto = $litrosFolga - ($latasFolga * 18);
// calcula a quantidade de galoes baseado no resto de litros
$galoesFolga = ($QtdResto / 3.6);
// caso a quantidade de galões seja maior que 3,9 considerar floor() senão ceil()
if ($galoesFolga > 4) {
  $galoesFolga = floor($galoesFolga);
} else {
  $galoesFolga = ceil($galoesFolga);
}

echo "Tot litro:  " . number_format($litrosFolga, 2, ',', '.') . "\n";
echo "Real litro: " . number_format((($latasFolga * 18) + ($galoesFolga * 3.6)), 2, ',', '.') . "\n";
echo "Qtd lata :  " . $latasFolga  . "\n";
echo "Tot lata :  " . number_format(($latasFolga * 80), 2, ',', '.')  . "\n";
echo "Qtd galao:  " . $galoesFolga . "\n";
echo "Tot galao:  " . number_format(($galoesFolga * 25), 2, ',', '.')  . "\n";
echo "Val Total:  " . number_format((($latasFolga * 80) + ($galoesFolga * 25)), 2, ',', '.')  . "\n";

?>
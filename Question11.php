<!-- 11 - Faça um script que calcule a área de um quadrado, 
em seguida mostre o dobro desta área para o usuário. -->

<?php
echo "Calcule a área de um quadrado, e mostrar o dobro desta área: ";
$ladoQuadrado = readline();
$areaQuadrado = $ladoQuadrado * $ladoQuadrado;
$dobroAreaQuadrado = $areaQuadrado * 2;

echo "A área do quadrado é de $areaQuadrado e seu dobro é de $dobroAreaQuadrado";

?>
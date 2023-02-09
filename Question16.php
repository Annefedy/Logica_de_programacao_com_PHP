<!-- 16 - Faça um script que pergunte quanto você ganha por hora 
e o número de horas trabalhadas no mês. 
Calcule e mostre o total do seu salário no referido mês, 
sabendo-se que são descontados 11% para o Imposto de Renda,
8% para o INSS e 5% para o sindicato, 
faça um script que nos dê:salário bruto.
quanto pagou ao INSS.
quanto pagou ao sindicato.
o salário líquido.calcule os descontos e o salário líquido, 
conforme a tabela abaixo:
+ Salário Bruto : R$
- IR (11%) : R$
- INSS (8%) : R$
- Sindicato ( 5%) : R$
= Salário Liquido : R$ -->

<?php
echo "Quanto você ganha por hora: ";
$h = readline();

echo "O número de horas que você trabalha por mês: ";
$horaMes = readline();

$SalarioBruto = $h * $horaMes;
$PorcentagemIR = $SalarioBruto * (11 / 100);
$PorcentagemINSS = $SalarioBruto * (8 / 100);
$PorcentagemSindicato = $SalarioBruto * (5 / 100);

$SalarioLiquido = $SalarioBruto - $PorcentagemIR - $PorcentagemINSS - $PorcentagemSindicato;

echo "+ Salário Bruto : R$ " . number_format($SalarioBruto, 2, ',', '.') . "\n";
echo "- IR (11%) : R$" . number_format($PorcentagemIR, 2, ',', '.') . "\n";
echo "- INSS (8%) : R$ " . number_format($PorcentagemINSS, 2, ',', '.') . "\n";
echo "- Sindicato ( 5%) : R$ " . number_format($PorcentagemSindicato, 2, ',', '.') . "\n";
echo "= Salário Liquido : R$ " . number_format($SalarioLiquido, 2, ',', '.') . "\n";

?>
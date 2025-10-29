<?php

/*

Faça um programa que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês

*/

$salario_por_hora = floatval(readline("Digite quando você recebe por hora: "));
$horas_trabalhas = floatval(readline("Digite a quantidade de horas trabalhadas: "));

$total_salario = $salario_por_hora * $horas_trabalhas;

echo "Salário do mês = ".$total_salario;

?>
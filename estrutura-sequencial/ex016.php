<?php

/*

Faça um programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura de tinta é de 1 litro para cada 3 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00. Informe ao usuário a quantidade de latas de tintas a serem compradas e o preço total

*/

$area_pintada = intval(readline("Digite a área a ser pintada: "));

$qtd_latas = $area_pintada / 3;
$valor_total_latas = intval($qtd_latas) * 80;

echo "Total de latas = ".intval($qtd_latas)." valor total = ".$valor_total_latas



?>
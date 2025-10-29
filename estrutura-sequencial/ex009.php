<?php

/*

Faça um programa que peça a temperatura em graus Fahrenheit, transforme e mostre a temperatura em graus Celsius

*/

$f = floatval(readline("Digite um valor em Fahrenheit: "));

$c = 5 * (($f - 32) / 9);

echo "Conversão = ".$c;

?>